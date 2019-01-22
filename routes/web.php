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

Route::get('administrador/inicio',function(){
    return view('administrador.inicio');
});


//------------------------------------------
//RUTAS DE EGRESADOS
Route::get('/inicio_egresado', function () {
    return view('egresado.inicio');
});

Route::get('/ofertas_trabajo', function () {
    return view('egresado.lista_trabajo');
});

Route::get('/lista_egresados', function () {
    return view('egresado.lista_egresados');
});

Route::get('/perfil_egresado', function () {
    return view('egresado.perfil');
});

Route::get('/perfil_usuario', function () {
    return view('egresado.perfil_usuario');
});

Route::get('/conexiones_egresado', function () {
    return view('egresado.conexiones');
});

Route::get('/vacante', function () {
    return view('egresado.vacante');
});

//------------------------------------------
//RUTAS DE EMPRESA
Route::get('/inicio_empresa', function () {
    return view('empresa.inicio');
});

Route::get('/tus_trabajos', function () {
    return view('empresa.tus_trabajos');
});

Route::get('/egresados', function () {
    return view('empresa.lista_egresados');
});

Route::get('/perfil_empresa', function () {
    return view('empresa.perfil');
});

Route::get('/conexiones_empresa', function () {
    return view('empresa.conexiones');
});