<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::get();
        return view('admin.abouts.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.abouts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_km' => 'nullable|string|max:255',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('abouts', 'custom');
        }

        About::create($data);

        return redirect()->route('about_backend.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $about = About::findOrFail($id);

        return view('admin.abouts.edit', compact('about'));
    }

    public function update(Request $request, string $id)
    {
        $about = About::findOrFail($id);

        $validated = $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_km' => 'nullable|string|max:255',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image', '_method');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('abouts', 'custom');

            if ($about->image && Storage::disk('custom')->exists($about->image)) {
                Storage::disk('custom')->delete($about->image);
            }
        }

        $update = $about->update($data);

        if ($update) {
            return redirect()->route('about_backend.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('about_backend.edit')
                ->with('error', 'Failed to update article.')
                ->withInput();
        }
    }
}
