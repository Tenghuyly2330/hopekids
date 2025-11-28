<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Service\TelegramService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        return view("frontend.contact");
    }
    public function submit(Request $request)
    {
        // Validate inputs
        $data = $request->validate([
            'fname'    => 'required|string',
            'lname'    => 'required|string',
            'email'    => 'required|email',
            'position' => 'required|string',
            'message'  => 'required|string',
        ]);

        // Build Telegram message
        $text =
            "📝 *New Job Application Contact Form*\n\n" .
            "👤 *First Name:* {$data['fname']}\n" .
            "👤 *Last Name:* {$data['lname']}\n" .
            "📧 *Email:* {$data['email']}\n" .
            "💼 *Position:* {$data['position']}\n" .
            "💬 *Message:* {$data['message']}";

        // Send message to Telegram
        Http::get("https://api.telegram.org/bot" . config('services.telegram.bot_token') . "/sendMessage", [
            'chat_id'    => config('services.telegram.chat_id'),
            'text'       => $text,
            'parse_mode' => 'Markdown',
        ]);

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function contact(Request $request)
    {
        // Validate form
        $data = $request->validate([
            'name'          => 'required|string',
            'phone_number'  => 'required|string',
            'enquiry'       => 'required|string',
            'location'      => 'required|string',
            'message'       => 'required|string',
            'email'         => 'nullable|string',
            'telegram'      => 'nullable|string',
        ]);

        // Build Telegram message
        $text =
            "📩 *New Contact Form Submission*\n\n" .
            "👤 *Name:* {$data['name']}\n" .
            "📞 *Phone:* {$data['phone_number']}\n" .
            "🏢 *Branch:* {$data['location']}\n" .
            "❓ *Enquiry:* {$data['enquiry']}\n" .
            "✉️ *Email:* " . ($data['email'] ?? 'N/A') . "\n" .
            "💬 *Telegram:* " . ($data['telegram'] ?? 'N/A') . "\n" .
            "📝 *Message:* {$data['message']}";

        // Send to Telegram
        Http::get("https://api.telegram.org/bot" . config('services.telegram.bot_token') . "/sendMessage", [
            'chat_id'    => config('services.telegram.chat_id'),
            'text'       => $text,
            'parse_mode' => 'Markdown'
        ]);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
