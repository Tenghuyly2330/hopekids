<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\Branch;
use App\Models\Social;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurProgramController extends Controller
{
    public function index(){
        $programs = Program::get();
        $banner_image = Banner::where("id", "=", 3)->first();
        $branches = Branch::get();
        $fb = Social::where("id", "=" , 1)->first();
        $telegram = Social::where("id", "=" , 2)->first();
        $tiktok = Social::where("id", "=" , 3)->first();
        $yt = Social::where("id", "=" , 4)->first();
        return view("frontend.ourprogram", compact('programs', 'banner_image', 'branches', 'fb','telegram','tiktok','yt'));
    }
}
