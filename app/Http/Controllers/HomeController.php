<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class HomeController extends Controller
{
      public function blog(){
        $blogs= blog::all();
       return view('index', compact('blogs'));
    }
}
