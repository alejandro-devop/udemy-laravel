<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PortfolioController;
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
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::get('/portfolio/{project}/editar', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::patch('/portfolio/{project}', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::get('/portfolio/{project}', [PortfolioController::class, 'show'])->name('portfolio.show');


Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [MessagesController::class, 'store'])->name('sendMessage');

// Route::resource('/projects', 'App\Http\Controllers\PortfolioController');