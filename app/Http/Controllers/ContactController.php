<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index(){
        $contact= Contact::all();
        return view('admin.enq.index',compact('contact'));
    }


    public function create(){
        return view('front-common.form');
    }


    public function store(Request $request){
      $request->validate([
        'name'=>'required',
        'email'=>'required',
        'number'=>'required',
        'company_name'=>'required',
        'message'=>'required'
      ]);

      $insert=[
      'name'=>$request->name,
      'email'=>$request->email,
      'number'=>$request->number,
      'company_name'=>$request->company_name,
      'message'=>$request->message
      ];

      Contact::create($insert);
      return redirect()->route('admin.enq.index');

    }

public function destroy(string $id)
{
    Contact::where('id', $id)->delete();
     return redirect()->route('admin.enq.index');

}
}
