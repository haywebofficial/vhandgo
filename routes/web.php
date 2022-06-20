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

Route::get('/', function () {return view('welcome');});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ketentuan', function () {return view('admin/ketentuan');});
Route::get('/syarat', function () {return view('admin/syarat');});
Route::get('/kebijakan', function () {return view('admin/kebijakan');});
Route::get('/registerclient', function () {return view('admin/registerclient');});
Route::get('/profile', function () {return view('livewire/profile');});
Route::get('/kategori', function () {return view('livewire/kategori');});
Route::get('setlocale/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang']);
