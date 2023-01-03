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
    return view('welcome', ['title' => 'Belajar Laravel - MAD']);
});

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
