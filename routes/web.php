<?php

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

Route::get('/', 'Utama_controller@index');
Route::get('/Login','Login_controller@index');
Route::post('/Daftar','Login_controller@Register');
Route::post('/Masuk','Login_controller@Masuk');
Route::get('/keluar','Login_controller@keluar');
Route::post('/AddCart','Order_controller@Order');
Route::get('/Keranjang','Order_controller@Keranjang');
Route::get('/Checkout','Order_controller@Checkout');
Route::get('/Checkout_List','Order_controller@Checkout_List');
Route::get('/Confirm','Order_controller@Confirm');
Route::post('/Konfirm','Order_controller@Confirm_Simpan');
