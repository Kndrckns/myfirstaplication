<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('jobs', JobController::class)->except(['show']);
