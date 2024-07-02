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
    Route::resource('penjualan_sepeda', 'PenjualanSepedaController');

    Route::get('/customers', 'CustomerController@index')->name('customers.index');
    Route::get('/customers/create', 'CustomerController@create')->name('customers.create');
    Route::post('/customers', 'CustomerController@store')->name('customers.store');
    Route::get('/customers/{customer}/edit', 'CustomerController@edit')->name('customers.edit');
    Route::put('/customers/{customer}', 'CustomerController@update')->name('customers.update'); // Menggunakan PUT untuk pembaruan
    Route::delete('/customers/{customer}', 'CustomerController@destroy')->name('customers.destroy');
