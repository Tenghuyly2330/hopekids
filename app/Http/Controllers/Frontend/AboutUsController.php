<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use App\Models\Banner;
use App\Models\Branch;
use App\Models\Program;
use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Social;

class AboutUsController extends Controller
{
    public function index(){
        $certificates = Certificate::get();
        $banner_image = Banner::where("id", "=", 2)->first();
        $programs = Program::get();

        $missions = About::where("id", "=" , 1)->first();
        $visions = About::where("id", "=" , 2)->first();
        $goals = About::where("id", "=" , 3)->first();
        $core = About::where("id", "=" , 4)->first();
        $branches = Branch::get();

        $fb = Social::where("id", "=" , 1)->first();
        $telegram = Social::where("id", "=" , 2)->first();
        $tiktok = Social::where("id", "=" , 3)->first();
        $yt = Social::where("id", "=" , 4)->first();

        return view("frontend.about", compact('certificates', 'banner_image', 'programs', 'missions', 'visions', 'goals', 'core', 'branches', 'fb','telegram','tiktok','yt'));
    }
}
