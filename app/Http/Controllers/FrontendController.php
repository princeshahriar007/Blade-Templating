<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function course(){
        return view('courses');
    }

    public function staff(){
        return view('staff');
    }

    public function blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }
}
