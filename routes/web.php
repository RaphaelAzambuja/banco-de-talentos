<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculumController;

Route::resource('curriculum', CurriculumController::class);
