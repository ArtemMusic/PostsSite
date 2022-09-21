<?php

namespace App\Http\Service\Post;

use App\Models\Post;

class Service
{
    public function store($data){
        $post = Post::create($data);
        return $post;
    }

    public function update($data, $post){
        $post -> update($data);
    } 
    
}
