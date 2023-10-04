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

Route::get('/connection', [ConnectionController::class, 'showConnection']);
Route::post('/connection', [ConnectionController::class, 'connection'])->name('connection');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/', [SerieController::class, 'store'])->name('store');
Route::delete('/{serie}', [SerieController::class, 'destroy'])->name('destroy');
Route::post('/{serie}', [SerieController::class, 'anular'])->name('anular');
Route::put('/', [SerieController::class, 'update'])->name('update');