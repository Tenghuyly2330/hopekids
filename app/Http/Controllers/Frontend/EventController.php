<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use App\Models\Banner;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::get();
        $banner_image = Banner::where("id", "=", 7)->first();
        $programs = Program::get();

        return view("frontend.event", compact('event', 'banner_image', 'programs'));
    }

    public function showEvent($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $banner_image = Banner::where("id", "=", 7)->first();
        $programs = Program::get();


        return view('frontend.showEvent', compact('event', 'banner_image', 'programs'));
    }
}
