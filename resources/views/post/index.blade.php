@extends('layouts.main')
@section('content')
<!-- {{$count = 1}} -->
    @foreach($posts as $post)
        <div class="allposts"><a href="{{route('post.show', $post->id)}}">{{$count++}}. ({{$post->id}}) {{$post->title}}</a></div>
    @endforeach
    <div>
        {{$posts->links()}}
    </div>
@endsection