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

Route::get('/', function () {
    return view('layout.main');
});
Route::get('main','pagecontroller@main');
Route::get('labtop','pagecontroller@labtop');
Route::get('computer','pagecontroller@computer');
Route::get('electronic','pagecontroller@electronic');
Route::get('Projectors','pagecontroller@Projectors');
Route::get('tapmop','pagecontroller@tapmop');
Route::get('printer','pagecontroller@printer');
Route::get('product','pagecontroller@product');
Route::get('cardpage','pagecontroller@cardpage');
Route::get('admin','pagecontroller@admin');
Route::get('signup','pagecontroller@signup');
Route::get('userlogin','pagecontroller@userlogin');
Route::get('adminlogin','pagecontroller@adminlogin');

