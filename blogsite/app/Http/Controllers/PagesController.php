<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Users_post;
class PagesController extends Controller
{
    public function posts(Request $req){
        $this -> validate($req,[
            'tarea'=> 'required',
            'title' => 'required',
            'image' => 'required'
        ]);
        $imageName = time().'.'.$req->image->extension();  
     
        $req->image->move(public_path('images'), $imageName);
  
        /* Store $imageName name in DATABASE from HERE */

            // ->with('success','You have successfully upload image.')
            // ->with('image',$imageName); 
        DB::insert('insert into users_posts (author, title, body,images) values (?, ?, ?,?)', [$req->author, $req->title,$req->tarea,$imageName]);
        return redirect('publish/myposts')  ;
     

        
    }
    public function myposts(Request $req){

      $post =  DB::table('users_posts')
      ->orderBy('created_at','desc')
      ->where('author',auth::user()->name)
      ->get();
    
    //   if (Gate::any(['update-post', 'delete-post'], $post)) {
    //     // The user can update or delete the post...
    // }
       return view('myposts',['pos'=>$post]);
    }
    public function showEntries(){

        $post =  DB::table('users_posts')->paginate(12);
        // ->orderBy('created_at','desc')
         return view('/dashboard',['pos'=>$post]);
      }
      public function updateordelete(){
            $var = 24;
            $message = 'o';
            $post =  DB::table('users_posts')
         
            // ->orderBy('created_at','desc')
            ->where('author',auth::user()->name)
            ->get();
                return view('/update',['pos'=>$post,'message'=>$message]);
             ;
               
            
      }
      public function Deletepost($id){
                $data = Users_post::find($id);
            if ($data != null) {
                $data->delete();
                return redirect('publish/updateposts')->with(['message'=> 'Successfully deleted!!']);
            }

            return redirect('publish/updateposts')->with(['message'=> 'Wrong ID!!']);
        } 

      }


    