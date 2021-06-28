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
    return view('auth.login');
});
Auth::routes();

//login web
// Route::get('/', 'MasterController@login');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'PetaniController@index')->name('profile');
    Route::get('/ratadata', 'PetaniController@ratadata');

    // route menu riwayat lahan dan notifikasi
    Route::get('/riwayat_lahan', 'MasterController@riwayat_lahan');
    Route::get('/notifikasi', 'MasterController@notifikasi');
});