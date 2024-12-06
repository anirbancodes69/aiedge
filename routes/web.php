<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Blogs\BlogController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return redirect('/blogs');
});

Route::resource('/blogs', BlogController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/auth/register', [AuthController::class, 'register_form'])->name('auth.register_form');
Route::get('/auth/login', [AuthController::class, 'login_form'])->name('auth.login_form');