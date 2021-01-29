<?php

use App\Http\Controllers\CarriereController;
use App\Http\Controllers\CorsoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IscrivitiController;
use App\Http\Controllers\LezioneGratuitaController;
use App\Http\Controllers\UtentiController;
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

Route::get('/', [HomeController::class, 'home'])
    ->name('pages.index');

Route::get('/corso', [CorsoController::class, 'corso'])
    ->name('pages.corso');

Route::get('/carriere', [CarriereController::class, 'carriere'])
    ->name('pages.carriere');

Route::get('/lezione-gratuita', [LezioneGratuitaController::class, 'lezione'])
    ->name('pages.lezione-gratuita');

Route::get('/iscriviti', [IscrivitiController::class, 'iscriviti'])
    ->name('pages.iscriviti');

Route::get('/utenti', [UtentiController::class, 'utenti'])
    ->name('pages.utenti');
