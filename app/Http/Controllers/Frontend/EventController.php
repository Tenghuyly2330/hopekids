<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use App\Models\Banner;
use App\Models\Branch;
use App\Models\Social;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::get();
        $banner_image = Banner::where("id", "=", 7)->first();
        $programs = Program::get();
        $branches = Branch::get();
        $fb = Social::where("id", "=", 1)->first();
        $telegram = Social::where("id", "=", 2)->first();
        $tiktok = Social::where("id", "=", 3)->first();
        $yt = Social::where("id", "=", 4)->first();

        // if (app()->getLocale() === 'en') {
        //     SEOTools::setTitle('Events - Hope Kids Special Education School');
        // } elseif (app()->getLocale() === 'km') {
        //     SEOTools::setTitle('ព្រឹត្តិការណ៍ - សាលារៀនអប់រំពិសេស ក្ដីសង្ឃឹមកុមារ');
        // }

        // SEOTools::setDescription('Explore all');
        // SEOTools::opengraph()->setUrl(route('event'));
        // SEOTools::setCanonical(route('event'));
        // SEOTools::opengraph()->addProperty('type', 'website');
        // SEOTools::twitter()->setSite('@HopeKidsSchool');

        return view("frontend.event", compact('event', 'banner_image', 'programs', 'branches', 'fb', 'telegram', 'tiktok', 'yt'));
    }

    public function showEvent($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        $banner_image = Banner::where("id", "=", 7)->first();
        $programs = Program::get();
        $branches = Branch::get();
        $fb = Social::where("id", "=", 1)->first();
        $telegram = Social::where("id", "=", 2)->first();
        $tiktok = Social::where("id", "=", 3)->first();
        $yt = Social::where("id", "=", 4)->first();

        return view('frontend.showEvent', compact('event', 'banner_image', 'programs', 'branches', 'fb', 'telegram', 'tiktok', 'yt'));
    }
}
