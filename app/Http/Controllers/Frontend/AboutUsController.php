<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index(){
        $certificates = Certificate::get();
        $banner_image = Banner::where("id", "=", 2)->first();

        return view("frontend.about", compact('certificates', 'banner_image'));
    }
}
