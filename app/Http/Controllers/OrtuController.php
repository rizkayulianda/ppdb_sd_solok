<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ortu;
use Illuminate\Support\Facades\Input;
use File;

class OrtuController extends Controller
{

    public function indexDetail() //Frontend
    {
        // mengambil data dari table ortu
        $no_kk=session()->get('no_kk');

        $ortu = DB::table('ortu')->where('no_kk',$no_kk)->get();
        
 
    	// mengirim data  ke view detail
    	return view('ortu.detail',['ortu' => $ortu]);
    }
    
    public function create()
    {
        return view('ortu.create');
    }

    public function store(Request $request)
    {
        // insert data ke table ortu
        DB::table('ortu')->insert([
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'alamat_ortu' => $request->alamat_ortu,
            'no_hp_ortu' => $request->no_hp_ortu,
            'no_kk' => $request->no_kk
        ]);
        $no_kk=$request->no_kk;
        session()->put('no_kk',$no_kk);
        $b=DB::table('ortu')->select('id')->where('no_kk',$no_kk)->get();
        foreach ($b as $key) {
            session()->put('id_ortu',$key->id);
        }
        $request->session()->flash('berhasil','Data orang tua berhasil disimpan');
        $request->session()->forget('data');
        // alihkan halaman ke halaman ortu
        
        return redirect('/calon_siswa/create');
    }

    public function edit()
    {   
        $no_kk=session()->get('no_kk');
        
        // mengambil data ortu berdasarkan id yang dipilih
        $ortu = DB::table('ortu')->where('no_kk',$no_kk)->get();
        // passing data ortu yang didapat ke view edit.blade.php
        return view('ortu.edit',['ortu' => $ortu]);
    }

    public function update(Request $request)
    {
        // update data ortu
        DB::table('ortu')->where('id',$request->id)->update([
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'alamat_ortu' => $request->alamat_ortu,
            'no_hp_ortu' => $request->no_hp_ortu,
            'no_kk' => $request->no_kk
            ]);
        // DB::table('calon_siswa')->where('no_kk',$$no_kk_lama)->update(['no_kk'=>$request->no_kk]);
        // $no_kk_baru=$request->no_kk;
        // session()->put('no_kk',$no_kk_baru);
        // alihkan halaman ke halaman ortu
        $request->session()->flash('berhasil','Data orang tua berhasil diubah');
        return redirect('/ortu/detail/');
    }

    public function hapus($id)
    {
        // menghapus data ortu berdasarkan id yang dipilih
        DB::table('ortu')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman ortu
        return redirect('/ortu');
    }
}
