<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industries;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndustriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inds=Industries::all();
        return view('admin.ind.index',compact('inds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ind.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required',
        ]);

          $img = null;
          if ($request->hasFile('image') && $request->file('image')->isValid()) {
              $img = $request->file('image')->store('industries', 'public');
           }

             $insert = [
             'title' => $request->title,
             'image' => $img
               ];

       Industries::create($insert);
         return redirect()->route('industries.index')->with('success', 'Industries created successfully.');


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
        $edit=Industries::where('id',$id)->first();
        return view('admin.ind.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'image' => 'nullable|',
    ]);
        $ind = Industries::findOrFail($id);

    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        if ($ind->image) {
            Storage::delete('public/' . $ind->image);
        }
        $img = $request->file('image')->store('industries', 'public');
        $ind->image = $img;
    }

        $ind->title = $request->title;
        $ind->save();
    return redirect()->route('industries.index')->with('success', 'Industry updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Industries::where('id',$id)->delete();
        return redirect()->route('industries.index')->with('success', 'Industries Deleted successfully.');
    }
}
