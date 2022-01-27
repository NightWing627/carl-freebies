<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/test', [TestController::class, 'index'])->name('login.api');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/freebies/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('show');

Auth::routes();

Route::middleware(['auth'])->group(function() {
    Route::get('/post', [App\Http\Controllers\FreebieController::class, 'post'])->name('freebie.post');
    Route::post('/post', [App\Http\Controllers\FreebieController::class, 'create'])->name('freebie.create');

    Route::middleware(['admin'])->prefix('admin')->group(function() {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user');
        Route::get('/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin.user.show');
        Route::post('/users/{id}/delete', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('admin.user.delete');
    });
});

