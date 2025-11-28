<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Team;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    public function index(){

        $teams = Team::get();
        $messages = Message::first();

        return view("frontend.professsionalteam", compact('teams', 'messages'));
    }
}
