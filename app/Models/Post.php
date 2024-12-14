<?php

namespace App\Models;

use App\Comment as AppComment;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;


class Post extends Model
{
    use HasFactory;
 
    protected $fillable = ['title', 'description', 'post_status', 'writer_id', 'name', 'image', 'usertype','category_id','body'];

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function index()
{
    $postsTab1 = Post::where('post_status', 'active')
        ->orderBy('created_at', 'desc')
        ->paginate(3); // Paginate 3 posts for tab 1

    $postsTab2 = Post::where('post_status', 'active')
        ->orderBy('created_at', 'asc') // You can change the order for the second tab
        ->paginate(3); // Paginate 3 posts for tab 2

    return view('welcome', compact('postsTab1', 'postsTab2'));
}
public function comment()
{
    return $this->hasMany(Commant::class);
}
}
