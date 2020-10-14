<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pendaftaran;
use App\Pengumuman;
use App\Sekolah;
use App\CalonSiswa;
use App\Ortu;
use App\KesehatanSiswa;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use PDF;
use File;
use DateTime;

class PendaftaranController extends Controller
{
    public function index()
    {
        //mengambil data kode sekolah dari operator yang login
        $kd_sekolah_login=auth()->user()->kd_sekolah;
        // mengambil data dari table pendaftaran berdasarkan kode sekolah operatro yang sedang login
        $v=DB::table('sekolah')->where('kd_sekolah',$kd_sekolah_login)->count();
        if($v==0)
        {
            return redirect('/sekolah/create');
        }
       
        $sekolah= Sekolah::where('kd_sekolah',$kd_sekolah_login)->get();
        // $pendaftaran = Pendaftaran::with('sekolah','calon_siswa')->where('pendaftaran.kd_sekolah',$kd_sekolah_login)->get();

        $pendaftaran = DB::table('pendaftaran')
        ->join('sekolah','pendaftaran.kd_sekolah','=','sekolah.kd_sekolah')
        ->join('calon_siswa','pendaftaran.nik_siswa','=','calon_siswa.nik_siswa')
        ->select(
            'pendaftaran.no_pendaftaran',
            'calon_siswa.nik_siswa',
            'calon_siswa.nama_siswa',
            'calon_siswa.lat_siswa',
            'calon_siswa.long_siswa',
            'pendaftaran.tanggal_pendaftaran',
            'sekolah.kd_sekolah',
            'pendaftaran.umur',
            'pendaftaran.jarak',
            'pendaftaran.status',
            'pendaftaran.id'
            )
        ->where('pendaftaran.kd_sekolah',$kd_sekolah_login)
        ->get();
        // mengirim data select ke view index
    	return view('pendaftaran.index',['pendaftaran' => $pendaftaran],['sekolah' => $sekolah]);
    }

    public function melihatDataPendaftaran($nik_siswa)
    {
        $no_kk=session()->get('no_kk');
        $hh=CalonSiswa::where('no_kk',$no_kk)->where('nik_siswa',$nik_siswa)->count();

        if ($hh==0) {
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }

        //mencek apakah siswa sudah daftar
        $this->cekTerdaftar($nik_siswa);
        $cekcetak=DB::table('pendaftaran')->where('nik_siswa',$nik_siswa)->count();
        if ($cekcetak==0) {
           session()->put('cekcetak','kosong');
        }
        else
        {
            session()->forget('cekcetak');
        }


        $pendaftaran = DB::table('pendaftaran')
        ->join('sekolah','pendaftaran.kd_sekolah','=','sekolah.kd_sekolah')
        ->join('calon_siswa','pendaftaran.nik_siswa','=','calon_siswa.nik_siswa')
        ->where('pendaftaran.nik_siswa',$nik_siswa)->get();
        return view('pendaftaran.data',['pendaftaran' => $pendaftaran],['nik_siswa'=>$nik_siswa]);
    }

    public function cekTerdaftar($nik_siswa) //untuk mengecek menggunakan select hasil dioutput ke session
    {
        $v = Pendaftaran::where('nik_siswa',$nik_siswa)->count();
        if($v>=2)
        {
            session()->flash('limitsekolah','udah');
        }
        else
        {
            session()->forget('limitsekolah');
        }
    }

    public function detail($nik_siswa)
    {
        $kd_sekolah_login=auth()->user()->kd_sekolah;
        $hh_kd_sekolah=Pendaftaran::where('kd_sekolah',$kd_sekolah_login)->where('nik_siswa',$nik_siswa)->count();
        if ($hh_kd_sekolah==0) {
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }

        $data=DB::table('pendaftaran')
        ->join('calon_siswa','pendaftaran.nik_siswa','=','calon_siswa.nik_siswa')
        ->join('kesehatan_siswa','calon_siswa.nik_siswa','=','kesehatan_siswa.nik_siswa')
        ->join('ortu','calon_siswa.no_kk','=','ortu.no_kk')
        ->where('pendaftaran.nik_siswa',$nik_siswa)
        ->get();
        return view('pendaftaran.detail',['data' => $data]);
        // $calon_siswa = CalonSiswa::with('ortu')->where('calon_siswa.nik_siswa',$nik_siswa)->get();
        // $kesehatan_siswa=DB::table('kesehatan_siswa')->where('nik_siswa',$nik_siswa)->get();
        // return view('pendaftaran.detail',['calon_siswa' => $calon_siswa],['kesehatan_siswa'=>$kesehatan_siswa]);
    }
    
