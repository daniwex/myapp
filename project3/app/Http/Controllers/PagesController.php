<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function contact(){
        return view('contact');
    }


    public function services(){
        return view('services');
    }

    public function about(){
        return view('about');
    }

    public function team(){
        return view('team');
    }

    public function blog(){
        return view('blogs');
    }

    public function admin(){
        return view('admin');
    }
}
