<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exprience=Career::all();
        return view('admin.carrer.index',compact('exprience'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.carrer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'experience' => 'required',
        'title' => 'required',
        ]);

        $insert=[
            'experience'=>$request->experience,
            'title'=>$request->title
        ];

        Career::create($insert);
        return redirect()->route('carreer.index')->with('success', 'Career created successfully.');

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
        $edit = Career:: where('id',$id)->first();
        return view('admin.carrer.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'experience' => 'required',
        'title' => 'required',
        ]);

        $career = Career::findOrFail($id);

        $career->update([
        'experience' => $request->experience,
        'title' => $request->title,
    ]);

        return redirect()->route('carreer.index')->with('success', 'Career Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          Career::where('id',$id)->delete();
        return redirect()->route('carreer.index')->with('success', 'Carreer Deleted successfully.');
    }
}
