<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class pagesController extends Controller
{
    
    public function index(Request $req){
        $req -> validate([
            'username' => 'required | max:10',
            'password' => 'required'
        ]);
       return view('welcome');
    }

    public function checkaccess(){
        return view('noaccess');
    }
    public function saveTodatabase(Request $req){
        if($req->password === $req->password2){
            $member = new member;
            $member->Username = $req->username;
            $member->Password = $req -> password;
            $member ->email = $req -> email;
            $member -> save();
            return redirect('home');
        }
       else{return redirect('signup');}
  
    }
    public function getHome(){
       return view('home');
    }
  
}
