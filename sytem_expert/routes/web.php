<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\RulebaseController;
use App\Http\Controllers\KonsultasiController;


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
    return view('home');
});

Route::resource('gejala', GejalaController::class);
Route::resource('penyakit', PenyakitController::class);
Route::resource('rulebase', RulebaseController::class);
Route::resource('konsultasi', KonsultasiController::class);
