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
}




//plan
//AI???
//folder ko sauc par coments.blade.php