<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\RegisterController;
use App\Http\Controllers\Backend\Auth\ResetPasswordController;
use App\Http\Controllers\Backend\SiteSettings\SMTPSettingsController;
use App\Http\Controllers\Backend\SiteSettings\SiteSettingController;
use App\Http\Controllers\Backend\SiteSettings\ContactController;
use App\Http\Controllers\Backend\AdminProfilController;
use App\Http\Controllers\Backend\Page\PageController;
use App\Http\Controllers\Backend\Menu\MenuController;
use App\Http\Controllers\Backend\Menu\SubmenuController;
use App\Http\Controllers\Backend\Brand\BrandController;
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
});

Route::get('cikis', [LoginController::class, 'logout'])->name('logout');

Route::get('sifre/yenile', [ResetPasswordController::class, 'showPasswordForm'])->name('resetPassword');
Route::get('sifre/yenile/{token}', [ResetPasswordController::class, 'resetPasswordShowForm'])->name('resetPassword.showForm');
Route::post('sifre/yenile', [ResetPasswordController::class, 'reset']);






Route::prefix('panel')->middleware('isAdmin')->group(function (){
    Route::get('/', function (){
        toastr()->success('Yönetim Paneline Hoşgeldiniz');
        return view('Backend.index');
    })->name('admin.index');
    Route::get('site-ayarlari',function (){
        return view('Backend.Site Settings.site_setting');
    })->name('admin.site.settings');

    Route::get('mail-ayarlari',[SMTPSettingsController::class, 'index'])->name('admin.site.mail.settings');
    Route::post('mail-ayarlari/{id}',[SMTPSettingsController::class, 'update'])->name('admin.site.mail.settings.update');

    Route::get('site-ayarlari',[SiteSettingController::class, 'index'])->name('admin.site.settings');
    Route::post('site-ayarlari/{id}',[SiteSettingController::class, 'update'])->name('admin.site.settings.update');

    Route::get('iletisim-ayarlari',[ContactController::class, 'index'])->name('admin.contact.settings');
    Route::post('iletisim-ayarlari/{id}',[ContactController::class, 'update'])->name('admin.contact.settings.update');

    Route::get('profil', [AdminProfilController::class, 'index'])->name('admin.profil');
    Route::post('profil/{id}', [AdminProfilController::class, 'update'])->name('admin.profil.update');

    Route::get('sozlesme/create', [PageController::class, 'create'])->name('sozlesme.create');
    Route::get('sozlesme/{id}', [PageController::class, 'destroy'])->name('sozlesme.destroy');
    Route::resource('sozlesme', PageController::class);

    Route::get('menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::get('menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
    Route::resource('menu', MenuController::class);

    Route::get('submenu/create', [SubmenuController::class, 'create'])->name('submenu.create');
    Route::get('submenu/{id}', [SubmenuController::class, 'destroy'])->name('submenu.destroy');
    Route::resource('submenu', SubmenuController::class);

    Route::get('marka/create', [BrandController::class, 'create'])->name('marka.create');
    Route::get('marka/{id}', [BrandController::class, 'destroy'])->name('marka.destroy');
    Route::resource('marka', BrandController::class);


});


Route::get('/frontend', function () {
    toastr()->info('Are you the 6 fingered man?');
    return view('Frontend.index');
});

