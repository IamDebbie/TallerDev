<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

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

Route::resource('estudiante', EstudianteController::class);
Route::get('imprimirPersonas','App\http\Controllers\PdfController@imprimirPersonas')->name('imprimirPersonas');