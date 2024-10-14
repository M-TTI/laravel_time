<?php

use App\Http\Controllers\UnitController;
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

//Route::get('/units', [UnitController::class, 'index']);
//
//Route::get('/units/create', [UnitController::class, 'create']);
//
//Route::post('/units', [UnitController::class, 'store']);
//
//Route::get('/units/{unit}', [UnitController::class, 'show']);
//
//Route::get('/units/{unit}/edit', [UnitController::class, 'edit']);
//
//Route::patch('/units/{unit}', [UnitController::class, 'update']);
//
//Route::delete('/units/{unit}', [UnitController::class, 'destroy']);

Route::resource('/units', UnitController::class);
