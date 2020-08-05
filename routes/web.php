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

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home');
Route::get('/register', 'AuthController@regis');
Route::post('/welcome', 'AuthController@welcome');
Route::get('/hello-laravel', function () {
    echo "ini adalah halaman baru";
});
