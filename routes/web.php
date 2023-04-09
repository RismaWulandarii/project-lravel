<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});

Route::group(['middleware' => ['admin']], function(){
    Route::get('/dataPengguna', [DashboardController::class, 'showDataPengguna'])->name('dashboard.showDataPengguna');
    Route::get('/showProduct', [ProductController::class, 'read'])->name('Product.read');
    Route::get('/createSnack', [ProductController::class, 'create'])->name('Snack.create');
    Route::PUT('/store', [ProductController::class, 'store'])->name('Snack.store');
    Route::get('/editProduct/{id}', [ProductController::class, 'edit'])->name('Snack.edit');
    Route::PUT('/editProduct/{id}', [ProductController::class, 'update'])->name('Snack.update');
    Route::PUT('/hapusProduct/{id}', [ProductController::class, 'destroy'])->name('Snack.hapus');
    Route::get('/detailProduct/{id}', [ProductController::class, 'detail'])->name('Snack.detail');
    Route::PUT('/hapus-data-pengguna/{id}', [DashboardController::class, 'destroy'])->name('User.hapus');
});