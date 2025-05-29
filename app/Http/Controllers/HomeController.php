<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industries;

class HomeController extends Controller
{
    public function ind(){
        $inds= Industries::all();
        return view('index',compact('inds'));
    }
}
