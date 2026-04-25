<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CalendarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calendar/display', [CalendarController::class, 'display'])->name('calendar.display');

Route::get('/calendar/json', [CalendarController::class, 'json'])->name('calendar.json');

Route::post('/bookings/store', function (Request $request) {
    DB::table('booking')->insert([
        'MemberID' => $request->memberid,
        'CourtID' => $request->courtid,
        'BookingDate' => $request->bookingdate,
        'StartTime' => $request->starttime,
        'EndTime' => $request->endtime,
    ]);

    return redirect()->route('calendar.display');
})->name('bookings.store');