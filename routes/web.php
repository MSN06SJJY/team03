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