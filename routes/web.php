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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Route::resource('cursos', App\Http\Controllers\Admin\cursosController::class, ["as" => 'admin']);
    // Route::resource('suportes', App\Http\Controllers\suporteController::class);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('materiais', App\Http\Controllers\Admin\materiaisController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('alunos', App\Http\Controllers\Admin\alunosController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('turmas', App\Http\Controllers\Admin\turmasController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('vendas', App\Http\Controllers\Admin\vendasController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('vendasCursos', App\Http\Controllers\Admin\vendasCursosController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('vendasMateriais', App\Http\Controllers\Admin\vendasMateriaisController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('turmasAlunos', App\Http\Controllers\Admin\turmasAlunosController::class, ["as" => 'admin']);
});
