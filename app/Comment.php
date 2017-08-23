<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

protected $fillable = ['post_id','body'];

    //belogs to a ppost right....so if i have a comment and want to find which post....\

public function post()

{
	return $this->belongsTo(Post::class);
}

public function user() //to get the user who crtd the comment...
{

return $this->belongsTo(User::class);

}



}
