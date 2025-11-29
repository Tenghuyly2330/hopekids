<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Faq;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index(){
        $programs = Program::get();
        $faqs = Faq::get();
        $banner_image = Banner::where("id", "=", 1)->first();
        $parents = Testimonial::get();

        return view("frontend.home", compact('programs', 'faqs', 'banner_image', 'parents'));
    }
}
