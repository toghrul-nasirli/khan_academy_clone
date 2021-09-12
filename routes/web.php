<?php

use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [PageController::class, 'index'])->name('index');
