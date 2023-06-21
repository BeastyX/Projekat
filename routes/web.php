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
Route::get('/frilenseri/create', [FrilenserController::class, 'create'])->name('frilenseri.create');
Route::post('/frilenseri/store', [FrilenserController::class, 'store'])->name('frilenseri.store');
Route::get('/frilenseri/edit/{frilenser}', [FrilenserController::class, 'edit'])->name('frilenseri.edit');
Route::post('/frilenseri/update/{frilenser}', [FrilenserController::class, 'update'])->name('frilenseri.update');
Route::post('/frilenseri/destroy/{frilenser}', [FrilenserController::class, 'destroy'])->name('frilenseri.destroy');

Route::get('/klijenti', [KlijentController::class, 'index'])->name('klijenti.index');
Route::get('/klijenti/create', [KlijentController::class, 'create'])->name('klijenti.create');
Route::post('/klijenti/store', [KlijentController::class, 'store'])->name('klijenti.store');
Route::get('/klijenti/edit/{klijent}', [KlijentController::class, 'edit'])->name('klijenti.edit');
Route::post('/klijenti/update/{klijent}', [KlijentController::class, 'update'])->name('klijenti.update');
Route::post('/klijenti/destroy/{klijent}', [KlijentController::class, 'destroy'])->name('klijenti.destroy');

Route::get('/poslovi', [PosaoController::class, 'index'])->name('poslovi.index');
Route::get('/poslovi/create', [PosaoController::class, 'create'])->name('poslovi.create');
Route::post('/poslovi/store', [PosaoController::class, 'store'])->name('poslovi.store');
Route::get('/poslovi/edit/{posao}', [PosaoController::class, 'edit'])->name('poslovi.edit');
Route::post('/poslovi/update/{posao}', [PosaoController::class, 'update'])->name('poslovi.update');
Route::post('/poslovi/destroy/{posao}', [PosaoController::class, 'destroy'])->name('poslovi.destroy');
