<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/{vue_capture?}', function () {
    return view('layouts.master');
})->where('vue_capture', '[\/\w\.-]*');

Route::post('/contacts', [ContactsController::class, 'store']);