    public function create($nik_siswa)
    {
        //untuk menyaring agar hanya dapat mengeksekusi nik yang satu no kk dengan no kk yang login
        $no_kk=session()->get('no_kk');
        $hh=CalonSiswa::where('no_kk',$no_kk)->where('nik_siswa',$nik_siswa)->count();

        if ($hh==0) {
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }
        
        $cek=DB::table('pendaftaran')->where('nik_siswa',$nik_siswa)->count();
        if($cek>=2)
        {
            return redirect()->back();
        }
        // $sekolah = Sekolah::with()->all();
        $sekolah=DB::table('sekolah')
        ->join('zonasi','sekolah.kd_zonasi','=','zonasi.kd_zonasi')
        ->join('calon_siswa','zonasi.kd_zonasi','=','calon_siswa.kd_zonasi')
        ->where('calon_siswa.nik_siswa','=',$nik_siswa)
        ->get();

        $siswa=DB::table('calon_siswa')->where('nik_siswa',$nik_siswa)->get();

        return view('pendaftaran.create',['sekolah' => $sekolah],['siswa'=>$siswa]);
        // return view('pendaftaran.create', compact('sekolah','calon_siswa'));
    }

    public function cetakPendaftaran()
    {
        $kd_sekolah=auth()->user()->kd_sekolah;
        $data=DB::table('pendaftaran')
        ->join('sekolah','pendaftaran.kd_sekolah','=','sekolah.kd_sekolah')
        ->join('calon_siswa','pendaftaran.nik_siswa','=','calon_siswa.nik_siswa')
        ->where('pendaftaran.kd_sekolah',$kd_sekolah)
        ->get();
        $kertas=PDF::loadview('pendaftaran.cetak',['data'=>$data])->setPaper('A4','potrait');
        return $kertas->stream('Rekap Pendaftaran.pdf');
    }

