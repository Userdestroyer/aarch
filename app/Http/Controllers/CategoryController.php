<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function page(Category $category) {
        $posts = $category->posts()->get();
        //dd($posts);

        return view('category.page',['category' => $category, 'posts' => $posts]);
    }

    public function add(Request $request) {

        $category = new Category;

        $category->title = $request->title;

        $category->desc = $request->desc;

        $category->save();

        return redirect()->route('admin.category.list');
    }
}
