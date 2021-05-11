<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View; //Fachadas
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

//          Ejemplo - retornando Texto
// Route::get('/Texto', function () {
//     return '<h1>Esto es un texto de prueba</h1>';
// });

//          Ejemplo - retornando array
// Route::get('/array', function () {
//     $array  = ['Lunes', 'Martes', 'Miercoles'];         
//     return $array;
// });

//          Ejemplo - Parámetros
// Route::get('/nombre/{nombre}', function ($nombre) {
//     return 'Bienvenido <h1>' . $nombre . '</h1>';
// });

//          Ejemplo - Parámetros por defecto
// Route::get('/cliente/{nombre?}', function ($cliente = 'cliente General') {
//     return 'Bienvenido <h1>' . $cliente . '</h1>';
// });

//          Ejemplo - redirigir ruta
// Route::get('/ruta1', function () {
//     return 'Esta es la ruta 1';
// })->name('ruta1');
// Route::get('/ruta2', function () {
//     return redirect()->route('ruta1');
// });

//          Ejemplo - Validando
// Route::get('/productos/{cantidad}', function ($cliente) {
//     return 'No. de productos: <h1>' . $cantidad . '</h1>';
// })->where('cantidad', '[0-9]+');

            //Ejemplo - retornando vista
// Route::get('/', function () {
//     return view('vista1', ['nombre' => 'Juan']);
// });


            //Ejemplo validando vistas con FACHADA
// if(View::exists('vista2')){
//     Route::get('/', function () {
//         return view('vista2', ['nombre' => 'Juan']);
//     });
// }else{
//     return 'La vista solicitada no existe';
// }


Route::get('/', function () {
    return view('index');
});

Route::get('/vista1', 'App\Http\Controllers\InicioController@index');

Route::resource('citas', 'App\Http\Controllers\CitaController');
Route::resource('pacientes', 'App\Http\Controllers\PacienteController');
Route::resource('veterinarios','App\Http\Controllers\VeterinarioController');
Route::resource('mascotas','App\Http\Controllers\MascotaController');
// Route::get('/inicio', 'App\Http\Controllers\InicioController@index');

// Route::resource('/', 'App\Http\Controllers\VeterinarioController');