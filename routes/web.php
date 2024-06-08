<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculumController;

Route::get('/', [CurriculumController::class, 'index']);
Route::resource('curriculum', CurriculumController::class);
