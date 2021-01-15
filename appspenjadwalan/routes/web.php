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

Route::get('/', function () {
    return view('home');
});
Route::get('/home_kaurlab', function () {
    return view('home_kaurlab');
});

//login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//untuk kedua role
Route::group(['middleware' => ['auth','checkRole:kaurlab,laboran']],function(){   
    Route::get('/dashboard', 'DashboardController@index');
});

//laboran
Route::group(['middleware' => ['auth','checkRole:laboran']],function(){   
    Route::get('laboran/jadwal_praktikum', 'JadwalpraktikumController@index');
    Route::get('laboran/input_generate_jadwal', 'GenetikaController@index');
    Route::get('laboran/input_generate_jadwal/submit', 'GenetikaController@submit');
    
// hari
Route::get('laboran/input', function () {
    return view('laboran/input');
});

Route::get('laboran/hari', 'HariController@index');
Route::get('laboran/input_hari', 'HariController@create');
Route::get('/laboran/hari/{hari}', 'HariController@show');
Route::post('laboran/hari', 'HariController@store');
Route::delete('/laboran/hari/{hari}', 'HariController@destroy');
Route::get('/laboran/hari/{hari}/edit_hari', 'HariController@edit');
Route::patch('/laboran/hari/{hari}', 'HariController@update');


//jam
Route::get('laboran/jam', 'JamController@index');
Route::get('laboran/input_jam', 'JamController@create');
Route::get('/laboran/jam/{jam}', 'JamController@show');
Route::post('laboran/jam', 'JamController@store');
Route::delete('/laboran/jam/{jam}', 'JamController@destroy');
Route::get('/laboran/jam/{jam}/edit_jam', 'JamController@edit');
Route::patch('/laboran/jam/{jam}', 'JamController@update');

//jadwal
Route::get('laboran/jadwal_ksm', 'JadwalksmController@index');
Route::get('laboran/input_jadwal', 'JadwalksmController@create');
Route::get('/laboran/jadwal_ksm/{ksm}', 'JadwalksmController@show');
Route::post('laboran/jadwal_ksm', 'JadwalksmController@store');
Route::delete('/laboran/jadwal_ksm/{ksm}', 'JadwalksmController@destroy');
Route::get('/laboran/jadwal_ksm/{ksm}/edit_ksm', 'JadwalksmController@edit');
Route::patch('/laboran/jadwal_ksm/{ksm}', 'JadwalksmController@update');


//Kelas
Route::get('laboran/kelas', 'KelasController@index');
Route::get('laboran/input_kelas', 'KelasController@create');
Route::get('/laboran/kelas/{kelas}', 'KelasController@show');
Route::post('laboran/kelas', 'KelasController@store');
Route::delete('/laboran/kelas/{kelas}', 'KelasController@destroy');
Route::get('/laboran/kelas/{kelas}/edit_kelas', 'KelasController@edit');
Route::patch('/laboran/kelas/{kelas}', 'KelasController@update');

//Ruang
Route::get('laboran/ruang', 'RuangController@index');
Route::get('laboran/input_ruang', 'RuangController@create');
Route::get('/laboran/ruang/{ruang}', 'RuangController@show');
Route::post('laboran/ruang', 'RuangController@store');
Route::delete('/laboran/ruang/{ruang}', 'RuangController@destroy');
Route::get('/laboran/ruang/{ruang}/edit_ruang', 'RuangController@edit');
Route::patch('/laboran/ruang/{ruang}', 'RuangController@update');

//Matkul
Route::get('laboran/matkul', 'MatkulController@index');
Route::get('laboran/input_matkul', 'MatkulController@create');
Route::get('/laboran/matkul/{matkul}', 'MatkulController@show');
Route::post('laboran/matkul', 'MatkulController@store');
Route::delete('/laboran/matkul/{matkul}', 'MatkulController@destroy');
Route::get('/laboran/matkul/{matkul}/edit_matkul', 'MatkulController@edit');
Route::patch('/laboran/matkul/{matkul}', 'MatkulController@update');

//Input jAdwal
Route::get('laboran/input_jadwal', 'InputJadwalController@index');

//edit profil
// Route::get('laboran/edit_profile/', 'EditprofileController@index');
// Route::get('/laboran/edit_profile/{user}', 'EditprofileController@show');
// Route::get('/laboran/edit_profile/{user}/edit_profile', 'EditprofileController@edit') ;
// Route::patch('/laboran/edit_profile/{user}', 'EditprofileController@update');

Route::group(['middleware' => 'auth'], function () {
    Route::get('laboran/edit_profile', 'EditprofileController@edit')->name('laboran/edit_profile');
    Route::patch('laboran/edit_profile', 'EditprofileController@update')
        ->name('laboran/edit_profile');
});




});

//Kaurlab
Route::group(['middleware' => ['auth','checkRole:kaurlab']],function(){   
//akun laboran
Route::post('kaurlab/akun_laboran', 'AkunlaboranController@create');     
//edit profil
// Route::get('kaurlab/edit_profile', function () {
//     return view('kaurlab/edit_profile');
// });
//akun laboran
Route::get('kaurlab/akun_laboran', function () {
    return view('kaurlab/akun_laboran');
});
//jadwal praktikum
 Route::get('kaurlab/jadwal_praktikum', function () {    
    return view('kaurlab/jadwal_praktikum');
 });
});