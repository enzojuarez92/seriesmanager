<?php

use App\Http\Controllers\config\ConnectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ConnectionController::class, 'showConnection']);
Route::post('/', [ConnectionController::class, 'connection'])->name('connection');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::delete('/destroy', [SerieController::class, 'destroy'])->name('serie.destroy');
Route::post('/store', [SerieController::class, 'store'])->name('serie.store');
Route::post('/anular', [SerieController::class, 'anular'])->name('serie.anular');
Route::put('/destroy', [SerieController::class, 'update'])->name('serie.update');