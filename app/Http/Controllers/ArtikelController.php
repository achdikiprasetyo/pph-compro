<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index()
    {
        $articles = Artikel::all();


        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Artikel::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        // Validasi data formulir
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan data artikel baru ke database
        $article = Artikel::create($validatedData);

        // Proses pengunggahan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('article_images', 'public');
            $article->image = $imagePath;
            $article->save();
        }

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil disimpan.');
    }

    public function edit($id)
    {
        $article = Artikel::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function destroy($id)
    {
        // Cari artikel berdasarkan ID
        $article = Artikel::findOrFail($id);

        // Hapus artikel dari database
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
    }


    public function update(Request $request, $id)
    {
        // Validasi data formulir
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cari artikel berdasarkan ID
        $article = Artikel::findOrFail($id);

        // Update data artikel
        $article->update($validatedData);

        // Proses pengunggahan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('article_images', 'public');
            $article->image = $imagePath;
            $article->save();
        }

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }
}
