<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required|max:255',
            'post_id' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        // $apa = Post::where('slug', $post)->firstOrFail();
        $url = "/reviews";
        // dd($apa);

        Comment::create($validatedData);

        return redirect($url)->with('success', 'New comment has been added!');
    }
}
