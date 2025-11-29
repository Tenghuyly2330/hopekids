<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::get();
        $banner_image = Banner::where("id", "=", 7)->first();

        return view("frontend.event", compact('event', 'banner_image'));
    }

    public function showEvent($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $banner_image = Banner::where("id", "=", 7)->first();


        return view('frontend.showEvent', compact('event', 'banner_image'));
    }
}
