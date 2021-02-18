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
//Route::get('/', 'FrontController@viewImagenes');
//Route::get('/', 'FrontController@viewPostManuales');
Route::get('/', 'FrontController@viewImagenesCSS');
//Empresa
Route::get('/Vista-Empresa', 'FrontController@viewImagenesCSSEmpresa');
/*
Route::get('/Vista-Empresa', function () {
    return view('empresa');
});
*/




//Contacto
Route::resource('contactos', 'ContactosController');

Route::get('/Vista-Contacto', function () {
    return view('contacto');
});


//Contacto
//blogs
Route::get('{blog}/Vista-Blog-Elemento', 'FrontController@viewBlog');
Route::get('/Vista-Blog', 'FrontController@indexBlogs');

//blogs
Route::resource('blogs', 'BlogsController');

//MANEJO DE DATOS
///Manuales
Route::get('/Vista-Manuales', 'FrontController@indexManuales');
Route::get('{manual}/Vista-Manual-Elemento', 'FrontController@viewManual');

//Suministros
Route::get('/Vista-Suministros', 'FrontController@indexSuministros');
Route::get('{suministro}/Vista-Suministro-Elemento', 'FrontController@viewSuministro');


///Servicios
Route::get('/Vista-Servicios', 'FrontController@index');
Route::get('{servicio}/Vista-Servicio-Elemento','FrontController@viewServicio');





/** Nuevos Cambios */
///Grupos electrogenos
Route::get('/Vista-Grupos', 'FrontController@indexGrupos');
Route::get('{grupo}/Vista-Grupos-Elemento','FrontController@viewGrupo');

///pozos de puesta a tierra
Route::get('/Vista-Pozos', 'FrontController@indexPozos');
Route::get('{pozo}/Vista-Pozo-Elemento','FrontController@viewPozo');

///Ups
Route::get('/Vista-UPS', 'FrontController@indexUPS');
Route::get('{ups}/Vista-UPS-Elemento','FrontController@viewUPS');

///Capacitaciones
Route::get('/Vista-Capacitaciones', 'FrontController@indexCapacitaciones');
Route::get('{capacitacion}/Vista-Capacitacion-Elemento','FrontController@viewCapacitacion');

//rutas nuevas
///Grupos electrogenos
Route::resource('grupos', 'GruposController');
///pozos de puesta a tierra
Route::resource('pozos', 'PozosController');
///Ups
Route::resource('ups', 'UpsController');
///Capacitaciones
Route::resource('capacitaciones', 'CapacitacionesController');
///Suministros
Route::resource('suministros', 'SuministrosController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//SERVICIOS
Route::resource('servicios', 'ServiciosController');
/*Route::get('/servicios', 'ServiciosController@index')->name('servicios');
Route::get('/servicios/{servicio}/create', 'ServiciosController@create');
Route::get('/servicios/edit', 'ServiciosController@edit');
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



//Imagenes inicio
Route::resource('imagenesInicio', 'ImagesInicioController');

//Imagenes Empresa
Route::resource('imagenesEmpresa', 'ImagenesEmpresaController');
