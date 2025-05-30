<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use App\Models\Gallery;
use App\Models\Industries;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        $blogs = Blog::all();
        return view('index', compact('blogs'));
    }

    public function ind() {
        $inds = Industries::all(); // get all ind in front end
        $blogs = Blog::latest()->take(3)->get();// gat all blog in front end
         return view('index', compact('inds', 'blogs'));
    }

    public function about() {
        return view('about-us');
    }

    public function gallery() {
        $image= Gallery::all(); // get gallery in front end
        return view('gallery',compact('image'));
    }

    public function bloglist() {
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }

    public function blogdeatils() {
        $data= Blog::all(); // get blogdetails page in front end 
        return view('blog-detail',compact('data'));
    }

    public function contact() {
        return view('contact-us');
    }

    public function carrier() {
        $carrer = Career::all();
        return view('carrier', compact('carrer'));
    }

    public function webdevelopment() {
        $blogs = Blog::all();
        return view('web-development', compact('blogs'));
    }

    public function mobileappdevelopment() {
        $blogs = Blog::all();
        return view('mobile-app-development', compact('blogs'));
    }

    public function softwaredevelopment() {
        $blogs = Blog::all();
        return view('software-development', compact('blogs'));
    }

    public function ecommerce() {
        $blogs = Blog::all();
        return view('ecommerce-development', compact('blogs'));
    }
}
