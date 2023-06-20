<?php

use App\Http\Controllers\DizajnerController;
use App\Http\Controllers\FrilenserController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KlijentController;
use App\Http\Controllers\PosaoController;
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

Route::get('/', [HomepageController::class, 'index'])->name('home');

Route::get('/dizajneri', [DizajnerController::class, 'index'])->name('dizajneri.index');

Route::get('/frilenseri', [FrilenserController::class, 'index'])->name('frilenseri.index');

Route::get('/klijenti', [KlijentController::class, 'index'])->name('klijenti.index');

Route::get('/poslovi', [PosaoController::class, 'index'])->name('poslovi.index');
Route::get('/poslovi/create', [PosaoController::class, 'create'])->name('poslovi.create');
Route::post('/poslovi/store', [PosaoController::class, 'store'])->name('poslovi.store');
Route::get('/poslovi/destroy/{posao}', [PosaoController::class, 'destroy'])->name('poslovi.destroy');
