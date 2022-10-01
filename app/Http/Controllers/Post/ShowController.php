<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTags;
use App\Models\Tag;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $id)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $pt = PostTags::all();
        return view('post.show', compact('id', 'categories', 'tags', 'pt'));
    }
}
