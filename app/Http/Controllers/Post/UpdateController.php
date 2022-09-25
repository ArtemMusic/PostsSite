<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use App\Http\Controllers\Post\BaseController;
use App\Http\Resources\Post\PostResource;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $id)
    {
        $data = $request -> validated();
        $post = $this->service->update($data, $id);
        // return new PostResource($post);
        return redirect()->route('post.show', $id -> id);

    }
}
