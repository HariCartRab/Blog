<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Post;


class PostsController extends Controller
{
    //

public function index()
{

	$posts = Post::orderBy('created_at','desc')->get();
//$posts = Post::all();
return view('posts.index',compact('posts'));

}

/*
public function show($id)
{
	
$post =	Post::find($id);
return view('posts.show',compact('post'));


}

*/
public function show(Post $post)

{






//return $post;
return view('posts.show',compact('post'));

}


public function create()

{


	return view('posts.create');
}


public function store()

{

//dd(request()->all());
	//dd(request(['title','body']))
//create new post using request data
	//save it to db
	//redirect to home...


///Post::create(request(['title','body']));

//$post = new Post;

//  $post->title = request('title');
//  $post->body = request('body');

// $post->save();


//Post::create(request->all());


Post::create(                               //can give like this also...mass assignment...
[
'title' => request('title'),
'body' => request('body'),
'user_id' => auth()->id()


]);




 return redirect('/');

}


}
