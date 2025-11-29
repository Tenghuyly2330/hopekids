<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::get();
        $banner_image = Banner::where("id", "=", 6)->first();

        return view('frontend.article', compact('article', 'banner_image'));
    }

    public function showArticle($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $banner_image = Banner::where("id", "=", 6)->first();


        return view('frontend.articleShow', compact('article', 'banner_image'));
    }
}
