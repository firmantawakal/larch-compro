<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\JenisPembangunanController;
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
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('signup', [FrontController::class, 'signup'])->name('signup');
Route::get('detail/{section}/{id}', [FrontController::class, 'detail'])->name('detail');

Route::get('admin', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::prefix('admin')->group(function () {
    Route:: resource('user', '\App\Http\Controllers\UserController')->middleware('role:admin');
    Route::post('visitor/add', [VisitorController::class, 'store'])->name('visitor.store');

    Route::middleware(['auth'])->group(function () {
        Route:: resource('user', '\App\Http\Controllers\UserController')->middleware('role:admin');
        Route:: get('user/unarchive/{id}', [UserController::class, 'unarchive'])->name('user.unarchive')->middleware('role:admin');

        Route::get('home/{section}', [HomeController::class, 'edit'])->name('home');
        Route::patch('home/update/{id}', [HomeController::class, 'update'])->name('home.update');
        Route::post('home/2/store', [HomeController::class, 'section2store'])->name('section2.store');
        Route::delete('home/2/destroy/{id}', [HomeController::class, 'section2destroy'])->name('section2.destroy');
        Route::patch('home/2/update/{id}', [HomeController::class, 'section2update'])->name('section2.update');

        Route::get('setting', [HomeController::class, 'setting'])->name('home.setting');
        Route::patch('setting/update/{id}', [HomeController::class, 'setting_action'])->name('home.setting.update');
        Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
        
        Route::get('jenis_pembangunan', [JenisPembangunanController::class, 'index'])->name('jenis_pembangunan');
        Route::patch('jenis_pembangunan/update/{id}', [JenisPembangunanController::class, 'update'])->name('jenis_pembangunan.update');
        Route::post('jenis_pembangunan/store', [JenisPembangunanController::class, 'store'])->name('jenis_pembangunan.store');
        Route::delete('jenis_pembangunan/destroy/{id}', [JenisPembangunanController::class, 'destroy'])->name('jenis_pembangunan.destroy');

        Route::get('visitor', [VisitorController::class, 'index'])->name('visitor');
        Route::get('visitor/detail/{id}', [VisitorController::class, 'detail'])->name('visitor.detail');
        Route::delete('visitor/destroy/{id}', [VisitorController::class, 'destroy'])->name('visitor.destroy');
        Route::get('visitor/unarchive/{id}', [VisitorController::class, 'unarchive'])->name('visitor.unarchive');
    });
});



// Route::get('/clear-cache', function() {
//     Artisan::call('cache:clear');
//     return "Cache is cleared";
// });

// // 404 for undefined routes
// Route::any('/{page?}',function(){
//     return View::make('pages.error.404');
// })->where('page','.*');
