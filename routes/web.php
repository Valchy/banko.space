<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
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

// Route::prefix(app()->getLocale())->group(function() {
//     // add all routes here
// });

Route::get('/', HomeController::class);
Route::get('/test', function () {
    // abort(500);
    throw new Exception('Custom exception message :))');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/profile', [ProfileController::class, 'index']);
    Route::resource('/settings', [SettingsController::class, 'index']);
});

Route::get('/transaction-history', TransactionHistoryController::class)->name('transaction-history');
Route::resource('/admin', AdminController::class)->middleware(['auth', 'is_admin']);
Route::get('/health', HealthCheckResultsController::class)->name('health');

require __DIR__.'/auth.php';
