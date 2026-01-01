<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Archive;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        $query = Archive::with('category', 'user')->latest();

        // Search
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', "%{$search}%");
        }

        // Filter by category
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_published', $request->input('status') === 'published');
        }

        // Filter by featured
        if ($request->filled('featured')) {
            $query->where('is_featured', true);
        }

        $archives = $query->paginate(10);
        $categories = Category::all();

        return view('admin.archives.index',compact('archives','categories'));
    }

    public function edit($archiveId)
    {
        $archive = Archive::findOrFail($archiveId);

        return view('admin.archives.edit', compact('archive'));
    }

    public function create()
    {
        $categories = Category::get();
        return view('admin.archives.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'publication_date' => 'required|date',
            // 'category_id' => 'nullable|exists:categories,id',
            'pdf_file' => 'required|file|mimes:pdf|max:102400', // 100MB
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB
            // 'is_published' => 'boolean',
            // 'is_featured' => 'boolean',
            // 'is_archived' => 'boolean',
        ]);
        // Handle PDF upload
        if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->file('pdf_file');
            $pdfPath = $pdfFile->store('archives/pdfs', 'public');

            $validated['pdf_path'] = $pdfPath;
            $validated['pdf_size'] = $pdfFile->getSize();

        }

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail_path'] = $request->file('thumbnail')->store('archives/thumbnails', 'public');
        }

        // Generate slug
        $validated['slug'] = Str::slug($request->title) . '-' . Str::random(6);

        // Set published_at if publishing
        // if ($request->boolean('is_published')) {
        //     $validated['published_at'] = now();
        // }

        // Handle metadata
        // if ($request->has('metadata')) {
        //     $validated['metadata'] = $request->input('metadata');
        // }

        // Set user who uploaded
        $validated['user_id'] = auth()->id();

        // Create archive
        Archive::create($validated);

        return redirect()->route('admin-archives.index')
            ->with('success', 'Archive uploaded successfully.');
    }

    // Add other methods: edit, update, destroy, togglePublish, toggleFeatured

     public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

    public function update(Request $request,$archiveId)
    {
         $archive = Archive::findOrFail($archiveId);


        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'publication_date' => 'required|date',
            'pdf_file' => 'nullable|file|mimes:pdf|max:102400', // 100MB
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB
            'is_featured' => 'nullable | boolean',
        ]);

        if(isset($validated['is_featured'])){
            if($isF = Archive::where('is_featured', true)->first()){
                if($isF->id != $archive->id){
                    $isF->is_featured = false;
                    $isF->save();
                }

            }
            $validated['is_featured'] = $request->boolean('is_featured');
        }else{
            $validated['is_featured'] = false;
        }

        if ($request->hasFile('pdf_file')) {
            $pdfFile = $request->file('pdf_file');
            $pdfPath = $pdfFile->store('archives/pdfs', 'public');

            $validated['pdf_path'] = $pdfPath;
            $validated['pdf_size'] = $pdfFile->getSize();
        }

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail_path'] = $request->file('thumbnail')->store('archives/thumbnails', 'public');
        }
        // dd($validated['is_featured']);

        $archive->update($validated);
        return redirect()->route('admin-archives.index')
            ->with('success', 'Archive updated successfully.');
    }
}
