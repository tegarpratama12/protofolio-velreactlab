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
    return view('pages.home', [
        'title' => 'Home'
    ]);
})->name('home');


Route::get('/about', function () {
    return view('pages.about', [
        'title' => 'About'
    ]);
})->name('about');

Route::get('/service', function () {
    return view('pages.service', [
        'title' => 'Service'
    ]);
})->name('service');

Route::get('/contact', function () {
    return view('pages.contact', [
        'title' => 'Contact'
    ]);
})->name('contact');

Route::get('/index', function () {
    return view('template.contact');
});

