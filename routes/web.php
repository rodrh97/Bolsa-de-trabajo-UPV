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
    return view('egresado.perfil');
});

Route::get('administrador/inicio',function(){
    return view('administrador.inicio');
});

Route::get('/perfil_empresa', function () {
    return view('perfil_empresa');
});

Route::get('/ofertas_trabajo', function () {
    return view('egresado.lista_trabajo');
});

Route::get('/conexiones_perfiles', function () {
    return view('egresado.conexiones');
});

Route::get('/principal_egresado', function () {
    return view('egresado.index');
});
Route::get('/lista_egresados', function () {
    return view('egresado.lista_egresados');
});

Route::get('/principal_empresa', function () {
    return view('egresado.index');
});

Route::get('/registro', function () {
    return view('registros');
});

Route::get('/registro_egresado', function () {
    return view('registro_egresados');
});

Route::get('/registro_empresa', function () {
    return view('registro_empresas');
});