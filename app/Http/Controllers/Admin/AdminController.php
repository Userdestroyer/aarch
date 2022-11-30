<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class AdminController extends Controller
{
    public function index() {

        return view('admin.index.page');
    }

    public function categoryList() {
        $categories = Category::all();
        return view('admin.category.page', ['categories' => $categories]);
    }

    public function categoryAdd() {
        return view('admin.category.add');
    }

    public function postList() {
        $posts = Post::all();
        return view('admin.post.page', ['posts' => $posts]);
    }

    public function postAdd() {

        return view('admin.post.add');
    }
}
