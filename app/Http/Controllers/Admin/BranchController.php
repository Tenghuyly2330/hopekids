<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BranchController extends Controller
{
    public function index()
    {
        $branchs = Branch::get();
        return view('admin.branches.index', compact('branchs'));
    }

    public function create()
    {
        return view('admin.branches.create');
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
            $data['image'] = $request->file('image')->store('branches', 'custom');
        }

        Branch::create($data);

        return redirect()->route('branch.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $branch = Branch::findOrFail($id);

        return view('admin.branches.edit', compact('branch'));
    }

    public function update(Request $request, string $id)
    {
        $branch = Branch::findOrFail($id);

        $validated = $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_km' => 'nullable|string|max:255',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image', '_method');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('branches', 'custom');

            if ($branch->image && Storage::disk('custom')->exists($branch->image)) {
                Storage::disk('custom')->delete($branch->image);
            }
        }

        $update = $branch->update($data);

        if ($update) {
            return redirect()->route('branch.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('branch.edit')
                ->with('error', 'Failed to update article.')
                ->withInput();
        }
    }

    public function delete(string $id)
    {
        $branch = Branch::findOrFail($id);

        // Delete the image from storage if exists
        if ($branch->image && Storage::disk('custom')->exists($branch->image)) {
            Storage::disk('custom')->delete($branch->image);
        }

        // Delete the branch record from database
        $branch->delete();

        return redirect()->route('branch.index')->with('success', 'Deleted successfully.');
    }
}
