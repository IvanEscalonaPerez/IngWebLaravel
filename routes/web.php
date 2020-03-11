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

Route::get('/{any?}', 'Controller@index')->where('any', '^(?!api/)[/\w.-]*');
//Revisa que toda direccion que comience con la raiz sea delegado a la funcion controlador(cualquiera exepto el api)