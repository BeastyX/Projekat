<?php

use App\Http\Controllers\DizajnerController;
use App\Http\Controllers\FrilenserController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KlijentController;
use App\Http\Controllers\PosaoController;
use App\Http\Controllers\UserController;
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

Route::get('/users/create', [UserController::class, 'create'])->middleware('guest')->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->middleware('guest')->name('users.store');
Route::get('/users/login', [UserController::class, 'login'])->middleware('guest')->name('users.login');
Route::post('/users/autentifikacija', [UserController::class, 'autentifikacija'])->middleware('guest')->name('users.autentifikacija');
Route::post('/users/logout', [UserController::class, 'logout'])->middleware('auth')->name('users.logout');

Route::get('/dizajneri', [DizajnerController::class, 'index'])->name('dizajneri.index');
Route::get('/dizajneri/create', [DizajnerController::class, 'create'])->middleware('auth')->name('dizajneri.create');
Route::post('/dizajneri/store', [DizajnerController::class, 'store'])->middleware('auth')->name('dizajneri.store');
Route::get('/dizajneri/edit/{dizajner}', [DizajnerController::class, 'edit'])->middleware('auth')->name('dizajneri.edit');
Route::post('/dizajneri/update/{dizajner}', [DizajnerController::class, 'update'])->middleware('auth')->name('dizajneri.update');
Route::post('/dizajneri/destroy/{dizajner}', [DizajnerController::class, 'destroy'])->middleware('auth')->name('dizajneri.destroy');

Route::get('/frilenseri', [FrilenserController::class, 'index'])->name('frilenseri.index');
Route::get('/frilenseri/create', [FrilenserController::class, 'create'])->middleware('auth')->name('frilenseri.create');
Route::post('/frilenseri/store', [FrilenserController::class, 'store'])->middleware('auth')->name('frilenseri.store');
Route::get('/frilenseri/edit/{frilenser}', [FrilenserController::class, 'edit'])->middleware('auth')->name('frilenseri.edit');
Route::post('/frilenseri/update/{frilenser}', [FrilenserController::class, 'update'])->middleware('auth')->name('frilenseri.update');
Route::post('/frilenseri/destroy/{frilenser}', [FrilenserController::class, 'destroy'])->middleware('auth')->name('frilenseri.destroy');

Route::get('/klijenti', [KlijentController::class, 'index'])->name('klijenti.index');
Route::get('/klijenti/create', [KlijentController::class, 'create'])->middleware('auth')->name('klijenti.create');
Route::post('/klijenti/store', [KlijentController::class, 'store'])->middleware('auth')->name('klijenti.store');
Route::get('/klijenti/edit/{klijent}', [KlijentController::class, 'edit'])->middleware('auth')->name('klijenti.edit');
Route::post('/klijenti/update/{klijent}', [KlijentController::class, 'update'])->middleware('auth')->name('klijenti.update');
Route::post('/klijenti/destroy/{klijent}', [KlijentController::class, 'destroy'])->middleware('auth')->name('klijenti.destroy');

Route::get('/poslovi', [PosaoController::class, 'index'])->name('poslovi.index');
Route::get('/poslovi/create', [PosaoController::class, 'create'])->middleware('auth')->name('poslovi.create');
Route::post('/poslovi/store', [PosaoController::class, 'store'])->middleware('auth')->name('poslovi.store');
Route::get('/poslovi/edit/{posao}', [PosaoController::class, 'edit'])->middleware('auth')->name('poslovi.edit');
Route::post('/poslovi/update/{posao}', [PosaoController::class, 'update'])->middleware('auth')->name('poslovi.update');
Route::post('/poslovi/destroy/{posao}', [PosaoController::class, 'destroy'])->middleware('auth')->name('poslovi.destroy');
