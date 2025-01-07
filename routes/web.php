<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/notes');
});

Route::resource('notes', NoteController::class);
