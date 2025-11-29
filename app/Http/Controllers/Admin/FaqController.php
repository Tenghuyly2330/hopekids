<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::get();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question_en' => 'nullable|string',
            'question_km' => 'nullable|string',
            'answer_en' => 'nullable|string',
            'answer_km' => 'nullable|string',
        ]);

        $data = $request->except('_token', 'image');

        Faq::create($data);

        return redirect()->route('faq.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $faq = Faq::findOrFail($id);

        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, string $id)
    {
        $faq = Faq::findOrFail($id);

        $validated = $request->validate([
            'question_en' => 'nullable|string',
            'question_km' => 'nullable|string',
            'answer_en' => 'nullable|string',
            'answer_km' => 'nullable|string',
        ]);

        $data = $request->except('_token', '_method');

        $update = $faq->update($data);

        if ($update) {
            return redirect()->route('faq.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('faq.edit')
                ->with('error', 'Failed to update article.')
                ->withInput();
        }
    }

    public function delete(string $id)
    {
        $faq = Faq::findOrFail($id);

        // Delete the article record from database
        $faq->delete();

        return redirect()->route('faq.index')->with('success', 'Deleted successfully.');
    }
}
