<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use PDF;
use Illuminate\Support\Facades\DB;

class PengumumanController extends Controller
{
    public function indexOp()
    {
        $kd_sekolah=auth()->user()->kd_sekolah;    
        $pengumuman=DB::table('pengumuman')
        ->join('calon_siswa','pengumuman.nik_siswa','=','calon_siswa.nik_siswa')
        ->join('sekolah','pengumuman.kd_sekolah','=','sekolah.kd_sekolah')
        ->select('pengumuman.no_pendaftaran','calon_siswa.nama_siswa','pengumuman.tanggal_pendaftaran','sekolah.nama_sekolah')
        ->where('pengumuman.kd_sekolah',$kd_sekolah)
        ->get();
        return view('pengumuman.indexop',['pengumuman' => $pengumuman]);
    }

    public function tarikData($no_pendaftaran)
    {
        $kd_sekolah=auth()->user()->kd_sekolah;
        $hh=Pengumuman::where('kd_sekolah',$kd_sekolah)->where('no_pendaftaran',$no_pendaftaran)->count();
        if ($hh==0) {
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }

        DB::table('pengumuman')->where('no_pendaftaran',$no_pendaftaran)->delete();
        return redirect('/pengumuman/indexop');
    }

    public function tampilCari(Request $request)
    {
        
        return view('/pengumuman/cari');
    }

    public function menCari(Request $request)
    {
        $keyword=$request->keyword;//mengambil keyword dari view
        //mencari di tabel pengumuman berdasarkan keyword
        $pengumuman=DB::table('pengumuman')
        ->join('calon_siswa','pengumuman.nik_siswa','=','calon_siswa.nik_siswa')
        ->join('sekolah','pengumuman.kd_sekolah','=','sekolah.kd_sekolah')
        ->select('pengumuman.no_pendaftaran','calon_siswa.nama_siswa','pengumuman.tanggal_pendaftaran','sekolah.nama_sekolah')
        ->where('sekolah.nama_sekolah', 'LIKE', "%{$keyword}%")
        ->get();
        //mengirim hasil pencarian ke biew indexuser.blade(hasilpencarian)
        return view('pengumuman.indexuser',['pengumuman' => $pengumuman], ['keyword' => $keyword]);
    }

    public function cetakData($kw)
    {
        // $keyword=$request->keyword;
        $pengumuman=DB::table('pengumuman')
        ->join('calon_siswa','pengumuman.nik_siswa','=','calon_siswa.nik_siswa')
        ->join('sekolah','pengumuman.kd_sekolah','=','sekolah.kd_sekolah')
        ->select('pengumuman.no_pendaftaran','calon_siswa.nama_siswa','pengumuman.tanggal_pendaftaran','sekolah.nama_sekolah')
        ->where('sekolah.nama_sekolah', 'LIKE', "%{$kw}%")
        ->get();
        $data_pengumuman = PDF::loadview('pengumuman.cetak',['pengumuman' => $pengumuman])->setPaper('A4','potrait');
        return $data_pengumuman->stream('hasil pengumuman.pdf');
    }

    public function cetakDataOp()
    {
        $kd_sekolah=auth()->user()->kd_sekolah;

        // $keyword=$request->keyword;
        $pengumuman=DB::table('pengumuman')
        ->join('calon_siswa','pengumuman.nik_siswa','=','calon_siswa.nik_siswa')
        ->join('sekolah','pengumuman.kd_sekolah','=','sekolah.kd_sekolah')
        ->where('sekolah.kd_sekolah', '=',$kd_sekolah)
        ->get();
        $sekolah=DB::table('sekolah')->where('kd_sekolah',$kd_sekolah)->get();
        $data_pengumuman = PDF::loadview('pengumuman.cetakop',['pengumuman' => $pengumuman],['sekolah'=>$sekolah])->setPaper('A4','potrait');
        return $data_pengumuman->stream();
        // return view('pengumuman.cetakop',['pengumuman'=>$pengumuman],['sekolah'=>$sekolah]);
    }

}
