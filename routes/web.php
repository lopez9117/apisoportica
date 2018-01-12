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
    return view('welcome');
});


Route::get('test3', function () {
    $usuario               = new App\Newsletter;

    $usuario->name         = 'luis eduardo lopez';
    $usuario->email        = 'luis.lopez@misena.edu.co';
    $usuario->save();
    
    return $usuario;
});