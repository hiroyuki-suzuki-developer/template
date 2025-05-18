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

// お問い合わせ

Route::group(['middleware'=> 'auth'], function () {
    // マイページ
    Route::get('mypage', [App\Http\Controllers\Front\CompanyController::class, 'index'])->name('index');
    // プロフィール詳細
    Route::get('profile', [App\Http\Controllers\Front\CompanyController::class, 'index'])->name('index');
});

Route::group(['prefix' => 'companies', 'as' => 'admin.'], function() {
    // 企業一覧
    Route::get('', [App\Http\Controllers\Front\CompanyController::class, 'index'])->name('index');
    // 企業詳細
    Route::get('{company_id}', [App\Http\Controllers\Front\CompanyController::class, 'show'])->name('show');
    // 企業動画
    Route::get('{company_id}/movies', [App\Http\Controllers\Front\CompanyController::class, 'movies'])->name('movies');
});

// 動画一覧
Route::get('movies', [App\Http\Controllers\Front\MovieController::class, 'movies'])->name('movies.index');
// 動画詳細
Route::get('movies/{movie_id}', [App\Http\Controllers\Front\MovieController::class, 'movies'])->name('movies.show');
// イベントカレンダー
Route::get('events', [App\Http\Controllers\Front\EventController::class, 'index'])->name('movies.index');
// イベント詳細
Route::get('events/{event_id}', [App\Http\Controllers\Front\EventController::class, 'show'])->name('movies.show');


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
Route::get('/admin/article', function () {return view('admin.article');})->name('admin.article');

Route::group(['prefix' => 'admin-9285', 'as' => 'admin.'], function() {
    Route::group(['middleware'=> 'guest'], function () {
        Route::get('login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [App\Http\Controllers\Admin\LoginController::class, 'login']);
        Route::get('password', function () {return view('admin.password');})->name('password');
    });

    Route::group(['middleware'=> 'auth:staff'], function () {
        // コンテンツ
        Route::get('', [App\Http\Controllers\Admin\TopController::class, 'index'])->name('top');
        Route::group(['prefix' => 'users', 'as' => 'user.'], function() {
            Route::get('', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('index');
            Route::get('{user_id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->where('user_id', '[0-9]+')->name('show');
            Route::patch('{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->where('user_id', '[0-9]+')->name('update');
        });
        Route::group(['prefix' => 'staffs', 'as' => 'staff.'], function() {
            Route::get('', [App\Http\Controllers\Admin\StaffController::class, 'index'])->name('index');
            Route::get('create', [App\Http\Controllers\Admin\StaffController::class, 'create'])->name('create');
            Route::post('', [App\Http\Controllers\Admin\StaffController::class, 'store'])->name('store');
            Route::get('{staff_id}', [App\Http\Controllers\Admin\StaffController::class, 'show'])->where('staff_id', '[0-9]+')->name('show');
            Route::patch('{staff_id}', [App\Http\Controllers\Admin\StaffController::class, 'update'])->where('staff_id', '[0-9]+')->name('update');
        });
        Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function() {
            Route::get('', [App\Http\Controllers\Admin\NotificationController::class, 'index'])->name('index');
            Route::get('create', [App\Http\Controllers\Admin\NotificationController::class, 'create'])->name('create');
            Route::post('', [App\Http\Controllers\Admin\NotificationController::class, 'store'])->name('store');
            Route::get('{notification_id}', [App\Http\Controllers\Admin\NotificationController::class, 'show'])->where('notification_id', '[0-9]+')->name('show');
            Route::patch('{notification_id}', [App\Http\Controllers\Admin\NotificationController::class, 'update'])->where('notification_id', '[0-9]+')->name('update');
        });
    });
});
