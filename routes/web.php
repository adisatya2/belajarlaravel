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
    return view('welcome', ['title' => 'Belajar Laravel dan Git - Takanome', 'Deskripsi' => '03/01-2022 Belajar menggunakan Git dan belajar Framework Laravel 9. Gassssss......']);
});

Route::get('home', function () {
    return view('home');
});

Route::get('edulevels', 'App\Http\Controllers\EdulevelController@data');
Route::get('edulevels/add', 'App\Http\Controllers\EdulevelController@add');
Route::post('edulevels', 'App\Http\Controllers\EdulevelController@process');




//testing belajar route
Route::get('/greeting', function () {
    return 'Hello World';
});

Route::redirect('/here', '/greeting');

Route::get('/user/{name?}', function ($name = 'John Johan') {
    return $name;
});

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'Admin > Users';
    });
});
