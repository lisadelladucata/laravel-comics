<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::get('/', function () {
    return redirect()->route('comics.index'); // Redirect della homepage alla lista dei fumetti
});