<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Post $id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('id', 'categories', 'tags'));
    }
}
