<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'guest'], function(){

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/register', 'LoginController@getRegister')->name('register')->middleware('guest');
    Route::post('/register', 'LoginController@postRegister')->middleware('guest');
    Route::get('/login', 'LoginController@getLogin')->middleware('guest')->name('login');
    Route::post('/login', 'LoginController@postLogin')->middleware('guest');  
    //loginOperator
    Route::get('/loginop', 'LoginOperatorController@getLogin')->middleware('guest')->name('loginop');  
    Route::post('/loginop', 'LoginOperatorController@postLogin')->middleware('guest');  
    Route::get('/operator/create', 'OperatorController@create')->middleware('guest')->name('registerop');
    Route::post('/operator/store', 'OperatorController@store')->middleware('guest')->name('simpan');
    Route::get('/operator', 'OperatorController@index');
});

Route::group(['middleware'=>'auth'], function(){
    
    Route::get('/home', function () {
        return view('home');
        //return auth()->user();
    })->middleware('auth')->name('home');

    Route::get('/logout', 'LoginController@logout')->middleware('auth')->name('logout');
    Route::get('/ortu', 'OrtuController@index');
    Route::get('/ortu/detail', 'OrtuController@indexDetail');
    Route::get('/ortu/create', 'OrtuController@create')->name('create.ortu');
    Route::get('/ortu/edit', 'OrtuController@edit');
    Route::post('/ortu/store', 'OrtuController@store')->name('simpan');
    Route::post('/ortu/update', 'OrtuController@update');
    
    Route::get('/calon_siswa', 'CalonSiswaController@index');
    Route::get('/calon_siswa/detail/{id}', 'CalonSiswaController@detail');
    Route::get('/calon_siswa/edit/{id}', 'CalonSiswaController@edit');
    Route::get('/calon_siswa/create', 'CalonSiswaController@create')->middleware('auth')->name('create.calonsiswa');
    Route::post('/calon_siswa/store', 'CalonSiswaController@store')->name('simpan');
    Route::post('/calon_siswa/update/{id}', 'CalonSiswaController@update');
    Route::get('/calon_siswa/hapus/{id}','CalonSiswaController@hapus')->name('calon_siswa.delete');
    
    // Route::get('/kesehatan_siswa', 'KesehatanSiswaController@index');
    Route::get('/kesehatan_siswa/detail/{nik_siswa}', 'KesehatanSiswaController@indexDetail');
    Route::get('/kesehatan_siswa/create', 'KesehatanSiswaController@create')->middleware('auth')->name('create.kesehatansiswa');
    Route::get('/kesehatan_siswa/edit/{nik_siswa}', 'KesehatanSiswaController@edit');
    Route::post('/kesehatan_siswa/store', 'KesehatanSiswaController@store')->name('simpan');
    Route::post('/kesehatan_siswa/update', 'KesehatanSiswaController@update');
    // Route::get('/kesehatan_siswa/hapus/{id}','KesehatanSiswaController@hapus');

    Route::get('/sekolah', 'SekolahController@index');

    Route::get('/pendaftaran/create/{nik_siswa}', 'PendaftaranController@create')->middleware('auth')->name('create.pendaftaran');
    Route::post('/pendaftaran/store', 'PendaftaranController@store')->name('simpan');
    Route::get('/pendaftaran/data/{nik_siswa}', 'PendaftaranController@melihatDataPendaftaran');
    Route::get('/pendaftaran/cetak/{nik_siswa}', 'PendaftaranController@cetakData');
    
    Route::get('/pengumuman/cari', 'PengumumanController@tampilCari');
    Route::post('/pengumuman/mencari', 'PengumumanController@menCari');
    Route::get('/pengumuman/cetak/{kw}', 'PengumumanController@cetakData');
    
});

Route::group(['middleware'=>'auth:operator'],function()
{
    
    Route::get('/logoutop', 'LoginOperatorController@logout')->middleware('auth:operator')->name('logoutop');
    
    Route::get('/pengumuman/indexop', 'PengumumanController@indexOp');
    Route::get('/pengumuman/tarik/{no_pendaftaran}', 'PengumumanController@tarikData');
    Route::get('/pengumuman/cetakop', 'PengumumanController@cetakDataOp');
    
    Route::get('/operator/edit', 'OperatorController@edit');
    Route::get('/operator/detail', 'OperatorController@detail');
    Route::post('/operator/update', 'OperatorController@update');
    
    Route::get('/sekolah/detail', 'SekolahController@indexDetail');
    Route::get('/sekolah/create', 'SekolahController@create')->middleware('auth:operator')->name('create.sekolah');
    Route::get('/sekolah/edit', 'SekolahController@edit');
    Route::post('/sekolah/store', 'SekolahController@store')->name('simpan');
    Route::post('/sekolah/update', 'SekolahController@update');
    Route::get('/sekolah/hapus/{id}','SekolahController@hapus');
    
    Route::get('/pendaftaran', 'PendaftaranController@index')->name('index');
    Route::get('/pendaftaran/hapus/{id}','PendaftaranController@hapus');
    Route::get('/pendaftaran/terima/{id}','PendaftaranController@terima');
    Route::get('/pendaftaran/pengumuman','PendaftaranController@pengumuman');
    Route::get('/pendaftaran/detail/{nik_siswa}', 'PendaftaranController@detail');
});
