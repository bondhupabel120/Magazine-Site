<?php

namespace App\Http\Controllers;

use App\Comment;
use App\News;
use Illuminate\Http\Request;
use DB;

class CommentController extends Controller
{
    public function newComment(Request $request){
        Comment::saveCommentInfo($request);

        return redirect('/news-details/'.$request->news_id);
    }

    public function manageComment(){
        return view('admin.comment.manage-comment',[
            'comments'     => DB::table('comments')
                            ->join('news', 'comments.news_id', '=', 'news.id')
                            ->select('comments.*', 'comments.name', 'news.news_title')
                            ->orderBy('comments.id', 'desc')->get()
        ]);
    }

    public function deleteComment(Request $request){
        Comment::deleteCommentInfo($request);
        return redirect('/manage-comment')->with('message','Delete Successfully');
    }

    public function publishedComment($id){
        $comment = Comment::find($id);
        $comment->publication_status = 1;
        $comment->save();

        return redirect('/manage-comment');
    }

    public function unpublishedComment($id){
        $comment = Comment::find($id);
        $comment->publication_status = 0;
        $comment->save();

        return redirect('/manage-comment');
    }
}
