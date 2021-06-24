<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\storage;
use Illuminate\support\Facades\DB;
class Databasech extends Controller
{
    //
    public function db(){
        return member::find(2) ->getOccapation;
    }
    public function salespage($req){
        $storage = storage::find($req);
        $mess = "INSERT INTO storages(id,price,products,store)
        VALUE('3','20','//Applications/XAMPP/xamppfiles/htdocs/fashionapp/public/pictures/pexels-monstera-6311579.jpg','5')";
        $pic = DB::insert($mess);
         return view('/salespage', ['storeage' => $storage]) ;   
    }
}
