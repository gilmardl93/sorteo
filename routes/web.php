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

Route::get('logitos', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('login','HomeController@login');
Route::post('iniciar-sesion','HomeController@authenticate');

Route::group(['middleware' => 'auth'], function(){

    Route::get('logout','HomeController@logout');

    Route::get('/','SorteoController@index');
    Route::get('dia1','SorteoController@dia1');
    Route::get('dia2','SorteoController@dia2');
    Route::get('dia3','SorteoController@dia3');

    Route::get('eliminar-asignados/{id}','SorteoController@eliminar');

    Route::post('registrar-dia1','ComisionController@registrar1');
    Route::post('registrar-dia2','ComisionController@registrar2');
    Route::post('registrar-dia3','ComisionController@registrar3');

    Route::get('reportes','ReporteController@reporte');
    Route::get('actaPDF','ReporteController@actaPDF')->name('actaPDF');

    Route::get('informacion','InformacionController@index');
    Route::post('actualizar-informacion', 'InformacionController@actualizar');

    Route::get('firmas','FirmaController@index');
    Route::get('ver/{id}','FirmaController@ver');
    Route::post('actualizar-firma','FirmaController@actualizar');

});
