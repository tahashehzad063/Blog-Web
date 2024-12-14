<?php

namespace App\Http\Controllers;

use App\Models\Commant;
use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function add_comment(Request $request){
if(Auth::id()){
$comment = new Commant();
$comment->name=Auth::user()->name;
$comment->user_id=Auth::user()->id;
$comment->comment=$request->comment;
// if ($request->has('post_id')) {
    // dd($request->post_id); // Check if 'post_id' is received in the request
// }
$comment->post_id = $request->post_id;
$comment->save();
return redirect()->back();
}
else{

}
return redirect('login');
    }
    public function add_reply(Request $request){
        if(Auth::id()){
$reply=new Reply();
$reply->name=Auth::user()->name;
$reply->user_id=Auth::user()->id;
// dd($request->commant_id);
$reply->commant_id = $request->commant_id;





$reply->reply=$request->reply;

$reply->save();
return redirect()->back();
        }
        else{
        }
        return redirect('login');
    }
}