    public function cetakData($nik_siswa) //untuk cetak bukti pendaftaran calon siswa
    {
        $no_kk=session()->get('no_kk');
        $hh=CalonSiswa::where('no_kk',$no_kk)->where('nik_siswa',$nik_siswa)->count();

        if ($hh==1) 
        {
            $pendaftaran = DB::table('pendaftaran')
            ->join('sekolah','pendaftaran.kd_sekolah','=','sekolah.kd_sekolah')
            ->join('calon_siswa','pendaftaran.nik_siswa','=','calon_siswa.nik_siswa')
            ->where('pendaftaran.nik_siswa',$nik_siswa)->get();

            $data_pendaftaran = PDF::loadview('pendaftaran.cetak',['pendaftaran' => $pendaftaran])->setPaper('A4','potrait');
            return $data_pendaftaran->stream();
            
        }
        else{
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {                   
        //jumlah cadangan dan kuota yang dibutuhkan sekolah yng sdg di proses
        $utama=$request->utama;
        $cadangan=$request->cadangan;
        $jkuota=$utama+$cadangan;//menambahkan kuota utama dan cadangan
        
        //mengecek di database jumlah kuota pendaftar di sekolah yang diproses
        $kd_sekolah=$request->kd_sekolah;
        $jkuota_masuk=Pendaftaran::where('kd_sekolah',$kd_sekolah)->count();
        
        //mengambil jumlah kuota yang berstatus diterima
        $utama_masuk=Pendaftaran::where('kd_sekolah',$kd_sekolah)->where('status','Diterima')->count();
        
        //mendapatkan jarak 
        $jaraks=$request->jarak;
        
        if($jkuota_masuk>=$jkuota)//jika total kuota
        {
            $request->session()->flash('peringatan','maaf, kuota sekolah yang anda pilih sudah penuh, silahkan mendaftar di sekolah lain dengan jarak terdekat');
            return redirect()->back();
        }
        else
        {
            // if($jaraks<=3000)
            if($jaraks<=3000 && $utama_masuk<$utama)
            {
                $status = 'Diterima';
            } 
            else
            {
                $status = 'Cadangan';
            }

            //generate no pendaftaran {
            $b1 = mt_rand(1000,9999); //membuat angka random 4 digit
            $b2 = date('Ashi'); //tanggal format terbalik
            $no_pendaftaran = 'PDFT-'.$b1.'-'.$b2; //memasukkan no_pendaftaran berdasarkan no random dan jam input
            //}
            
            //menghitung umur siswa
            $tgl_lahir=$request->tanggal_lahir;
            $umur=$this->getUmur($tgl_lahir);
            
            //mendapatkan tanggal sekarang
            $tanggal_pendaftaran=date('m-d-Y');

            //insert ke table
            DB::table('pendaftaran')->insert([
                'no_pendaftaran' => $no_pendaftaran,
                'nik_siswa' => $request->nik_siswa,
                'kd_sekolah' => $request->kd_sekolah,
                'jarak' => $jaraks,
                'umur' => $umur,
                'status' => $status,
                'tanggal_pendaftaran' => $tanggal_pendaftaran
            ]);

            //redirect halaman pendaftaran
            return redirect('/pendaftaran/data/'.$request->nik_siswa);
        }
    }

    public function hapus($id)
    {
        $kd_sekolah_login=auth()->user()->kd_sekolah;
        $hh_kd_sekolah=Pendaftaran::where('kd_sekolah',$kd_sekolah_login)->where('no_pendaftaran',$id)->count();
        
        if ($hh_kd_sekolah==0) {
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }

        // menghapus data pendaftaran berdasarkan id yang dipilih
        DB::table('pendaftaran')->where('no_pendaftaran',$id)->delete();
            
        // alihkan halaman ke halaman pendaftaran
        return redirect('/pendaftaran');
    }

    public function terima($id)
    {
        $kd_sekolah_login=auth()->user()->kd_sekolah;
        $hh_kd_sekolah=Pendaftaran::where('kd_sekolah',$kd_sekolah_login)->where('no_pendaftaran',$id)->count();
        if ($hh_kd_sekolah==0) {
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }
        
        //fungsi untuk merubah status menjadi diterima
        DB::table('pendaftaran')->where('no_pendaftaran',$id)->update([
            'status' => "Diterima"
        ]);
        return redirect('/pendaftaran');
    }

    public function pengumuman()
    {
        $kd_sekolah=auth()->user()->kd_sekolah;
        //menghapus data yang ada terlebih dahulu
        DB::table('pengumuman')->where('kd_sekolah',$kd_sekolah)->delete();
        //mengambil data yang diselect berdasarkan kd_sekolah yang sedang login, dan yang statusnya diterima
        $pendaftaran=Pendaftaran::select('no_pendaftaran','nik_siswa','tanggal_pendaftaran','kd_sekolah','umur','jarak','status')
            ->where('kd_sekolah',$kd_sekolah)
            ->get()->toArray();
        //membuat perulangan berdasarkan data yang telah di ambil sebelumnya untuk menginsert ke tabel pengumuman
        foreach ($pendaftaran as $d)
        {
            Pengumuman::insert($d);
        }
        return redirect('/pengumuman/indexop');
    }

    public static function getJarak($lat1, $lon1, $lat2, $lon2) //fungsi berisi rumus dengan parameter latlong2 titik untuk menentukan jarak
    {
        $theta = $lon1 - $lon2;
        $miles = (sin(deg2rad($lat1)) * sin(deg2rad($lat2))) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
        $miles = acos($miles);
        $miles = rad2deg($miles);
        $miles = $miles * 60 * 1.1515;
        // $feet = $miles * 5280;
        // $yards = $feet / 3;
        $kilometers = $miles * 1.609344;
        $meters = $kilometers * 1000;
        return round($meters); 
    }
    
    public function getUmur($bday)
    {//fungsi untuk menghitung umur berdasarkan tanggal lahir 
        $bdays = new DateTime($bday);
        $today = new Datetime(date('m-d-Y'));
        $diff = $today->diff($bdays);
        $age=$diff->y;
        return $age;
    }

    public static function getTotSekolah()
    {
        return Sekolah::count();
    }

    public static function getTotPendaftar()
    {
        return Pendaftaran::where('status','Diterima')->count();
    }

    public static function getMyPendaftar()
    {
        $kd_sekolah=auth()->user()->kd_sekolah;
        return Pendaftaran::where('kd_sekolah',$kd_sekolah)->count();
    }
}
