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
Route::view('/', 'home', ['name' => 'Alejandro'])->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', 'App\Http\Controllers\PortfolioController@index')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

// Route::resource('/projects', 'App\Http\Controllers\PortfolioController');