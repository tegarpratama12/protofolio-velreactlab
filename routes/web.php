<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

// adding route testing
Route::get('/testing', function () {
    return ('hello');
});
// end route testing


// adding route list
Route::get('/list_2', function () {
    return ('list 2');
});
// end adding route list
