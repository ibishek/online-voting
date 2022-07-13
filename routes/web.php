<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('login', [LoginController::class, 'page'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('local/dev/login', function() {
    if (config('app.env') !== 'local') {
        return redirect()->back();
    }
    \Illuminate\Support\Facades\Auth::login(\App\Models\User::first());
    return redirect()->intended('dashboard');
});

Route::middleware('auth')->group(function() {
    Route::get('logout', LogoutController::class);

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});
