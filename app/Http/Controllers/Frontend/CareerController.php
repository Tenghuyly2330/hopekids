<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerController extends Controller
{
    public function index(){
        $banner_image = Banner::where("id", "=", 5)->first();
        $programs = Program::get();
        return view("frontend.career", compact('banner_image', 'programs'));
    }
}
