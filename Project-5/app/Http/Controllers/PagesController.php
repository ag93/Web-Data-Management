<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function skills(){
        return view('pages.skills');
    }

    public function portfolio(){
        return view('pages.portfolio');
    }

    public function experience(){
        return view('pages.experience');
    }

    public function prices(){
        return view('pages.prices');
    }

    public function contact(){
        return view('pages.contact');
    }
}
