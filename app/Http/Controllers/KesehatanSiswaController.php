<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\KesehatanSiswa;
use App\CalonSiswa;
use App\Ortu;
use Illuminate\Support\Facades\Input;
use File;

class KesehatanSiswaController extends Controller
{

    public function indexDetail($nik_siswa) //Frontend
    {
        $no_kk=session()->get('no_kk');
        // $hh_kes=CalonSiswa::with('ortu')->where('ortu.no_kk',$no_kk)->where('calon_siswa.nik_siswa',$nik_siswa)->count();
        $hh_kes=CalonSiswa::where('nik_siswa',$nik_siswa)->where('no_kk',$no_kk)->count();

        if ($hh_kes==0) {
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }

        $cek=KesehatanSiswa::where('nik_siswa',$nik_siswa)->count();
        if($cek==0)
        {
            return redirect('/kesehatan_siswa/create');
        }
        $kesehatan_siswa = KesehatanSiswa::with('calon_siswa')->where('kesehatan_siswa.nik_siswa',$nik_siswa)->get();
    	// mengirim data  ke view detail
    	return view('kesehatan_siswa.detail',['kesehatan_siswa' => $kesehatan_siswa]);
    }
    
    public function create()
    {
        $calon_siswa = CalonSiswa::all();
        return view('kesehatan_siswa.create', compact('calon_siswa'));
    }

    public function edit($nik_siswa)
    {
        $no_kk=session()->get('no_kk');
        $hh_kes=CalonSiswa::where('nik_siswa',$nik_siswa)->where('no_kk',$no_kk)->count();
        if ($hh_kes==0) {
            session()->flash('peringatan','Permintaan tidak dapat diproses!');
            return redirect()->back();
        }
        
        // mengambil data kesehatan_siswa berdasarkan id yang dipilih
        $kesehatan_siswa = DB::table('kesehatan_siswa')->where('nik_siswa',$nik_siswa)->get();
        $calon_siswa = CalonSiswa::all();
        // passing data kesehatan_siswa yang didapat ke view edit.blade.php
        return view('kesehatan_siswa.edit',['kesehatan_siswa' => $kesehatan_siswa], ['calon_siswa' => $calon_siswa]);
    }
    
    public function update(Request $request)
    {
        // update data kesehatan_siswa
        DB::table('kesehatan_siswa')->where('id',$request->id)->update([
            'nik_siswa' => $request->nik_siswa,
            'tinggi' => $request->tinggi,
            'berat' => $request->berat,
            'penglihatan' => $request->penglihatan,
            'pendengaran' => $request->pendengaran,
            'gigi' => $request->gigi,
            'riwayat_penyakit' => $request->riwayat_penyakit
        ]);
        $request->session()->flash('berhasil','Data kesehatan siswa berhasil diubah');
        // alihkan halaman ke halaman kesehatan_siswa
        $nik_siswa = $request->nik_siswa;
        return $this->indexDetail($nik_siswa);
    }

    public function store(Request $request)
    {
        // insert data ke table kesehatan_siswa
        KesehatanSiswa::create([
            'nik_siswa' => $request->nik_siswa,
            'tinggi' => $request->tinggi,
            'berat' => $request->berat,
            'penglihatan' => $request->penglihatan,
            'pendengaran' => $request->pendengaran,
            'gigi' => $request->gigi,
            'riwayat_penyakit' => $request->riwayat_penyakit
        ]);
        $request->session()->forget('nik_siswa');
        $request->session()->flash('berhasil','Data kesehatan siswa berhasil disimpan');
        // alihkan halaman ke halaman kesehatan_siswa
        return redirect('/calon_siswa');
    }

    public static function cekOption($value,$input,$returner) //fungsi untuk menu select selected menggunakan parameter
    {
        $result=$value==$input?$returner:'';
		return $result;
	}
}
