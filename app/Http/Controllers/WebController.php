<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
  public function index(){
    $data = DB::table('blogs')->get();
      return view('index' ,compact('data'));
    }
    public function about(){
      return view('about-us');
    }
    public function gallery(){
      return view('gallery');
    }
    public function bloglist(){
      $data = DB::table('blogs')->get();
      return view('blog' , compact('data'));
    }
      public function blogdeatils(){
        return view('blog-deatil');
    }
      public function contact(){
        return view('contact-us');
    }
    public function carrier()
    {
        return view('carrier');
    }
    public function webdevelopment(){
        $data = DB::table('blogs')->get();
        return view('web-development',compact('data'));
    }
    public function mobileappdevelopment(){
        $data = DB::table('blogs')->get();
        return view('mobile-app-development',compact('data'));
    }
    public function softwaredevelopment(){
        $data = DB::table('blogs')->get();
        return view('software-development' ,compact('data'));
    }
    public function ecommerce(){
        $data = DB::table('blogs')->get();
        return view('ecommerce-development',compact('data'));
    }
  }
