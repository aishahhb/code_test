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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::match(['get','post'], '/card', [App\Http\Controllers\HomeController::class, 'form'])->name('card_submit');
Route::get('/question_b', [App\Http\Controllers\HomeController::class, 'question_b'])->name('question_b');
