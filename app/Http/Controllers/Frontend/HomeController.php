<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\Banner;
use App\Models\Branch;
use App\Models\Social;
use App\Models\Program;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Experince;

class HomeController extends Controller
{
    public function index(){
        $programs = Program::get();
        $faqs = Faq::get();
        $banner_image = Banner::where("id", "=", 1)->first();
        $parents = Testimonial::get();
        $branches = Branch::get();
        $experinces = Experince::first();

        $fb = Social::where("id", "=" , 1)->first();
        $telegram = Social::where("id", "=" , 2)->first();
        $tiktok = Social::where("id", "=" , 3)->first();
        $yt = Social::where("id", "=" , 4)->first();

        return view("frontend.home", compact('programs', 'faqs', 'banner_image', 'parents', 'branches', 'fb','telegram','tiktok','yt', 'experinces'));
    }
}
