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

Route::get('/', function () {
return view('main');
});

Route::get('/laravel', function () {
	return view('welcome');
});
 
/*
Route::get('/home', function () {
    $nombre = "Carlos";
    return view('home')->with('nombre', $nombre);
    return view('home')->with('nombre' => $nombre); //array
    return view('home', ['nombre' => $nombre]); //segundo parametro
    return view('home')->with('nombre', $nombre);
});->name('home');
*/
/*
Route::get('hola', function () {
return "Hola como estan?";
});
Route::get('contacto', function($nombre="Invitado"){
return "Sesion Contacto";
})-> name('contactos');

Route::get('/', function(){
echo "<a href='contactos'>Contacto 1</a><br>";
echo "<a href='contactos'>Contacto 2</a><br>";
echo "<a href='contactos'>Contacto 3</a><br>";
});

Route::get('/', function(){
echo "<a href='".route('contactos')."'>Contacto 1</a><br>";
echo "<a href='".route('contactos')."'>Contacto 2</a><br>";
echo "<a href='".route('contactos')."'>Contacto 3</a><br>";
});*/
