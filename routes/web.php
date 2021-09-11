<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');

Auth::routes();
