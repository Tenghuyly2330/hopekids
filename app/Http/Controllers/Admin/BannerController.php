<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::get();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image');


        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'custom');
        }

        Banner::create($data);

        return redirect()->route('banner.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $banner = Banner::findOrFail($id);

        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, string $id)
    {
        $banner = Banner::findOrFail($id);

        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image', '_method');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'custom');

            if ($banner->image && Storage::disk('custom')->exists($banner->image)) {
                Storage::disk('custom')->delete($banner->image);
            }
        }

        $update = $banner->update($data);

        if ($update) {
            return redirect()->route('banner.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('banner.edit')
                ->with('error', 'Failed to update article.')
                ->withInput();
        }
    }
}
