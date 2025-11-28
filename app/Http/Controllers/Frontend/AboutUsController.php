<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $certificates = Certificate::get();
        return view("frontend.about", compact('certificates'));
    }
}
