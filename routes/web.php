<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
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
Route::get('jadwal', [FrontController::class, 'jadwal'])->name('jadwal');
Route::get('hasil', [FrontController::class, 'hasil'])->name('hasil');
Route::get('detail/{slug}', [FrontController::class, 'detail'])->name('detail');

Route::get('admin', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::prefix('admin')->group(function () {
    Route:: resource('user', '\App\Http\Controllers\UserController')->middleware('role:admin');
    Route::post('visitor/add', [VisitorController::class, 'store'])->name('visitor.store');

    Route::middleware(['auth'])->group(function () {
        Route:: resource('user', '\App\Http\Controllers\UserController')->middleware('role:admin');
        Route:: get('user/unarchive/{id}', [UserController::class, 'unarchive'])->name('user.unarchive')->middleware('role:admin');

        Route::get('home', [HomeController::class, 'edit'])->name('home');
        Route::patch('home/update/{id}', [HomeController::class, 'update'])->name('home.update');
        Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

        Route::get('visitor', [VisitorController::class, 'index'])->name('visitor');
        Route::get('visitor/detail/{id}', [VisitorController::class, 'detail'])->name('visitor.detail');
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
