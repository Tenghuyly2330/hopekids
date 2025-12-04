<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\Branch;
use App\Models\Social;
use App\Models\Article;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::get();
        $banner_image = Banner::where("id", "=", 6)->first();
        $programs = Program::get();
        $branches = Branch::get();

        $fb = Social::where("id", "=", 1)->first();
        $telegram = Social::where("id", "=", 2)->first();
        $tiktok = Social::where("id", "=", 3)->first();
        $yt = Social::where("id", "=", 4)->first();

        // if (app()->getLocale() === 'en') {
        //     SEOTools::setTitle('Articles - Hope Kids Special Education School');
        // } elseif (app()->getLocale() === 'km') {
        //     SEOTools::setTitle('អត្ថបទ - សាលារៀនអប់រំពិសេស ក្ដីសង្ឃឹមកុមារ');
        // }

        // SEOTools::setDescription('Explore all');
        // SEOTools::opengraph()->setUrl(route('articles'));
        // SEOTools::setCanonical(route('articles'));
        // SEOTools::opengraph()->addProperty('type', 'website');
        // SEOTools::twitter()->setSite('@HopeKidsSchool');

        return view('frontend.article', compact('article', 'banner_image', 'programs', 'branches', 'fb', 'telegram', 'tiktok', 'yt'));
    }

    public function showArticle($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $banner_image = Banner::where("id", "=", 6)->first();
        $programs = Program::get();
        $branches = Branch::get();
        $fb = Social::where("id", "=", 1)->first();
        $telegram = Social::where("id", "=", 2)->first();
        $tiktok = Social::where("id", "=", 3)->first();
        $yt = Social::where("id", "=", 4)->first();

        return view('frontend.articleShow', compact('article', 'banner_image', 'programs', 'branches', 'fb', 'telegram', 'tiktok', 'yt'));
    }
}
