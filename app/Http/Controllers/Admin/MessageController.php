<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::get();
        return view('admin.messages.index', compact('messages'));
    }

    public function create()
    {
        return view('admin.messages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_en' => 'nullable|string|max:255',
            'name_km' => 'nullable|string|max:255',
            'position_en' => 'nullable|string|max:255',
            'position_km' => 'nullable|string|max:255',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('messages', 'custom');
        }

        Message::create($data);

        return redirect()->route('message.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $message = Message::findOrFail($id);

        return view('admin.messages.edit', compact('message'));
    }

    public function update(Request $request, string $id)
    {
        $message = Message::findOrFail($id);

        $validated = $request->validate([
            'name_en' => 'nullable|string|max:255',
            'name_km' => 'nullable|string|max:255',
            'position_en' => 'nullable|string|max:255',
            'position_km' => 'nullable|string|max:255',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image', '_method');


        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('messages', 'custom');

            if ($message->image && Storage::disk('custom')->exists($message->image)) {
                Storage::disk('custom')->delete($message->image);
            }
        }

        $update = $message->update($data);

        if ($update) {
            return redirect()->route('message.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('message.edit')
                ->with('error', 'Failed to update article.')
                ->withInput();
        }
    }

    public function delete(string $id)
    {
        $message = Message::findOrFail($id);

        // Delete the image from storage if exists
        if ($message->image && Storage::disk('custom')->exists($message->image)) {
            Storage::disk('custom')->delete($message->image);
        }

        // Delete the article record from database
        $message->delete();

        return redirect()->route('message.index')->with('success', 'Deleted successfully.');
    }
}
