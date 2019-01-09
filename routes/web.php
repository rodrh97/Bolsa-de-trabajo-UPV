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

Route::get('/perfil_egresado', function () {
    return view('perfil_egresado');
});

Route::get('/perfil_empresa', function () {
    return view('perfil_empresa');
});

Route::get('/ofertas_trabajo', function () {
    return view('ofertas_trabajo');
});

Route::get('/conexiones_perfiles', function () {
    return view('conexiones_perfiles');
});