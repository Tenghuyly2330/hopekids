<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\Branch;
use App\Models\Social;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Service\TelegramService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        $banner_image = Banner::where("id", "=", 8)->first();
        $programs = Program::get();
        $branches = Branch::get();
        $fb = Social::where("id", "=", 1)->first();
        $telegram = Social::where("id", "=", 2)->first();
        $tiktok = Social::where("id", "=", 3)->first();
        $yt = Social::where("id", "=", 4)->first();

        return view("frontend.contact", compact('banner_image', 'programs', 'branches', 'fb', 'telegram', 'tiktok', 'yt'));
    }
    public function submit(Request $request)
    {
        $data = $request->validate([
            'fname'    => 'required|string',
            'lname'    => 'required|string',
            'email'    => 'required|email',
            'position' => 'required|string',
            'cv_file'      => 'nullable|file|max:20000',
            'cover_file'   => 'nullable|file|max:20000',
        ]);

        $botToken = config('services.telegram.bot_token');
        $chatId   = config('services.telegram.chat_id');

        // 1. Send text message
        Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' =>
            "📝 *New Job Application*\n\n" .
                "👤 *First Name:* {$data['fname']}\n" .
                "👤 *Last Name:* {$data['lname']}\n" .
                "📧 *Email:* {$data['email']}\n" .
                "💼 *Position:* {$data['position']}\n",
            'parse_mode' => 'Markdown',
        ]);

        // 2. Send CV file
        if ($request->hasFile('cv_file')) {

            $file = $request->file('cv_file');

            Http::attach(
                'document',
                file_get_contents($file->getRealPath()),
                $file->getClientOriginalName()
            )->post("https://api.telegram.org/bot{$botToken}/sendDocument", [
                'chat_id' => $chatId,
            ]);
        }

        // 3. Send Cover Letter file
        if ($request->hasFile('cover_file')) {

            $file = $request->file('cover_file');

            Http::attach(
                'document',
                file_get_contents($file->getRealPath()),
                $file->getClientOriginalName()
            )->post("https://api.telegram.org/bot{$botToken}/sendDocument", [
                'chat_id' => $chatId,
            ]);
        }

        return back()->with('success', 'Your application has been sent successfully!');
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
