<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotelsController;
use App\Http\Controllers\DistrictsController;

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


Route::get('/', [MotelsController::class, 'index']);
Route::get('/dangky',[MotelsController::class, 'register']);
Route::controller(DistrictsController::class)->group(function(){
    Route::get('/districts', 'index');
    Route::get('/admin', 'show')->name('admin');
    // them motels
    Route::get('/add','create')->name('add');
    Route::post('/insert','story')->name('insert');
    // edit motels
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    //delete motels
    Route::get('/delete/{id}', 'destroy')->name('delete');
});

