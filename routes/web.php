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

Route::get('/', 'HomeController@inicio')->name('inicio');
Route::get('capacitores', 'HomeController@capacitores')->name('capacitores');
Route::get('alumnos', 'HomeController@alumnos')->name('alumnos');
Route::post('usuarios3', 'HomeController@usuarios3')->name('usuarios3');
Route::get('usuarios3', 'HomeController@usuarios3')->name('usuarios3');
Route::post('vinculacion', 'RegistroController@registro')->name('registro');
Route::get('vinculacion', 'RegistroController@vinculacion')->name('vinculacion');

//Route::post('asistentesplatica', 'RegistroController@registro')->name('asistentesplatica');
//Route::get('asistentesplatica', 'HomeController@asistentesplatica')->name('asistentesplatica');


/** Rutas para modulo de usuarios **/
Route::get('login', 'UsuariosController@login' )->name('login');
Route::post('login', 'UsuariosController@login');
Route::post('usuarios', 'HomeController@usuarios');
Route::get('signout', 'UsuariosController@signout' )->name('signout');
Route::get('registro', 'UsuariosController@registro' )->name('registro');
Route::get('edit-user/{id}', 'UsuariosController@edit_user' )->name('edit-user');
Route::delete('delete-user/{id}', 'UsuariosController@delete_user' )->name('delete-user');
Route::post('registro', 'UsuariosController@registro' )->name('registro_post');
Route::get('mostrar-usuarios', 'UsuariosController@mostrar_usuarios' )->name('mostrar-usuarios');
Route::get('test', 'HomeController@test' )->name('test');

Route::get('prueba', function(){
    return $columns = Schema::getColumnListing('usuarios');
});
