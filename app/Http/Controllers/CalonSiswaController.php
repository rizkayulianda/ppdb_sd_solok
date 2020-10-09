<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CalonSiswa;
use App\Zonasi;
use App\Pendaftaran;
use Illuminate\Support\Facades\Input;
use File;

class CalonSiswaController extends Controller
{
    public function index(Request $request) //Backend
    {
        // mengambil data dari table calon_siswa dan sekolah
        $no_kk_ortu=$request->session()->get('no_kk');
        $calon_siswa = CalonSiswa::where('no_kk',$no_kk_ortu)->get();

        //cek apakah anak sudah daftar
        $this->cekLimit($no_kk_ortu);

    	// mengirim data  ke view index
    	return view('calon_siswa.index',['calon_siswa' => $calon_siswa]);
    }

    public function cekLimit($no_kk)
    {
        $limit = DB::table('calon_siswa')->where('no_kk',$no_kk)->count();
        if($limit>=3)
        {
           session()->flash('limit','udah');
        }
        else
        {
            session()->forget('limit');
        }
    }

    public function detail($id)
    {
        $no_kk=session()->get('no_kk');
        $hh=CalonSiswa::where('nik_siswa',$id)->where('no_kk',$no_kk)->count();
        if ($hh==0) {
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }
        // mengambil data calon_siswa berdasarkan id yang dipilih
        $calon_siswa = CalonSiswa::with('ortu')->where('calon_siswa.nik_siswa',$id)->get();
        $zonasi=DB::table('calon_siswa')
        ->join('zonasi','calon_siswa.kd_zonasi','=','zonasi.kd_zonasi')
        ->select('zonasi.nama_zonasi')
        ->where('calon_siswa.nik_siswa',$id)
        ->get();
        // passing data calon_siswa yang didapat ke view edit.blade.php
        return view('calon_siswa.detail',['calon_siswa' => $calon_siswa], ['zonasi' => $zonasi]);

    }

    public function create(Request $request)
    {
        $zonasi = Zonasi::all();
        if($request->session()->has('limit')){
            return redirect()->back();
        }
        else{
            return view('calon_siswa.create', compact('zonasi'));
        }
    }

    public function edit($id)
    {
        $no_kk=session()->get('no_kk');
        $hh=CalonSiswa::where('nik_siswa',$id)->where('no_kk',$no_kk)->count();
        if ($hh==0) {
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }
        // mengambil data calon_siswa berdasarkan id yang dipilih
        $calon_siswa = DB::table('calon_siswa')->where('nik_siswa',$id)->get();
        $zonasi = Zonasi::all();
        // passing data calon_siswa yang didapat ke view edit.blade.php
        return view('calon_siswa.edit',['calon_siswa' => $calon_siswa], ['zonasi' => $zonasi]);
    }

    public static function cekOption($value,$input,$returner) //fungsi untuk menu select selected menggunakan parameter
    {
        $result=$value==$input?$returner:'';
        return $result;
    }

    public function update(Request $request, $id)
    {
        $calon_siswa = CalonSiswa::find($id);
        $calon_siswa->nama_siswa = $request->input('nama_siswa');
        $calon_siswa->tempat_lahir = $request->input('tempat_lahir');
        $calon_siswa->tanggal_lahir = $request->input('tanggal_lahir');
        $calon_siswa->alamat_siswa = $request->input('alamat_siswa');
        $calon_siswa->lat_siswa = $request->input('lat_siswa');
        $calon_siswa->long_siswa = $request->input('long_siswa');
        $calon_siswa->jenis_kelamin = $request->input('jenis_kelamin');
        $calon_siswa->pendidikan_sebelumnya = $request->input('pendidikan_sebelumnya');
        $calon_siswa->nik_siswa = $request->input('nik_siswa');

        if($request->hasFile('image_kk')){
            $file = $request->file('image_kk');
            if ($file!='') {
                File::delete('uploads/image_kk/'.$calon_siswa->image_kk);
                # code...
                $extension = $file->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $file->move('uploads/image_kk/', $filename);
                $calon_siswa->image_kk = $filename;
            }
            
        }
        
        if($request->hasFile('image_akte')){
            $file = $request->file('image_akte');
            if ($file!='') {
                File::delete('uploads/image_akte/'.$calon_siswa->image_akte);
                $extension = $file->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $file->move('uploads/image_akte/', $filename);
                $calon_siswa->image_akte = $filename;
            }            
        }
        
        if($request->hasFile('image_ijazah_tk')){
            $file = $request->file('image_ijazah_tk');
            if ($file!=1) {
                # code...
                File::delete('uploads/image_ijazah_tk/'.$calon_siswa->image_ijazah_tk);
                $extension = $file->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $file->move('uploads/image_ijazah_tk/', $filename);
                $calon_siswa->image_ijazah_tk = $filename;
            }
        }
        
        if($request->hasFile('image_pasfoto')){
            $file = $request->file('image_pasfoto');
            if ($file!='') {
                File::delete('uploads/image_pasfoto/'.$calon_siswa->image_pasfoto);
                $extension = $file->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $file->move('uploads/image_pasfoto/', $filename);
                $calon_siswa->image_pasfoto = $filename;
            }
        }
        
        $calon_siswa->save();
        $request->session()->flash('berhasil','Data calon siswa berhasil diubah');
        // alihkan halaman ke halaman calon_siswa
        return redirect('/calon_siswa');
    }

