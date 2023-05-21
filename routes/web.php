<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/dashboard_user', [LoginController::class, 'dashboard_user'])->name('login.dashboard.user');
Route::get('/logout-user', [LoginController::class, 'logout_user'])->name('logout.user');
Route::post('/profile-update', [RegisterController::class, 'update'])->name('update.profile');

// Admin
Route::get('/dashboard_admin', [LoginController::class, 'dashboard_admin'])->name('login.dashboard.admin');
Route::get('/profile/{id}', [LoginController::class, 'profile_users'])->name('profile.detail');
Route::get('/login-admin', [LoginController::class, 'login_page_admin'])->name('login.page.admin');
Route::post('/login-admin', [LoginController::class, 'login_admin'])->name('login.process.admin');
Route::get('/logout-admin', [LoginController::class, 'logout_admin'])->name('logout.admin');
