<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Artikel::all();
        return view('admin.index', compact('articles'));
    }

    public function destroy($id)
    {
        // Temukan artikel berdasarkan ID
        $article = Artikel::findOrFail($id);

        // Hapus artikel
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
