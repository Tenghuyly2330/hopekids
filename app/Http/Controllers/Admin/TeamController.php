<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::get();
        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
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
            $data['image'] = $request->file('image')->store('teams', 'custom');
        }

        Team::create($data);

        return redirect()->route('team.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $team = Team::findOrFail($id);

        return view('admin.teams.edit', compact('team'));
    }

    public function update(Request $request, string $id)
    {
        $team = Team::findOrFail($id);

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
            $data['image'] = $request->file('image')->store('teams', 'custom');

            if ($team->image && Storage::disk('custom')->exists($team->image)) {
                Storage::disk('custom')->delete($team->image);
            }
        }

        $update = $team->update($data);

        if ($update) {
            return redirect()->route('team.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('team.edit')
                ->with('error', 'Failed to update article.')
                ->withInput();
        }
    }

    public function delete(string $id)
    {
        $team = Team::findOrFail($id);

        // Delete the image from storage if exists
        if ($team->image && Storage::disk('custom')->exists($team->image)) {
            Storage::disk('custom')->delete($team->image);
        }

        // Delete the article record from database
        $team->delete();

        return redirect()->route('team.index')->with('success', 'Deleted successfully.');
    }
}
