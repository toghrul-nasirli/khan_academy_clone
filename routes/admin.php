<?php

use App\Http\Controllers\Admin\SupporterController;
use App\Http\Controllers\Admin\WorkController;
use Illuminate\Support\Facades\Route;

Route::resource('works', WorkController::class)->except('create');
Route::resource('supporters', SupporterController::class)->except('create');
