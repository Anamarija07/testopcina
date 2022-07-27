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

Route::get('/', 'App\Http\Controllers\Controller@index');
Route::get('/sluzbazagospodarstvofinancijeiinspekcijskeposlove', 'App\Http\Controllers\Controller@sluzba1');
Route::get('/sluzbazaprostornouredenjestambeno-komunalneposloveikatastar', 'App\Http\Controllers\Controller@sluzba2');
Route::get('/sluzbazadrustvenedjelatnostiopcuupravuimovinsko-pravneposlovepitanjabraniteljaicivilnuzastitu', 'App\Http\Controllers\Controller@sluzba3');
Route::get('/opcinskovijece', 'App\Http\Controllers\Controller@vijece');
Route::get('/opcinskinacelnik', 'App\Http\Controllers\Controller@nacelnik');
Route::get('/javnapoduzecaiustanove', 'App\Http\Controllers\Controller@poduzeca');
Route::get('/okupresu', 'App\Http\Controllers\Controller@okupresu');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', 'App\Http\Controllers\PostsController');
Route::resource('sjednice', 'App\Http\Controllers\SjednicaController');
Route::resource('glasnici', 'App\Http\Controllers\GlasnikController');
Route::resource('obavijesti', 'App\Http\Controllers\ObavijestController');

