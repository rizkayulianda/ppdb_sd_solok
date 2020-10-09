<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Ortu;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        if(!auth()->attempt(['no_hp' => $request->no_hp, 'password' => $request->password]))
        {
            $request->session()->flash('peringatan','pastikan anda sudah mendaftar');
            return redirect()->back();
        }
        $no_hp_sess = $request->no_hp;
        
        //membuat session cek status daftar no_hp pada tabel ortu 
        $request->session()->put('no_hp_ortu',$no_hp_sess);

        $nope=$request->no_hp;
        $v = Ortu::where('no_hp_ortu',$nope)->count();
        if($v==1)
        {
            $nok=DB::table('ortu')->where('no_hp_ortu','=',$nope)->get();
            foreach ($nok as $k);
            $no=$k->no_kk;
            $id_ortu=$k->id;
            $request->session()->put('no_kk',$no);
            $request->session()->put('id_ortu',$id_ortu);
            $bla=$request->session()->get('no_kk');
            $v = DB::table('calon_siswa')->where('no_kk',$bla)->count();
            if($v>=3)
            {
                $request->session()->put('limit','udah');
            }

            return redirect('/home');
        }
        else
        {
            $request->session()->put('data','belum');
            return view('/ortu/create');
        }
    }

    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'no_hp' => 'required|min:12|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password)
        ]);

        //auth()->loginUsingId($user->id);

        //User Login
        $no_hp = $request->no_hp;
        $request->session()->put('no_hp_ortu',$no_hp);
        return redirect()->route('login');
    }

    public function Logout(Request $request){
        session()->forget('no_kk');
        session()->forget('id_ortu');
        session()->forget('no_hp_ortu');
        session()->forget('limit');
        session()->flush();
        auth()->logout();
        return view('welcome');
    }
    
}
