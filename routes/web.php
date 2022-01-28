<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendMoneyController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\TransactionHistoryController;
use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

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

Route::get('/', HomeController::class)->name('home');
Route::get('/test', function () {
    // abort(500);
    throw new Exception('Custom exception message :))');
});

Route::get('/locale/{locale}', function ($locale) {
    session()->put('locale', $locale);

    return redirect()->back();
})->name('locale');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/top-up-account', [TopUpController::class, 'index'])->name('top-up-account');
    Route::post('/top-up-account', [TopUpController::class, 'create'])->name('top-up-account-now');
    Route::get('/send-money', [SendMoneyController::class, 'index'])->name('send-money');
    Route::post('/send-money', [SendMoneyController::class, 'create'])->name('send-money-now');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile-update');
    Route::post('/profile/delete', [ProfileController::class, 'destroy'])->name('profile-delete');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
});

Route::get('/transaction-history', TransactionHistoryController::class)->name('transaction-history');
Route::get('/admin', AdminController::class)->middleware(['auth', 'is_admin'])->name('admin');
Route::get('/health', HealthCheckResultsController::class)->name('health');

require __DIR__.'/auth.php';
