<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Sekolah;
use App\Operator;
use App\Zonasi;
use Illuminate\Support\Facades\Input;
use File;

class SekolahController extends Controller
{
    public function index() //Backend
    {
        // mengambil data dari table sekolah
        $sekolah = Sekolah::with('zonasi')->get();
 
    	// mengirim data  ke view index
    	return view('sekolah.index',['sekolah' => $sekolah]);
    }

    public function indexDetail() //Frontend
    {
        $kd_sekolah=auth()->user()->kd_sekolah;
        // mengambil data dari table sekolah
        $sekolah=DB::table('sekolah')
        ->join('zonasi','sekolah.kd_zonasi','=','zonasi.kd_zonasi')
        ->join('operator','sekolah.kd_sekolah','=','operator.kd_sekolah')
        ->where('sekolah.kd_sekolah',$kd_sekolah)
        ->get();
    	// mengirim data  ke view index
    	return view('sekolah.detail',['sekolah' => $sekolah]);
    }
    
    public function create()
    {
        $zonasi = Zonasi::all();
        return view('sekolah.create',['zonasi' => $zonasi]);
    }
    
    public function edit()
    {
        $kd_sekolah=auth()->user()->kd_sekolah;
        // mengambil data sekolah berdasarkan id yang dipilih
        $sekolah = DB::table('sekolah')->where('kd_sekolah',$kd_sekolah)->get();
        $zonasi =Zonasi::all();
        // passing data sekolah yang didapat ke view edit.blade.php
        return view('sekolah.edit',['sekolah' => $sekolah],['zonasi' => $zonasi]);
    }
    
    public function update(Request $request)
    {
        // update data sekolah
        DB::table('sekolah')->where('id',$request->id)->update([
            'kd_sekolah' => $request->kd_sekolah,
            'nama_sekolah' => $request->nama_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'kd_zonasi' => $request->kd_zonasi,
            'lat_sekolah' => $request->lat_sekolah,
            'long_sekolah' => $request->long_sekolah,
            'utama' => $request->utama,
            'cadangan' => $request->cadangan,
            'email_sekolah' => $request->email_sekolah,
            'web_sekolah' => $request->web_sekolah,
            'notelp_sekolah' => $request->notelp_sekolah,
            'kepala_sekolah' => $request->kepala_sekolah
        ]);
        $request->session()->flash('berhasil','Data sekolah berhasil diubah');
        // alihkan halaman ke halaman sekolah
        return redirect('/sekolah/detail');
    }

    public function store(Request $request)
    {
        // insert data ke table sekolah
        DB::table('sekolah')->insert([
            'kd_sekolah' => $request->kd_sekolah,
            'nama_sekolah' => $request->nama_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'kd_zonasi' => $request->kd_zonasi,
            'lat_sekolah' => $request->lat_sekolah,
            'long_sekolah' => $request->long_sekolah,
            'utama' => $request->utama,
            'cadangan' => $request->cadangan,
            'email_sekolah' => $request->email_sekolah,
            'web_sekolah' => $request->web_sekolah,
            'notelp_sekolah' => $request->notelp_sekolah,
            'kepala_sekolah' => $request->kepala_sekolah
        ]);
        $request->session()->flash('berhasil','Data sekolah berhasil disimpan');
        // alihkan halaman ke halaman sekolah
        return redirect('/pendaftaran');
    }
}
