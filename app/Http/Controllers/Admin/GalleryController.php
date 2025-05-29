<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image=Gallery::all();
        return view('admin.gallery.index',compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
        'imagealt' => 'required|string|max:255',
        'image' => 'nullable|required',
    ]);
         $img = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
          $img = $request->file('image')->store('galleries', 'public');
        }

        $insert=[
            'imagealt'=>$request->imagealt,
            'image'=>$img
        ];
        Gallery::create($insert);
        return redirect()->route('gallery.index')->with('success', 'Gallery created successfully.');

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
        $edit=Gallery::where('id',$id)->first();
        return view('admin.gallery.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'imagealt' => 'required|string|max:255',
        'image' => 'nullable|',
    ]);

        $gallery = Gallery::findOrFail($id);

          if ($request->hasFile('image') && $request->file('image')->isValid()) {
        if ($gallery->image) {
            Storage::delete('public/' . $gallery->image);
        }
        $img = $request->file('image')->store('blogs', 'public');
        $gallery->image = $img;
    }

    $gallery->update([
        'imagealt'=>$request->imagealt
    ]);
        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gallery::where('id',$id)->delete();
        return redirect()->route('gallery.index')->with('success', 'Gallery Deleted successfully.');
    }
}
