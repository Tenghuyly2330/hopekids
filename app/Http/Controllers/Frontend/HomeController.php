<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index(){
        $programs = Program::get();
        $banner_image = Banner::where("id", "=", 1)->first();
        return view("frontend.home", compact('programs', 'banner_image'));
    }
}
