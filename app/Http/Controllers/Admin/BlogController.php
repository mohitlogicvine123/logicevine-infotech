<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'title' => 'required|string',
        'description' => 'required',
        'image' => 'required|image',
        'imagealt' => 'nullable|string',
        'category' => 'required|string',
        'author' => 'nullable|string',
        'metakey' => 'nullable|string',
        'metatital' => 'nullable|string',
        'metadescription' => 'nullable|string',
      ]);

        $img = null;
          if ($request->hasFile('image') && $request->file('image')->isValid()) {
              $img = $request->file('image')->store('blogs', 'public');
           }

      $insert = [
        'title' => $request->title,
        'description' => $request->description,
        'image' => $img,
        'imagealt' => $request->imagealt,
        'category' => $request->category,
        'author' => $request->author,
        'metakey' => $request->metakey,
        'metatital' => $request->metatital,
        'metadescription' => $request->metadescription,
       ];

        Blog::create($insert);
         return redirect()->route('blog.index')->with('success', 'Blog created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit=Blog::where('id',$id)->first();
        return view('admin.blog.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $request->validate([
        'title' => 'required|string',
        'description' => 'required',
        'image' => 'nullable|image',
        'imagealt' => 'nullable|string',
        'category' => 'required|string',
        'author' => 'nullable|string',
        'metakey' => 'nullable|string',
        'metatital' => 'nullable|string',
        'metadescription' => 'nullable|string',
    ]);


    $blog = Blog::findOrFail($id);

      if ($request->hasFile('image') && $request->file('image')->isValid()) {
        if ($blog->image) {
            Storage::delete('public/' . $blog->image);
        }
        $img = $request->file('image')->store('blogs', 'public');
        $blog->image = $img;
    }

    $blog->update([
        'title' => $request->title,
        'description' => $request->description,
        'imagealt' => $request->imagealt,
        'category' => $request->category,
        'author' => $request->author,
        'metakey' => $request->metakey,
        'metatital' => $request->metatital,
        'metadescription' => $request->metadescription,
    ]);

    return redirect()->route('blog.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::where('id',$id)->delete();
        return redirect()->route('blog.index')->with('success', 'Blog Deleted successfully.');
    }
}
