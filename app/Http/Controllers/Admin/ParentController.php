<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        $parents = Testimonial::get();
        return view('admin.parents.index', compact('parents'));
    }

    public function create()
    {
        return view('admin.parents.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'nullable|string',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
        ]);

        $data = $request->except('_token');


        Testimonial::create($data);

        return redirect()->route('parent.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $parent = Testimonial::findOrFail($id);

        return view('admin.parents.edit', compact('parent'));
    }

    public function update(Request $request, string $id)
    {
        $parent = Testimonial::findOrFail($id);

        $validated = $request->validate([
            'url' => 'nullable|string',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
        ]);

        $data = $request->except('_token', '_method');

        $update = $parent->update($data);

        if ($update) {
            return redirect()->route('parent.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('parent.edit')
                ->with('error', 'Failed to update article.')
                ->withInput();
        }
    }

    public function delete(string $id)
    {
        $parent = Testimonial::findOrFail($id);
        
        $parent->delete();

        return redirect()->route('parent.index')->with('success', 'Deleted successfully.');
    }
}
