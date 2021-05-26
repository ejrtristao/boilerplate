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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('config/db/updatetablenameuppertolower',App\Http\Controllers\configDB\updateTableNameUpperCaseToLowerCase::class)->name('updateUpperLower');
Route::get('config/db/updateTableInsertTimestamp',App\Http\Controllers\configDB\updateTableInsertTimestamp::class)->name('updateTimestamp');
Route::get('config/db/index', function () {
    return view('config.db.index');
})->name('config/db/index');

Route::resource('clientes', App\Http\Controllers\clientesController::class);

Route::resource('produtos', App\Http\Controllers\produtosController::class);

Route::resource('suportes', App\Http\Controllers\suporteController::class);