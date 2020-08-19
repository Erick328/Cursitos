<?php

use Illuminate\Support\Facades\Route;

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
    return view('Home');
});

//pdf

Route::get('certificado-pdf/{id}','AlumnoController@certificado')->name('certificado.pdf');
//bitacora

route::get('Bitacora',['as'
=>'Bitacora.show','uses'=>'BitacoraController@show'])->middleware('auth','roles:admin');

//alumno
Route::resource('alumno', 'AlumnoController')->except('show');
Route::get('alumnoshow',['as'
=>'alumno.show','uses'=>'AlumnoController@show'])->middleware(['auth','roles:alumno,admin']);

//profesor
Route::resource('profesor','ProfesorController')->except('show');
Route::get('profesorshow',['as'
=>'profesor.show','uses'=>'ProfesorController@show'])->middleware(['auth','roles:profesor,admin']);

//categoria
Route::resource('categoria','CategoriaController');

//curso
route::resource('curso','CursoController')->middleware(['auth','roles:alumno,profesor,admin']);


//boleta de inscripcion
Route::get('boletaInscripcion',['as'
=>'boletaInscripcion.index','uses'=>'BoletaInscripcionController@index']);
Route::get('boletaInscripcionshow',['as'
=>'boletaInscripcion.show','uses'=>'BoletaInscripcionController@show'])->middleware('auth','roles:admin');
Route::post('boletaInscripcion/{id}/{IdPago}',['as'
=>'boletaInscripcion.store','uses'=>'BoletaInscripcionController@store']);
Route::delete('boletaInscripcion/{id}',['as'
=>'boletaInscripcion.destroy','uses'=>'BoletaInscripcionController@destroy']);


//get=no envias nada'para mostrar vistas o lo que estas sacando de tu base'
//post=enviar formularios enviar cosas a la base
//put=es los dos al mismo tiempo"para actualizar datos"

//suscripcion de pago
Route::get('suscripcionPago/{id}',['as'
=>'suscripcionPago.create','uses'=>'SuscripcionPagoController@create'])->middleware('auth','roles:alumno,admin');
Route::post('suscripcionPago/{id}',['as'
=>'suscripcionPago.store','uses'=>'SuscripcionPagoController@store']);
Route::get('suscripcionPago',['as'
=>'suscripcionPago.index','uses'=>'SuscripcionPagoController@index']);
Route::delete('suscripcionPago/{id}',['as'
=>'suscripcionPago.destroy','uses'=>'SuscripcionPagoController@destroy']);


//comentario
Route::post('comentario/{id}',['as'
=>'comentario.store','uses'=>'ComentarioController@store']);
Route::delete('comentario/{Id}','ComentarioController@destroy')->name('comentario.destroy');

//recursos
Route::resource('recursos','RecursosController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
