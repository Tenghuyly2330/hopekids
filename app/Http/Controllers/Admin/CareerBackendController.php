<?php

namespace App\Http\Controllers\Admin;

use App\Models\Career;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerBackendController extends Controller
{
    public function index()
    {
        $careers = Career::get();
        return view('admin.careers.index', compact('careers'));
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'position_en' => 'nullable|string|max:255',
            'position_km' => 'nullable|string|max:255',
        ]);

        $data = $request->except('_token');

        // 🔥 Auto-generate slug
        $data['slug'] = Str::slug($request->position_en);

        Career::create($data);

        return redirect()->route('career_backend.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $career = Career::findOrFail($id);

        return view('admin.careers.edit', compact('career'));
    }

    public function update(Request $request, string $id)
    {
        $career = Career::findOrFail($id);

        $validated = $request->validate([
            'position_en' => 'nullable|string|max:255',
            'position_km' => 'nullable|string|max:255',
        ]);

        $data = $request->except('_token', '_method');

        // 🔥 Auto-update slug
        $data['slug'] = Str::slug($request->position_en);

        $update = $career->update($data);

        if ($update) {
            return redirect()->route('career_backend.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('career_backend.edit')
                ->with('error', 'Failed to update career.')
                ->withInput();
        }
    }

    public function delete(string $id)
    {
        $career = Career::findOrFail($id);

        $career->delete();

        return redirect()->route('career_backend.index')->with('success', 'Deleted successfully.');
    }
}
