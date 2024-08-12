<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\CommentReply;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Post::where('status', Post::PUBLISHED)->paginate(10);
        $user = auth()->user();
        return view('site.index', compact('blogs', 'user'));
    }

    public function openSingleBlog($id)
    {
        $blog = Post::find($id);

        if(!$blog){
            abort(404);
        }

        $comments = Comment::where('post_id', $blog->id)->paginate(5);
        $latestBlogs = Post::where('id', '!=', $blog->id)->latest()->take(5)->get();
        $tags = $blog->tags;

        return view('site.single', compact('blog', 'comments', 'latestBlogs', 'tags'));
    }
}
