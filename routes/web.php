<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\CalendarController;

Route::get('/calendar/display', [CalendarController::class, 'display'])->name('calendar.display');
Route::get('/calendar/json', [CalendarController::class, 'json'])->name('calendar.json');