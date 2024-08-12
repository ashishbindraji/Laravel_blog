<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CreateRequest;
use App\Http\Requests\Site\CreateReplyRequest;
use App\Models\Post;
use App\Models\Comment;
use App\Models\CommentReply;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function postComment(CreateRequest $request, $postId)
    {
        if(auth()->check()){
            $post = Post::find($postId);

            if(! $post){
                return back()->WithErrors('Unable to find the post, Please refrash the webPage and try again');
            }
            Comment::create([
                'post_id' => $postId,
                'user_id' => auth()->id(),
                'comment' => $request->comment
            ]);
            $request->session()->flash('alert-success', 'Comment added Successfully');
        }
        return back();
        // return to_route('single-blog', $request->postId);
    }

    public function postCommentReply(CreateReplyRequest $request, $commentId)
    {
        try{
            CommentReply::create([
                'user_id' =>  auth()->id(),
                'comment_id' => $commentId,
                'comment' => $request->comment
            ]);
        }catch(\Exception $ex){
            return back()->withErrors($ex->getMessage());
        }
       
        $request->session()->flash('alert-success', 'Comment Reply added Successfully');

        return back();
    }

    public function deleteCommentReply(Request $request, $id)
    {
        $reply = CommentReply::find($id);

        if(!$reply){
            return back()->withErrors("Unable to locate the reply.");
        }
        
        $reply->delete();

        $request->session()->flash('alert-success', 'Comment Reply deleted Successfully');

        return back();
    }
}
