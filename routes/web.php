<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtlController;

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

Route::get('Alt', [AtlController::class, 'index'])->name('Alts.index');

Route::get(
    'sdg',
    function () {
        return view('intro_sdg');
    }
);

Route::get(
    '1',
    function () {
        return view('welcome');
    } 
);

Route::get('At/{id}', [AtlController::class, 'show'])->where('id', '[0-9]+')->name('Alts.index');
Route::get('At/{id}/edit', [AtlController::class, 'edit'])->where('id', '[0-9]+')->name('Alts.edit');
Route::patch('At/{id}/update', [AtlController::class, 'update'])->where('id', '[0-9]+')->name('Alts.update');
Route::delete('At/delete/{id}', [AtlController::class, 'destroy'])->where('id', '[0-9]+')->name('Alts.destroy');
Route::get('At/create', [AtlController::class, 'create'])->name('Alts.create');
Route::post('At/store', [AtlController::class, 'store'])->name('Alts.store');
