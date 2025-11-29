<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experince;
use Illuminate\Http\Request;

class ExperinceController extends Controller
{
    public function index()
    {
        $experinces = Experince::get();
        return view('admin.experinces.index', compact('experinces'));
    }

    public function create()
    {
        return view('admin.experinces.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'year' => 'nullable|string|max:255',
            'branch' => 'nullable|string|max:255',
            'student' => 'nullable|string|max:255',
            'staff' => 'nullable|string|max:255',
        ]);

        $data = $request->except('_token');

        Experince::create($data);

        return redirect()->route('experince.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $experince = Experince::findOrFail($id);

        return view('admin.experinces.edit', compact('experince'));
    }

    public function update(Request $request, string $id)
    {
        $experince = Experince::findOrFail($id);

        $validated = $request->validate([
            'year' => 'nullable|string|max:255',
            'branch' => 'nullable|string|max:255',
            'student' => 'nullable|string|max:255',
            'staff' => 'nullable|string|max:255',
        ]);

        $data = $request->except('_token', '_method');

        $update = $experince->update($data);

        if ($update) {
            return redirect()->route('experince.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('experince.edit')
                ->with('error', 'Failed to update article.')
                ->withInput();
        }
    }
}
