<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $all_posts = $this->post->withTrashed()->latest()->paginate(10);

        return view('admin.posts.index')->with('all_posts', $all_posts);
    }

    public function hide($id)
    {
        $this->post->destroy($id);
        return back();
    }

    public function unhide($id)
    {
        $this->post->onlyTrashed()->findOrFail($id)->restore();
        return back();
    }
}

// class PostsController extends Controller
// {
//     private $post;
//     private $category;

//     public function __construct(Post $post, Category $category){
//         $this->post = $post;
//         $this->category = $category;
//     }

//     public function index(){
//         $all_posts = $this->post->latest()->orderBy('id', 'desc')->paginate(5);
//         $category = $this->category;

//         return view('admin.posts.index')->with('all_posts', $all_posts)
//                                         ->with('category', $category);
//     }
// }
