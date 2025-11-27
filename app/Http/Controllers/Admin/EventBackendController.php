<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EventBackendController extends Controller
{
    public function index()
    {
        $events = Event::get();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'nullable|string',
            'title_km' => 'nullable|string',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $folderName = strtolower(str_replace(' ', '_', $validated['title_en']));
        $imagePaths = [];

        foreach ($request->file('images') as $imageFile) {
            $path = $imageFile->store("events/{$folderName}", 'custom');
            $imagePaths[] = $path;
        }

        Event::create([
            'title_en' => $validated['title_en'],
            'title_km' => $validated['title_km'],
            'content_en' => $validated['content_en'],
            'content_km' => $validated['content_km'],
            'slug' => Str::slug($validated['title_en']),
            'image' => json_encode($imagePaths),
        ]);

        return redirect()->route('event_backend.index')
            ->with('success', 'Created Successfully!');
    }

    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'title_en' => 'nullable|string',
            'title_km' => 'nullable|string',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $event = Event::findOrFail($id);
        $folderName = strtolower(str_replace(' ', '_', $validated["title_en"]));

        $imagePaths = json_decode($event->image, true) ?? [];

        if ($request->filled('removed_images')) {
            $removedImages = json_decode($request->removed_images, true);

            foreach ($removedImages as $removedImage) {
                if (Storage::disk('custom')->exists($removedImage)) {
                    Storage::disk('custom')->delete($removedImage);
                }
                $imagePaths = array_filter($imagePaths, fn($img) => $img !== $removedImage);
            }
        }
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $path = $imageFile->store("events/{$folderName}", 'custom');
                $imagePaths[] = $path;
            }
        }

        $event->update([
            'title_en' => $validated['title_en'],
            'title_km' => $validated['title_km'],
            'content_en' => $validated['content_en'],
            'content_km' => $validated['content_km'],
            'slug' => Str::slug($validated['title_en']),
            'image' => json_encode(array_values($imagePaths))
        ]);

        return redirect()->route('event_backend.index')
            ->with('success', 'Updated successfully!');
    }

    public function delete(string $id)
    {
        $event = Event::findOrFail($id);
        $imagePaths = json_decode($event->image, true) ?? [];

        foreach ($imagePaths as $image) {
            if (Storage::disk('custom')->exists($image)) {
                Storage::disk('custom')->delete($image);
            }
        }
        $event->delete();

        return redirect()->route('event_backend.index')
            ->with('success', 'Deleted successfully!');
    }
}
