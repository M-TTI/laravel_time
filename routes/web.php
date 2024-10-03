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

Route::get('/units', function () {
    // chercher les ressources dans la bdd
    $units = \App\Models\Unit::all();

    // envoyer a la vue
//    return view('index', [
//        'units' => $units
//    ]);

    return view('index', compact('units'));
});


Route::get('/units/{id}', function ($id) {
    // chercher l'unit à l'id
    $unit = \App\Models\Unit::find($id);
    // envoie a la vue show
    return view('show', compact('unit'));
});
