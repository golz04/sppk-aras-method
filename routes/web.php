<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\KalkulasiAdminController;
use App\Http\Controllers\LandingController;
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

// Route::get('/', function () { return view('welcome'); });

Route::get('/', [LandingController::class, 'redirects']);
Route::get('/rekomendasi', [LandingController::class, 'index']);
Route::post('/rekomendasi/find', [LandingController::class, 'find']);


Route::group(['middleware' => ['auth']], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('laptop', [LaptopController::class, 'index'])->name('laptop');
    Route::post('laptop/store', [LaptopController::class, 'store']);
    Route::post('laptop/import', [LaptopController::class, 'importFile']);

    Route::get('kalkulasi-admin', [KalkulasiAdminController::class, 'index'])->name('kalkulasi-admin');
    Route::post('kalkulasi-admin/find', [KalkulasiAdminController::class, 'find']);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
