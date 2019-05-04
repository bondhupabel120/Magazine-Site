<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['news_id','name','email','comment'];

    public static function saveCommentInfo($request){
        $comment = new Comment();
        $comment->news_id    = $request->news_id;
        $comment->name       = $request->name;
        $comment->email      = $request->email;
        $comment->comment    = $request->comment;
        $comment->save();
    }

    public static function deleteCommentInfo($request){
        $comment = Comment::find($request->id);
        $comment->delete();
    }
}
