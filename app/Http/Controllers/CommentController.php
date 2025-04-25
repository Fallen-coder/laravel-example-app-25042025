<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();

        return view("comments.index", ['comments' => $comments]);
    }
    public function create()
    {
        return view("comments.create");
    }
    public function store(Request $request)
    {
        // dd($request);
        comment::create([
            "content" => $request["content"]
        ]);

        return redirect('/comment');
    }
}
