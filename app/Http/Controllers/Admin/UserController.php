<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
    {
           $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image'=>'required'

        ]);

            $img = null;
                if ($request->hasFile('image') && $request->file('image')->isValid()) {
                    $img = $request->file('image')->store('users', 'public');
                }

        $insert=[
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$img,
            'password'=>Hash::make($request->password)
        ];


        User::create($insert);
     return redirect()->route('user.index')->with('success', 'Blog created successfully.');

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
        $edit = User::where('id', $id)->first();
        return view('admin.user.edit', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $id,
        // Password is optional
    ]);

    $user = User::findOrFail($id);

      if ($request->hasFile('image') && $request->file('image')->isValid()) {
        if ($user->image) {
            Storage::delete('public/' . $user->image);
        }
        $img = $request->file('image')->store('users', 'public');
        $user->image = $img;
    }

    $update = [
        'name' => $request->name,
        'email' => $request->email,
    ];

    if ($request->filled('password')) {
        $update['password'] = Hash::make($request->password);
    }

    $user->update($update);

    return redirect()->route('user.index')->with('success', 'User updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        user::where('id',$id)->delete();
        return redirect()->route('user.index');
    }
}
