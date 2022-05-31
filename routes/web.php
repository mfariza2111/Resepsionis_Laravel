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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/resepsionis', [App\Http\Controllers\resepsionisController::class, 'index'])->name('resepsionis');
Route::post('/resepsionis/create', [App\Http\Controllers\resepsionisController::class, 'create'])->name('resepsionis');
Route::get('/resepsionis/{id}/edit', [App\Http\Controllers\resepsionisController::class, 'edit'])->name('resepsionis');
Route::post('/resepsionis/{id}/update', [App\Http\Controllers\resepsionisController::class, 'update'])->name('resepsionis');
Route::get('/resepsionis/delete/{id}', [App\Http\Controllers\resepsionisController::class, 'delete'])->name('resepsionis');
Route::get('img/{hotel.jpg}', 'HomeController@displayImage')->name('image.displayImage');