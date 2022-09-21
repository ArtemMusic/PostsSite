@extends('layouts.admin')
@section('content')
<!-- {{$count = 1}} -->
<div class="row">
    <nav class="navbar navbar-expand-lg navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('post.index')}}">Saint-Posts</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('post.create')}}">Создать пост</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
    @foreach($posts as $post)
    <div class="allposts">{{$count++}}. <a href="{{route('post.show', $post->id)}}">({{$post->id}}) {{$post->title}}</a></div>
    @endforeach
    <br><br>
{{$posts->withQueryString()->links()}}
@endsection