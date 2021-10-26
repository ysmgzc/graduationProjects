<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\RegisterController;

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
Route::get('sifre-yenileme', function (){
   return view('Backend.Auth.reset_password');
});
Route::get('giris', [LoginController::class, 'showLogin'])->name('login');
Route::post('giris', [LoginController::class, 'login']);
Route::get('cikis', [LoginController::class, 'logout'])->name('logout');
Route::post('kayit-ol', [RegisterController::class, 'register'])->name('register');

Route::prefix('panel')->middleware('auth')->group(function (){
    Route::get('/', function (){
        toastr()->success('Yönetim Paneline Hoşgeldiniz');
        return view('Backend.index');
    })->name('admin.index');
});
Route::get('/frontend', function () {
    toastr()->info('Are you the 6 fingered man?');
    return view('Frontend.index');
});