    public function store(Request $request)
    {   
        $calon_siswas = new CalonSiswa();
        $calon_siswas->id = $request->input('id');
        if ($request->hasFile('image_kk'))
        {
            $file = $request->file('image_kk');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/image_kk', $filename);
            $calon_siswas->image_kk = $filename;
        }
        if ($request->hasFile('image_akte'))
        {
            $file = $request->file('image_akte');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/image_akte', $filename);
            $calon_siswas->image_akte = $filename;
        }
        if ($request->hasFile('image_ijazah_tk'))
        {
            $file = $request->file('image_ijazah_tk');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/image_ijazah_tk', $filename);
            $calon_siswas->image_ijazah_tk = $filename;
        }
        if ($request->hasFile('image_pasfoto'))
        {
            $file = $request->file('image_pasfoto');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/image_pasfoto', $filename);
            $calon_siswas->image_pasfoto = $filename;
        }
        else
        {
            return $request;
            $calon_siswas->image_kk = '';
            $calon_siswas->image_akte = '';
            $calon_siswas->image_ijazah_tk = '';
            $calon_siswas->image_pasfoto = '';
        }
        
        $calon_siswas->nama_siswa = $request->input('nama_siswa');
        $calon_siswas->tempat_lahir = $request->input('tempat_lahir');
        $calon_siswas->tanggal_lahir = $request->input('tanggal_lahir');
        $calon_siswas->alamat_siswa = $request->input('alamat_siswa');
        $calon_siswas->kd_zonasi = $request->input('kd_zonasi');
        $calon_siswas->lat_siswa = $request->input('lat_siswa');
        $calon_siswas->long_siswa = $request->input('long_siswa');
        $calon_siswas->jenis_kelamin = $request->input('jenis_kelamin');
        $calon_siswas->pendidikan_sebelumnya = $request->input('pendidikan_sebelumnya');
        $calon_siswas->nik_siswa = $request->input('nik_siswa');
        $calon_siswas->no_kk = $request->input('no_kk');

        $calon_siswas->save();
        $nik_siswa=$request->input('nik_siswa');
        $request->session()->put('nik_siswa',$nik_siswa);
        $request->session()->flash('berhasil','Data calon siswa berhasil disimpan');
        // alihkan halaman ke halaman calon_siswa
        return redirect('/kesehatan_siswa/create');
    }

    public function hapus($id)
    {
        $no_kk=session()->get('no_kk');
        $hh=CalonSiswa::where('nik_siswa',$id)->where('no_kk',$no_kk)->count();
        if ($hh==0) {
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }
        // menghapus file gambar di calon_siswa
        $calon_siswas = CalonSiswa::where('nik_siswa',$id)->first();
        File::delete('uploads/image_kk/'.$calon_siswas->image_kk);
        File::delete('uploads/image_akte/'.$calon_siswas->image_akte);
        File::delete('uploads/image_ijazah_tk/'.$calon_siswas->image_ijazah_tk);
        File::delete('uploads/image_pasfoto/'.$calon_siswas->image_pasfoto);
        
        // menghapus data calon_siswa berdasarkan id yang dipilih
        DB::table('kesehatan_siswa')->where('nik_siswa',$id)->delete();
        DB::table('pendaftaran')->where('nik_siswa',$id)->delete();
        DB::table('calon_siswa')->where('nik_siswa',$id)->delete();
        DB::table('pengumuman')->where('nik_siswa',$id)->delete();
        
        // alihkan halaman ke halaman calon_siswa
        return redirect()->back();
    }

}
