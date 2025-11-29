<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurProgramController extends Controller
{
    public function index(){
        $programs = Program::get();
        $banner_image = Banner::where("id", "=", 3)->first();

        return view("frontend.ourprogram", compact('programs', 'banner_image'));
    }
}
