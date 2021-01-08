<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

///Estaticas
Route::get('/', function () {
    return view('welcome');
});

//Empresa
Route::get('/Vista-Empresa', function () {
    return view('empresa');
});

//Contacto
Route::get('/Vista-Contacto', function () {
    return view('contacto');
});

//MANEJO DE DATOS
///Manuales
Route::get('/Vista-Manuales', function () {
    return view('manuales');
});

Route::get('/Vista-Manual-Elemento', function () {
    return view('manualElemento');
});

///Repuestos
Route::get('/Vista-Repuestos', function () {
    return view('repuestos');
});

Route::get('/Vista-Repuesto-Elemento', function () {
    return view('repuestoElemento');
});

///Servicios
Route::get('/Vista-Servicios', function () {
    return view('servicios');
});
Route::get('/Vista-Servicio-Elemento', function () {
    return view('servicioElemento');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//SERVICIOS
Route::resource('servicios', 'ServiciosController');
/*Route::get('/servicios', 'ServiciosController@index')->name('servicios');
Route::get('/servicios/create', 'ServiciosController@create');
Route::get('/servicios/edit', 'ServiciosController@edit');
*/

//REPUESTOS
Route::resource('repuestos', 'RepuestosController');
/*
Route::get('/repuestos', 'RepuestosController@index')->name('repuestos');
Route::get('/repuestos/create', 'RepuestosController@create');
Route::get('/repuestos/edit', 'RepuestosController@edit');
*/
//POSTULANTES
Route::resource('postulantes', 'PostulantesController');
/*
Route::get('/postulantes', 'PostulantesController@index')->name('postulantes');
Route::get('/postulantes/create', 'PostulantesController@create');
Route::get('/postulantes/edit', 'PostulantesController@edit');
*/
//MANUALES
Route::resource('manuales', 'ManualesController');

/*
Route::get('/manuales', 'ManualesController@index')->name('manuales');
Route::get('/manuales/create', 'ManualesController@create');
Route::get('/manuales/edit', 'ManualesController@edit');
*/

//Imagenes
Route::resource('imagenes', 'ImagesServiciosController');

Route::get('imagenesGaleria/{idServicios}', function ($idServicio) {
    $imagenes = DB::table('images_servicios')->where('imagenes_id', $idServicio)->get();

        return view('imagenes.index', ['imagenes'=>$imagenes]);
    });
