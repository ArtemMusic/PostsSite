@extends('layouts.main')
@section('content')
<!-- {{$count = 1}} -->
@foreach($posts as $post)
<div class="allposts"><a href="{{route('post.show', $post->id)}}">{{$count++}}. ({{$post->id}}) {{$post->title}}</a></div>
@endforeach
<div>
    {{$posts->withQueryString()->links()}}
</div>
@can('view', auth()->user())
<div class="btn_post_admin">
    <a href="/admin/posts"><- АдминПанель</a>
    <br>
</div>
    <a href="/login"><- Аккаунт</a>
@endcan
@endsection