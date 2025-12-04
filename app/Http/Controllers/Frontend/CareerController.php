<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\Branch;
use App\Models\Career;
use App\Models\Social;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;

class CareerController extends Controller
{
    public function index()
    {
        $banner_image = Banner::where("id", "=", 5)->first();
        $programs = Program::get();
        $branches = Branch::get();
        $careers = Career::get();

        $fb = Social::where("id", "=", 1)->first();
        $telegram = Social::where("id", "=", 2)->first();
        $tiktok = Social::where("id", "=", 3)->first();
        $yt = Social::where("id", "=", 4)->first();

        if (app()->getLocale() === 'en') {
            SEOTools::setTitle('Career - Hope Kids Special Education School');
        } elseif (app()->getLocale() === 'km') {
            SEOTools::setTitle('ឱកាសការងារ - សាលារៀនអប់រំពិសេស ក្ដីសង្ឃឹមកុមារ');
        }

        SEOTools::setDescription('Explore all');
        SEOTools::opengraph()->setUrl(route('career'));
        SEOTools::setCanonical(route('career'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@HopeKidsSchool');

        return view("frontend.career", compact('banner_image', 'programs', 'branches', 'careers', 'fb', 'telegram', 'tiktok', 'yt'));
    }
}
