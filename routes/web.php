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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'VistaWelcome@inicio')->name('inicio');
Route::get('/temas', 'VistaWelcome@temas')->name('inicio');
Route::get('/contacto', 'VistaWelcome@inicio')->name('inicio');
Route::get('/tema/{ruta}', 'VistaWelcome@traer_resultado')->name('traer_resultado');
Route::get('/pruebas', 'VistaWelcome@menu_prueba')->name('menu_prueba');
Route::get('/prueba/{ruta}', 'VistaWelcome@traer_vista_prueba')->name('traer_vista_prueba');
Route::post('/consultar-respuesta', 'VistaWelcome@consultar_palabra')->name('consultar_palabra');
Route::post('/analisis-tactico', 'VistaWelcome@traduccion_automatica')->name('traduccion_automatica');
Route::post('/pronunciacion_audio', 'VistaWelcome@pronunciacion_audio')->name('pronunciacion_audio');
