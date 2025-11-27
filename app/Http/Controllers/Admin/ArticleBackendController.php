<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArticleBackendController extends Controller
{
    public function index()
    {
        $articles = Article::get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
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

        // 🔥 Auto-generate slug
        $data['slug'] = Str::slug($request->title_en);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('article', 'custom');
        }

        Article::create($data);

        return redirect()->route('article_backend.index')->with('success', 'Created successfully.');
    }


    public function edit(string $id)
    {
        $article = Article::findOrFail($id);

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, string $id)
    {
        $article = Article::findOrFail($id);

        $validated = $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_km' => 'nullable|string|max:255',
            'content_en' => 'nullable|string',
            'content_km' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = $request->except('_token', 'image', '_method');

        // 🔥 Auto-update slug
        $data['slug'] = Str::slug($request->title_en);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('article', 'custom');

            if ($article->image && Storage::disk('custom')->exists($article->image)) {
                Storage::disk('custom')->delete($article->image);
            }
        }

        $update = $article->update($data);

        if ($update) {
            return redirect()->route('article_backend.index')->with('success', 'Updated Successfully!');
        } else {
            return redirect()->route('article_backend.edit')
                ->with('error', 'Failed to update article.')
                ->withInput();
        }
    }

    public function delete(string $id)
    {
        $article = Article::findOrFail($id);

        // Delete the image from storage if exists
        if ($article->image && Storage::disk('custom')->exists($article->image)) {
            Storage::disk('custom')->delete($article->image);
        }

        // Delete the article record from database
        $article->delete();

        return redirect()->route('article_backend.index')->with('success', 'Deleted successfully.');
    }
}
