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
    return view('top');
})->name('top');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/design1', function () {return view('design1');})->name('design1');
Route::get('/function1', function () {return view('function1');})->name('function1');
Route::get('/notices', function () {return view('notices');})->name('notices');
Route::get('/notice', function () {return view('notice');})->name('notice');
Route::get('/members', function () {return view('members');})->name('members');
Route::get('/member', function () {return view('member');})->name('member');
Route::get('/staff', function () {return view('staff');})->name('staff');
Route::get('/form', function () {return view('form');})->name('form');
Route::get('/carender', function () {return view('carender');})->name('carender');

Route::get('/chats', function () {return view('chats');})->name('chats');
Route::get('/chat', function () {return view('chat');})->name('chat');
