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

Route::get('/', 'InicioController@index');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
	// Area Permisos
	Route::get('permiso', 'PermisoController@index')->name('permiso');
	Route::get('permiso/crear', 'PermisoController@create')->name('crear-permiso');
	/*Area Menu*/
	Route::get('menu', 'MenuController@index')->name('menu');
	Route::get('menu/crear', 'MenuController@crear')->name('crear-menu');
	Route::post('menu', 'MenuController@guardar')->name('guardar-menu');
	Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');
	/*Area Roles*/
	Route::get('rol','RolController@index')->name('rol');
	Route::get('rol/crear','RolController@crear')->name('crear-rol');
	Route::get('rol/{id}/editar', 'RolController@editar')->name('editar-rol');
	Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar-rol');
	Route::post('rol','RolController@guardar')->name('guardar-rol');
	Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar-rol');
});



