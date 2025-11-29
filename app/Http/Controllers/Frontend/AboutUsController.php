<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\Program;
use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index(){
        $certificates = Certificate::get();
        $banner_image = Banner::where("id", "=", 2)->first();
        $programs = Program::get();

        return view("frontend.about", compact('certificates', 'banner_image', 'programs'));
    }
}
