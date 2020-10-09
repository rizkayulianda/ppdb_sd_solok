<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Operator;
use App\Sekolah;
use Illuminate\Support\Facades\Input;
use File;

class OperatorController extends Controller
{
    
    public function detail()
    {
        $id=auth()->user()->id;
        // mengambil data dari table pendaftaran
    	$operator = DB::table('operator')->where('id',$id)->get();
 
    	// mengirim data  ke view index
    	return view('operator.detail',['operator' => $operator]);
    }
    
    public function create()
    {
        return view('operator.create');
    }
    
    public function edit()
    {
        $kd_sekolah=auth()->user()->kd_sekolah;
        // mengambil data operator berdasarkan id yang dipilih
        $operator = DB::table('operator')->where('kd_sekolah',$kd_sekolah)->get();
        // passing data operator yang didapat ke view edit.blade.php
        return view('operator.edit',['operator' => $operator]);
    }
    
    public function update(Request $request)
    {
        // update data operator
        DB::table('operator')->where('id',$request->id)->update([
            'nama_op' => $request->nama_op,
            'email_op' => $request->email_op,
        ]);
        
        // alihkan halaman ke halaman operator
        $request->session()->flash('berhasil','Data operator berhasil diubah');
        return redirect('/operator/detail');
    }

    public function store(Request $request)
    {
        $kd=$request->kd_sekolah;
        //mengecek apakah data dengan kode sekolah ada pada tabel
        //menggunakan count dan menyimpan hasil hitung ke variabel $c
        $c=DB::table('operator')->where('kd_sekolah',$kd)->count();
        
        //membuat kondisi jika variabel $c berisi
        if($c>0)
        {
            //jika data ada maka akan edirect kembali dengan menampilkan alert dengan session flash
            session()->flash('peringatan','kode sekolah sudah digunakan');
            return redirect()->back();
        }
        else{
            // jika data tidak ada maka proses insert data ke table operator
            DB::table('operator')->insert([
                'kd_sekolah' => $request->kd_sekolah,
                'nama_op' => $request->nama_op,
                'email_op' => $request->email_op,
                'password' => bcrypt($request->password)
                ]);
                $request->session()->flash('berhasil','Data operator berhasil disimpan');
                // alihkan halaman ke halaman operator
                return redirect('loginop');
            }
    }
}
