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

//route tampilan awal web
Route::get('/','BannerController@index');

//route tampilan ketika klik sebuah event
Route::get('event/{event_id}','EventController@detail');

//route fitur search
Route::get('/cari','BannerController@cari');

//route admin
Route::get('/dashboard','DashboardController@dashboard');
Route::get('/dashboard/tambah','DashboardController@tambah');
Route::post('/dashboard/store','DashboardController@store');
Route::get('/dashboard/edit/{event_id}','DashboardController@edit');
Route::post('/dashboard/update','DashboardController@update');
Route::get('/dashboard/hapus/{event_id}','DashboardController@hapus');


Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('logout', 'HomeController@logout')->name('logout');