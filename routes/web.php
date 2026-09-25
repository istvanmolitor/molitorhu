<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home')->middleware('locale:hu');
Route::get('/en', HomeController::class)->name('home.en')->middleware('locale:en');
