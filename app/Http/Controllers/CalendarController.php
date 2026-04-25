<?php

namespace App\Http\Controllers;

use App\Models\Event;

class CalendarController extends Controller
{
    public function display()
    {
        return view('calendar.display');
    }

    public function json()
    {
        $content = Event::all()->toJson();

        return response($content)->withHeaders([
            'Content-Type' => 'application/json',
            'charset' => 'UTF-8',
        ]);
    }
}