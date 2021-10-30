<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\RegisterController;
use App\Http\Controllers\Backend\Auth\ResetPasswordController;

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
Route::middleware('isLogin')->group(function (){

    Route::get('giris', [LoginController::class, 'showLogin'])->name('login');
    Route::post('giris', [LoginController::class, 'login']);
    Route::post('kayit-ol', [RegisterController::class, 'register'])->name('register');
    Route::get('sifre/yenile', [ResetPasswordController::class, 'showPasswordForm'])->name('resetPassword');
    Route::get('sifre/yenile/{token}', [ResetPasswordController::class, 'resetPasswordShowForm'])->name('resetPassword.showForm');
    Route::post('sifre/yenile', [ResetPasswordController::class, 'reset']);
});

Route::get('cikis', [LoginController::class, 'logout'])->name('logout');







Route::prefix('panel')->middleware('isAdmin')->group(function (){
    Route::get('/', function (){
        toastr()->success('Yönetim Paneline Hoşgeldiniz');
        return view('Backend.index');
    })->name('admin.index');
    Route::get('site-ayarlari',function (){
        return view('Backend.Site Settings.site_setting');
    })->name('admin.site.settings');
    Route::get('mail-ayarlari',function (){
        return view('Backend.Site Settings.site_mail_setting');
    })->name('admin.site.mail.settings');
});









Route::get('/frontend', function () {
    toastr()->info('Are you the 6 fingered man?');
    return view('Frontend.index');
});

