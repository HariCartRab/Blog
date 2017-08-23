<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //content for mass assignment.......

protected $fillable = ['title','body'];

//if  u dont want to allow and fileds for this...use protected $guarded = ['user_id'];

public function comments()
{
return $this->hasMany(Comment::class);
//also   return $this->hasMany('App\Comment');


}

public function addComment($body)
{

$this->comments()->create(compact('body'));

// Comment::create([

// 'post_id' => $this->id,
// 'body' => $body



// 	]);

}


public function user()   //get user who crtd the post
{

return $this->belongsTo(User::class);

}




}
