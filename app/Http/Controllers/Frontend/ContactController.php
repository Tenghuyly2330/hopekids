<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\TelegramService;

class ContactController extends Controller
{
    public function index(){
        return view("frontend.contact");
    }
    public function submit(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'message' => 'required'
        ]);

        // Save to DB if needed
        // Contact::create($data);

        // Send Telegram alert
        $text = "
            <b>New career Form Submission</b>
            👤 First_Name: {$data['fname']}
            👤 Last_name: {$data['lname']}
            📧 Email: {$data['email']}
            💼 Position: {$data['position']}
            💬 Message: {$data['message']}
                    ";
        TelegramService::sendMessage($text);

        return back()->with('success', 'Thank you! We received your message.');
    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'enquiry' => 'required',
            'location' => 'required',
            "email" => 'required',
            "message" => 'required'
        ]);

        // Save to DB if needed
        // Contact::create($data);

        // Send Telegram alert
        $text = "
            <b>New career Form Submission</b>
            👤 Parent_Name: {$data['name']}
            📞 Parent_Number:{$data['phone_number']}
            📧 Email: {$data['email']}
            💼 enquiry: {$data['enquiry']}
            📍location:{$data['location']}
            💬 Message: {$data['message']}
        ";
        TelegramService::sendMessage($text);

        return back()->with('success', 'Thank you! We received your message.');
    }
}
