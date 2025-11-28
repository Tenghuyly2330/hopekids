<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $programs = Program::get();
        return view("frontend.home", compact('programs'));
    }
}
