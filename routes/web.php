<?php

use App\Http\Controllers\CvController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home')->middleware('locale:hu');
Route::get('/en', HomeController::class)->name('home.en')->middleware('locale:en');

Route::get('/cv', CvController::class)->name('cv')->middleware('locale:hu');
Route::get('/en/cv', CvController::class)->name('cv.en')->middleware('locale:en');
