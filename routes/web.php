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
    $pasta = config('pasta');
    return view('home', [
        'pasta' => $pasta
    ]);
})->name('homepage');

Route::get('/product/{id}', function ($id) {

    // aggiorno l'id con un valore posizionale
    $arrayIndex = $id - 1;

    $pasta = config('pasta');

    return view('product', [
        "arrayIndex" => $arrayIndex,
        'pasta' => $pasta
    ]);
})->name('product');




