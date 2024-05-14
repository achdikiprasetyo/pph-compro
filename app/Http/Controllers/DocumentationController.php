<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documentation;

class DocumentationController extends Controller
{
    //
    public function create()
    {
        return view('admin.documentation.create');
    }

    public function index(Request $request)
    {
        $category = $request->query('category');
    
        // Filter dokumentasi berdasarkan kategori (jika kategori ditentukan)
        if ($category && in_array($category, ['cleaning_service', 'security', 'sdm_training', 'engineering', 'production'])) {
            $documentations = Documentation::where('category', $category)->get();
        } else {
            // Jika kategori tidak ditentukan atau kategori tidak valid, ambil semua dokumentasi
            $documentations = Documentation::all();
        }
    
        return view('admin.documentation.index', compact('documentations'));
    }
    
    public function kegiatan(Request $request)
    {
        $category = $request->query('category');
    
        // Filter dokumentasi berdasarkan kategori (jika kategori ditentukan)
        if ($category && in_array($category, ['cleaning_service', 'security', 'sdm_training', 'engineering', 'production','backoffice'])) {
            $documentations = Documentation::where('category', $category)->get();
        } else {
            // Jika kategori tidak ditentukan atau kategori tidak valid, ambil semua dokumentasi
            $documentations = Documentation::all();
        }
    
        // Kirim variabel kategori ke view
        return view('dokumentasi.kegiatan', compact('documentations', 'category'));
    }

public function edit($id)
{
    $documentation = Documentation::findOrFail($id);
    return view('admin.documentation.edit', compact('documentation'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'category' => 'required|in:cleaning_service,security,sdm_training,engineering,production',
    ]);

    $documentation = Documentation::findOrFail($id);

    // Update fields based on form input
    $documentation->title = $request->title;
    
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('documentation_images', 'public');
        $documentation->image_path = $imagePath;
    }

    $documentation->category = $request->category;
    $documentation->save();

    return redirect()->route('admin.documentation.index')->with('success', 'Documentation updated successfully.');
}

public function destroy($id)
{
    $documentation = Documentation::findOrFail($id);
    $documentation->delete();
    return redirect()->route('admin.documentation.index')->with('success', 'Documentation deleted successfully.');
}


public function showAll()
{
    $documentations = Documentation::all();
    return view('admin.documentation.index', compact('documentations'));
}


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|in:cleaning_service,security,sdm_training,engineering,production,backoffice',
        ]);
    
        $imagePath = $request->file('image')->store('documentation_images', 'public');
    
        // Gunakan $fillable untuk menciptakan instance Documentation
        $documentation = new Documentation();
        $documentation->title = $request->title;
        $documentation->image_path = $imagePath;
        $documentation->category = $request->category;
        $documentation->save();
    
        return redirect()->route('admin.documentation.index')->with('success', 'Foto Dokumentasi telah berhasil di Upload.');
    }
}
