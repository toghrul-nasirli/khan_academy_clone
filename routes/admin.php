<?php

use App\Http\Controllers\Admin\WorkController;
use Illuminate\Support\Facades\Route;

Route::resource('works', WorkController::class)->except('create');
