<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Operator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginOperatorController extends Controller
{
    //use AuthenticatesUsers;
    
    // protected $maxAttempts=3;
    // protected $decayMinutes=3;

    public function getLogin()
    {
        return view('loginop');
    }

    public function postLogin(Request $request)
    {
        if (!auth()->guard('operator')->attempt(['kd_sekolah' => $request->kd_sekolah, 'password' => $request->password  ])) 
        {
            $request->session()->flash('peringatan','pastikan anda sudah mendaftar');
            return redirect()->back();
        }
        $kd_sekolah=$request->kd_sekolah;
        $count=DB::table('sekolah')->where('kd_sekolah',$kd_sekolah)->count();
        if($count==0)
        {
            return redirect('/sekolah/create');
        }
        return redirect('/pendaftaran');

    }

    public function getRegister()
    {
        return view ('create.operator');
    }

    public function logout(Request $request)
    {
        session()->flush();
        auth()->guard('operator')->logout();
        return view('welcome');
    }


}
