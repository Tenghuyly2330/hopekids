<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use App\Models\Banner;
use App\Models\Branch;
use App\Models\Social;
use App\Models\Program;
use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;

class AboutUsController extends Controller
{
    public function index()
    {
        $certificates = Certificate::get();
        $banner_image = Banner::where("id", "=", 2)->first();
        $programs = Program::get();

        $missions = About::where("id", "=", 1)->first();
        $visions = About::where("id", "=", 2)->first();
        $goals = About::where("id", "=", 3)->first();
        $core = About::where("id", "=", 4)->first();
        $branches = Branch::get();

        $fb = Social::where("id", "=", 1)->first();
        $telegram = Social::where("id", "=", 2)->first();
        $tiktok = Social::where("id", "=", 3)->first();
        $yt = Social::where("id", "=", 4)->first();

        if (app()->getLocale() === 'en') {
            SEOTools::setTitle('About Us - Hope Kids Special Education School');
        } elseif (app()->getLocale() === 'km') {
            SEOTools::setTitle('អំពីយើងខ្ញុំ - សាលារៀនអប់រំពិសេស ក្ដីសង្ឃឹមកុមារ');
        }

        SEOTools::setDescription('Explore all');
        SEOTools::opengraph()->setUrl(route('about'));
        SEOTools::setCanonical(route('about'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@HopeKidsSchool');


        return view("frontend.about", compact('certificates', 'banner_image', 'programs', 'missions', 'visions', 'goals', 'core', 'branches', 'fb', 'telegram', 'tiktok', 'yt'));
    }
}
