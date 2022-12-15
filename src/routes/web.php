<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/function1', function () {return view('function1');})->name('function1');
Route::get('/notices', function () {return view('notices');})->name('notices');
Route::get('/notice', function () {return view('notice');})->name('notice');
Route::get('/members', function () {return view('members');})->name('members');
Route::get('/member', function () {return view('member');})->name('member');
Route::get('/staff', function () {return view('staff');})->name('staff');

Route::get('/form', function () {return view('form');})->name('form');
Route::post('/form', [App\Http\Controllers\FormController::class, 'form'])->name('post-form');
Route::get('/carender', function () {return view('carender');})->name('carender');

Route::group(['middleware'=> 'auth'], function () {
    Route::get('/purchase', function () {return view('purchase');})->name('purchase');
    Route::post('/purchase', [App\Http\Controllers\StripeController::class, 'purchase'])->name('purchase.post');
    Route::get('/subscription', [App\Http\Controllers\StripeController::class, 'showSubscription'])->name('subscription');
    Route::post('/subscribe', [App\Http\Controllers\StripeController::class, 'subscription'])->name('subscribe.post');
});

Route::get('/chats', function () {return view('chats');})->name('chats');
Route::get('/chat', function () {return view('chat');})->name('chat');

Route::get('/admin', function () {return view('admin.top');})->name('admin.top');
Route::get('/admin/tables', function () {return view('admin.tables');})->name('admin.tables');
Route::get('/admin/register', function () {return view('admin.register');})->name('admin.register');
Route::get('/admin/password', function () {return view('admin.password');})->name('admin.password');
Route::get('/admin/login', function () {return view('admin.login');})->name('admin.login');
Route::get('/admin/charts', function () {return view('admin.charts');})->name('admin.charts');
Route::get('/admin/401', function () {return view('admin.401');})->name('admin.401');
Route::get('/admin/404', function () {return view('admin.404');})->name('admin.404');
Route::get('/admin/500', function () {return view('admin.500');})->name('admin.500');
Route::get('/admin/layout-static', function () {return view('admin.layout-static');})->name('admin.layout-static');
Route::get('/admin/layout-sidenav-light', function () {return view('admin.layout-sidenav-light');})->name('admin.layout-sidenav-light');
