<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;



class CommentsController extends Controller
{
    //to add the comment for particular post.... post/post->id/comments

public function addcomment(Post $post)

{       //refer to post model also....we r adding a method for comments......

// Comment::create([
// 'post_id' => $post->id,
// 'body' => request('comment')

// 	]);


$post->addComment(request('comment'));

return back();

}


}
