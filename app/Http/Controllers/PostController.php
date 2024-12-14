<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Writer;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_blog(){
        return view('add_blog');
    }
    public function show_writer(){
        $writers=Writer::all();
        $users = User::all();
        return view('welcome',compact('writers','users'));
    }
   public function writerpage(){
    $writers=Writer::all();
    return view('writers',compact('writers'));
   
   }
  
 
}
