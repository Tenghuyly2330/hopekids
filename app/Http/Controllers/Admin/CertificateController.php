<?php

namespace App\Http\Controllers\Admin;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::get();
        return view('admin.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_km' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image');


        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('certificate', 'custom');
        }

        Certificate::create($data);

        return redirect()->route('certificates.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $certificate = Certificate::findOrFail($id);

        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, string $id)
    {
        $certificate = Certificate::findOrFail($id);

        $validated = $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_km' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image', '_method');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('certificate', 'custom');

            if ($certificate->image && Storage::disk('custom')->exists($certificate->image)) {
                Storage::disk('custom')->delete($certificate->image);
            }
        }

        $update = $certificate->update($data);

        if ($update) {
            return redirect()->route('certificates.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('certificates.edit')
                ->with('error', 'Failed to update article.')
                ->withInput();
        }
    }

    public function delete(string $id)
    {
        $certificate = Certificate::findOrFail($id);

        // Delete the image from storage if exists
        if ($certificate->image && Storage::disk('custom')->exists($certificate->image)) {
            Storage::disk('custom')->delete($certificate->image);
        }

        // Delete the article record from database
        $certificate->delete();

        return redirect()->route('certificates.index')->with('success', 'Deleted successfully.');
    }
}
