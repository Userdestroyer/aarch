<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function page(Post $post) {

        return view('post.page', ['post' => $post]);
    }

    public function add(Request $request) {

        $post = new Post;

        $post->category_id = $request->category_id;

        $post->title = $request->title;

        $post->content = $request->content;

        $post->save();

        return redirect()->route('admin.post.list');
    }
}
