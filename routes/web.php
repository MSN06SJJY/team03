<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikePathController;

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

Route::get(
    '/', //網址名稱
    function () //第二個參數 
    {
    return view('welcome'); //引導至一份視圖(view) : welcome view
    }
);

Route::get(
    'sdgs', 
    function () 
    {
    return view('intro_sdgs');
    }
);

Route::get('bikepaths',[BikePathController::class, 'index'])
    ->name('bikepaths.index');
Route::get('bikepaths/create',[BikePathController::class, 'create'])
    ->name('bikepaths.create');
Route::post('bikepaths/store',[BikePathController::class, 'store'])
    ->name('bikepaths.store');
Route::get('bikepaths/{id}',[BikePathController::class, 'show'])
    ->where('id','[0-9]+')
    ->name('bikepaths.show');
Route::get('bikepaths/{id}/edit',[BikePathController::class, 'edit'])
    ->where('id','[0-9]+')
    ->name('bikepaths.edit');
Route::delete('bikepaths/delete/{id}',[BikePathController::class, 'destroy'])
    ->where('id','[0-9]+')
    ->name('bikepaths.destroy');
Route::patch('bikepaths/{id}/update',[BikePathController::class, 'update'])
    ->name('bikepaths.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');