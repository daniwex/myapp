<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function Loginpage(Request $req){
        if($req =='' || $req -> password != $req ->passwordConfirmation){
            // $message = "Password don't match";
            $message = "wrong";
            return view('register')->with($message,'hwllo');
        }else{
            $member = new member;
            $member -> firstname = $req -> firstname;
            $member -> lastname = $req -> lastname;
            $member -> email = $req -> email;
            $member -> phonenumber = $req -> phone;
            $member -> job = $req -> jobtitle;
            $member -> password = $req -> password;
    
            $member -> save();
           
            return redirect('/');
        }
    }
    public function VerifyU(Request $req){
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            // $req->session()->get('key')

            return view('home');
        }
        else{
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        }
       

    }
}

