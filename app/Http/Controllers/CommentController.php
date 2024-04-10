<?php

namespace App\Http\Controllers;

use App\Models\CommentModel;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function insertComment($proj_id, $user_id, Request $request){
        $request->validate([
            'comment' =>'required'
        ]);
        $comment = new CommentModel();
        $comment->comment_text = $request->input('comment');
        $comment->comment_proj_id = $proj_id;
        $comment->comment_user_id = $user_id;
        $comment->save();
        return back();

    }
}
