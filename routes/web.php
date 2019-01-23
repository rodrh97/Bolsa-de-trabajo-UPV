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
Route::get('/inicio_egresado','EgresadosController@inicio_egresado');

Route::get('/ofertas_trabajo','EgresadosController@ofertas_trabajo');

Route::get('/lista_egresados','EgresadosController@lista_egresados');

Route::get('/perfil_egresado','EgresadosController@perfil_egresado');

Route::get('/perfil_usuario','EgresadosController@perfil_usuario');

Route::get('/conexiones_egresado','EgresadosController@conexiones_egresado');

Route::get('/vacante','EgresadosController@vacante');

//------------------------------------------
//RUTAS DE EMPRESA
Route::get('/inicio_empresa','EmpresasController@inicio_empresa');

Route::get('/tus_trabajos','EmpresasController@tus_trabajos');

Route::get('/egresados','EmpresasController@egresados');

Route::get('/perfil_empresa','EmpresasController@perfil_empresa');

Route::get('/conexiones_empresa','EmpresasController@conexiones_empresa');