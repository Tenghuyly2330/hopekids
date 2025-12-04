<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Team;
use App\Models\Banner;
use App\Models\Branch;
use App\Models\Social;
use App\Models\Message;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;

class ProfessionalController extends Controller
{
    public function index()
    {

        $teams = Team::get();
        $messages = Message::get();
        $banner_image = Banner::where("id", "=", 4)->first();
        $programs = Program::get();
        $branches = Branch::get();
        $fb = Social::where("id", "=", 1)->first();
        $telegram = Social::where("id", "=", 2)->first();
        $tiktok = Social::where("id", "=", 3)->first();
        $yt = Social::where("id", "=", 4)->first();

        if (app()->getLocale() === 'en') {
            SEOTools::setTitle('Proessoinal Team - Hope Kids Special Education School');
        } elseif (app()->getLocale() === 'km') {
            SEOTools::setTitle('អ្នកជំនាញ - សាលារៀនអប់រំពិសេស ក្ដីសង្ឃឹមកុមារ');
        }

        SEOTools::setDescription('Explore all');
        SEOTools::opengraph()->setUrl(route('professionalteam'));
        SEOTools::setCanonical(route('professionalteam'));
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@HopeKidsSchool');

        return view("frontend.professionalteam", compact('teams', 'messages', 'banner_image', 'programs', 'branches', 'fb', 'telegram', 'tiktok', 'yt'));
    }
}
