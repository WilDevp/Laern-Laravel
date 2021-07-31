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
    return view('welcome');
});

/*metodo para crear una ruta, con una variable opcional, 
este metodo se jecuta el la plantilla pelicula.blade.php*/

Route::get('/pelicula/{titulo?}', function ($titulo = 'No has escrito una peli') {
    return view('pelicula', array(
        'titulo' => $titulo
    ));
});

/*
metodo similar al anterior el cual cumple con una serie de condiciones
*/
Route::get('/movies/{titulo2?}', function ( $titulo2 = 'digita una nueva peli') {
    return view('movies', array(
        'titulo2' => $titulo2
    ));
})->where(array(
    'titulo2' => '[a-zA-Z]+' //admite caracteres mayusculas y minusculas
));


Route::get('/listado-peliculas', function(){

    $titulo = 'Listado de peliculas';
    $listado = array('Wason', 'Super Cool', 'Superman vs Batman');
    return view('peliculas.listado-peliculas')
    ->with('titulo', $titulo)
    ->with('listado
    ', $listado);
});