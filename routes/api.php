<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/projects', [ProjectsController::class, 'index']);

Route::get('/projects/{slug}', [ProjectsController::class, 'show']);
