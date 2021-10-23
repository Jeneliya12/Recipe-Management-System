<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
use Session;

class CommentsController extends Controller
{
   
    public function store(Request $request)
    {
        $comment=new Comment; 

        $comment->name=$request->input('name');
        $comment->email=$request->input('email')
        $comment->subject=$request->input('subject');
        $comment->message=$request->input('message');
        $comment->save();
        
        Session::flash('statuscode','success');
        return redirect('/')->with('status', 'Comment Posted Sucessfully');
    }
}
