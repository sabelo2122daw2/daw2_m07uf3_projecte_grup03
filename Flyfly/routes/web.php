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
    return view('welcome');
});

// Auth::routes();
Route::get('/vols/{id}/pdf', 'ControladorVols@pdf')->name('vols.pdf');
Route::get('/reservas/{id}/pdf', 'ControladorReservas@pdf')->name('reservas.pdf');
Route::get('/clients/{id}/pdf', 'ControladorClients@pdf')->name('clients.pdf');
Route::get('/usuaris/{id}/pdf', 'ControladorUsuaris@pdf')->name('usuaris.pdf');

Route::resource('usuaris', ControladorUsuaris::class);
Route::resource('vols', ControladorVols::class);
Route::resource('reservas', ControladorReservas::class);
Route::resource('clients', ControladorClients::class);

