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
    route::get('/districts', 'index');
});

