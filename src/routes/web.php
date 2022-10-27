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
Route::get('/design1', function () {return view('design1');})->name('design1');
Route::get('/function1', function () {return view('function1');})->name('function1');
Route::get('/function-chats', function () {return view('function-chats');})->name('function-chats');
Route::get('/function-chat', function () {return view('function-chat');})->name('function-chat');
