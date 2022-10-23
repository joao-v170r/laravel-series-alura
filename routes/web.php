<?php

use App\Http\Controllers\SeriesController;
use App\Http\Controllers\TemporadasController;
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
    return redirect('/series');
});

Route::controller(SeriesController::class)->group(function () {
    Route::get('/series','index')->name('series.index');
    Route::get('/series/criar','create')->name('series.create');
    Route::post('/series/salvar','store')->name('series.store');
    Route::delete('/series/deletar/{id}','destroy')->name('series.destroy')->whereNumber('id');
    Route::get('/series/{id}/editar','edit')->name('series.edit')->whereNumber('id');
    Route::put('/series/atualizar/{id}', 'update')->name('series.update')->whereNumber('id');
});

Route::controller(TemporadasController::class)->group(function () {
    Route::get('/temporadas/{id}', 'index')->name('temporadas.index');
});

Route::get('/loadingPage', function () {
    return view('welcome');
});