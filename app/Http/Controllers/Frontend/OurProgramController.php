<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class OurProgramController extends Controller
{
    public function index(){
        $programs = Program::get();
        return view("frontend.ourprogram", compact('programs'));
    }
}
