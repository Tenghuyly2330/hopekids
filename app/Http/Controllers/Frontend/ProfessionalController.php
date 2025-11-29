<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Team;
use App\Models\Banner;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessionalController extends Controller
{
    public function index(){

        $teams = Team::get();
        $messages = Message::first();
        $banner_image = Banner::where("id", "=", 4)->first();

        return view("frontend.professionalteam", compact('teams', 'messages', 'banner_image'));
    }
}
