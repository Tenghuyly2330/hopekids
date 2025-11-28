<?php

namespace App\Http\Controllers\Admin;

use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::get();
        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.programs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_km' => 'nullable|string|max:255',
            'number_en' => 'nullable|string|max:255',
            'number_km' => 'nullable|string|max:255',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image');

        // 🔥 Auto-generate slug
        $data['slug'] = Str::slug($request->title_en);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('programs', 'custom');
        }

        Program::create($data);

        return redirect()->route('program.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $program = Program::findOrFail($id);

        return view('admin.programs.edit', compact('program'));
    }

    public function update(Request $request, string $id)
    {
        $program = Program::findOrFail($id);

        $validated = $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_km' => 'nullable|string|max:255',
            'number_en' => 'nullable|string|max:255',
            'number_km' => 'nullable|string|max:255',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image', '_method');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('programs', 'custom');

            if ($program->image && Storage::disk('custom')->exists($program->image)) {
                Storage::disk('custom')->delete($program->image);
            }
        }

        $update = $program->update($data);

        if ($update) {
            return redirect()->route('program.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('program.edit')
                ->with('error', 'Failed to update article.')
                ->withInput();
        }
    }

    public function delete(string $id)
    {
        $program = Program::findOrFail($id);

        // Delete the image from storage if exists
        if ($program->image && Storage::disk('custom')->exists($program->image)) {
            Storage::disk('custom')->delete($program->image);
        }

        // Delete the article record from database
        $program->delete();

        return redirect()->route('program.index')->with('success', 'Deleted successfully.');
    }
}
