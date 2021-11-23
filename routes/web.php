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
    /* return view('welcome'); */
    return "Página Principal";
});
Route::get('cursos',function(){
    return "Bienvenido a la página de Cursos";
});
Route::get('cursos/create',function(){
    return "En esta página se puede crear un curso";
});
Route::get('cursos/{curso}/{categoría}',function($curso,$categoria=null){

});
