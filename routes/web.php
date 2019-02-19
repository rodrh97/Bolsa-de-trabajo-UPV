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

/*Route::get('/', function () {
    return view('auth.login');
});*/

Route::get('administrador/inicio',function(){
    return view('administrador.inicio');
});


//------------------------------------------
//RUTAS DE EGRESADOS
//Route::get('/inicio_egresado','EgresadosController@inicio_egresado');

Route::get('/ofertas_trabajo','EgresadosController@ofertas_trabajo');

Route::get('/lista_egresados','EgresadosController@lista_egresados')->name('students_upv');

Route::get('/perfil_egresado/{users}','EgresadosController@perfil_egresado');

Route::PATCH('/perfil_egresado/{users}','EgresadosController@update_perfil_egresado');

Route::get('/perfil_usuario/{users}','EgresadosController@perfil_usuario');

Route::get('/egresado_perfil_empresa','EgresadosController@egresado_perfil_empresa');

Route::get('/conexiones_egresado/{users}','EgresadosController@conexiones_egresado');

Route::get('/vacante/{jobs}','EgresadosController@vacante');

Route::post('/vacante/{jobs}','EgresadosController@sendjob');

Route::DELETE('/vacante/{jobs}','EgresadosController@destroy_sendjob');

//------------------------------------------
//RUTAS DE EMPRESA
Route::get('/inicio_empresa','EmpresasController@inicio_empresa');

Route::get('/tus_trabajos','EmpresasController@tus_trabajos');

Route::get('/egresados','EmpresasController@egresados')->name('users');

Route::get('/perfil_empresa/{companies}','EmpresasController@perfil_empresa')->name('profile');

Route::PATCH('/perfil_empresa/{companies}','EmpresasController@update_status_job');

Route::get('/agregar_contacto/{companies}','EmpresasController@addcontact');

Route::post('/agregar_contacto/{companies}','EmpresasController@store_addcontact');

Route::get('/editar_contacto/{companies}','EmpresasController@editcontact');

Route::PATCH('/editar_contacto/{contacts}','EmpresasController@update_contact');

Route::get('/agregar_vacante/{companies}','EmpresasController@addjob');

Route::get('/editar_vacante/{companies}','EmpresasController@editjob');

Route::PATCH('/editar_vacante/{jobs}','EmpresasController@update_job');

Route::get('/editar_perfil/{companies}','EmpresasController@editprofile');

Route::PATCH('/editar_perfil/{companies}','EmpresasController@update_profile');

Route::post('/agregar_vacante/{companies}','EmpresasController@store_addjob');

Route::get('/conexiones_empresa','EmpresasController@conexiones_empresa');

Route::get('/egresado/{users}','EmpresasController@egresado');

Route::get('/empresa_vacante','EmpresasController@empresa_vacante');
//Auth::routes();
// Authentication Routes...
Route::get('/', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
  ]);
  Route::post('/', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
  ]);
  Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
  ]);
  
  // Password Reset Routes...
  Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
  ]);
  Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
  ]);
  Route::post('password/reset', [
    'as' => '',
    'uses' => 'Auth\ResetPasswordController@reset'
  ]);
  Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
  ]);
  
  // Registration Routes...
  Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
  ]);
  Route::post('register', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
  ]);

Route::get('/inicio_egresado', 'HomeController@inicio_egresado')->name('inicio_egresado');
