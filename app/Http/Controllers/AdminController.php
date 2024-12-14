<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Commant;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Reply;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function post_page()
    {
        $categories = Category::all();
        return view('auth.writer',compact('categories'));
    }
    public function table()
    {
        return view('table');
    }
    public function post_pages()
    {
        $categories = Category::all();
        return view('auth.add_postadmin',compact('categories'));
    }

    public function add_page(Request $request)
    {
        $writer = Auth::guard('writer')->user(); // Get the currently authenticated writer

        if ($writer) {
            // Extract writer details
            $writer_id = $writer->id; // Writer's Email
            $name = $writer->name; // Writer's Name
            $usertype = $writer->id;
            $categories = Category::all();
         
            $post = new Post([
                'title' =>  $request->title,
                'description' =>  $request->description,
                'post_status' => 'pending',
                'writer_id' => $writer_id, // Save writer's email as user_id in the posts table
                'name' => $name, // Save writer's name in the posts table
                'usertype' => 'writer',
                'category_id' => $request->category_id,
            ]);

            $image = $request->image;
            if ($image) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->image->move('postimage', $imagename);
                $post->image = $imagename;
            }

            $post->save();
        }

        return redirect()->back()->with('message','Post Added Successfully');
    }
    public function add_pages(Request $request)
    {
        $admin = Auth::guard('admin')->user(); // Get the currently authenticated admin
    
        if ($admin) {
            // Extract admin details
            $user_id = $admin->email; // Admin's Email
            $name = $admin->name; // Admin's Name
            $usertype = $admin->id;
    
            // Create a new post associated with the admin
            $post = new Post([
                'title' =>  $request->title,
                'description' =>  $request->description,
                'post_status' => 'active',
                'user_id' => $user_id, // Save admin's email as user_id in the posts table
                'name' => $name, // Save admin's name in the posts table
                'usertype' => 'admin', // Set usertype to 'admin' for admin posts
                'category_id' => $request->category_id
            ]);
    
            $image = $request->image;
            if ($image) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->image->move('postimage', $imagename);
                $post->image = $imagename;
            }
    
            $post->save();
        }
    
        return redirect()->back()->with('message', 'Post Added Successfully');
    }
    
    public function show_post(){
        $post = Post::all();
        return view('auth.admin',compact('post'));
    }
    public function show_postwriter(){
        if (Auth::check())
        {
            $id = Auth::user()->id;
            $post = Post::where('writer_id',$id)->get();
            return view('admin.show_post',compact('post'));
        }
    }
  public function delete_post($id){
    $post = Post::find($id);
    $post->delete();
    return redirect()->back()->with('message','Post Deleted Successfully');
  }

  public function edit_page($id){
    $categories = Category::all();
    $post = Post::find($id); 
    return view('auth.edit_page',compact('post','categories'));
}
  public function show_page($id){
    $post = Post::find($id); 
    return view('auth.show_page',compact('post'));
}
public function update_post(Request $request, $id){
    $data = Post::find($id);

    $data->title = $request->title;
    $data->description = $request->description;

    $image = $request->image;
    if($image){
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('postimage', $imagename);
        $data->image = $imagename;
    }

    $data->save();

    return redirect()->back();
}
public function post()
{
    $post = Post::where('post_status', 'active')
        ->orderBy('created_at', 'desc')
        ->paginate(3); 

    $postsTab1 = Post::where('post_status', 'active')
        ->orderBy('created_at', 'desc')
        ->paginate(3); 

   

    return view('welcome', compact('post', 'postsTab1', ));
}

public function post_details($id){
    
    $comment = Commant::where('post_id', $id)->get();
    // $comment = Commant::all();
    $reply = Reply::all();
    $post = Post::find($id);
    return view('auth.post_details',compact('post','comment','reply'));
    
    }
    public function accept_post($id){
        $data = Post::find($id);
        $data->post_status='active';
        $data->save();
        return redirect()->back();
    }
    public function reject_post($id){
        $data = Post::find($id);
        $data->post_status='rejected';
        $data->save();
        return redirect()->back();
    }
    public function profile($id){
        $post=Post::find($id);
        if (Auth::check())
        {
            $id = Auth::user()->id;
            $post = Post::where('writer_id',$id)->get();
          
        }
        return view('profile',compact('post'));
    }
}