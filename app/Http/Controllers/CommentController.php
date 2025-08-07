<?php

namespace App\Http\Controllers;


use App\Models\Idea;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Idea $idea){
        // $comment = new Comment;
        // $comment->idea_id = $idea->id;
        // $comment->comment = request()->get("comment");
        // $comment->user_id=auth()->id();
        // $comment->save();
        if(request()->get('comment') ==''){
            return redirect()->route("ideas.show", $idea->id)->with("failed","Comment cannot be empty");
        }
         $validated=request()->validate([ 'comment'=> 'required|min:1|max:200' ]);

        $validated['user_id']=auth()->id();
        $validated['idea_id']=$idea->id;

        Comment::create( $validated );


        return redirect()->route("ideas.show", $idea->id)->with("success","Comment Added");
    }
}
