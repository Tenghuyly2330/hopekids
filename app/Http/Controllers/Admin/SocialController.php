<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        $socials = Social::get();
        return view('admin.socials.index', compact('socials'));
    }

    public function create()
    {
        return view('admin.socials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
        ]);

        $data = $request->except('_token');
        Social::create($data);

        return redirect()->route('social.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $social = Social::findOrFail($id);

        return view('admin.socials.edit', compact('social'));
    }

    public function update(Request $request, string $id)
    {
        $social = Social::findOrFail($id);

        $validated = $request->validate([
            'url' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
        ]);

        $data = $request->except('_token', '_method');
        $update = $social->update($data);

        if ($update) {
            return redirect()->route('social.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('social.edit')
                ->with('error', 'Failed to update social.')
                ->withInput();
        }
    }
}
