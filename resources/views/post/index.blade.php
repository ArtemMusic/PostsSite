@extends('layouts.main')
@section('content')
<!-- {{$count = 1}} -->
@foreach($posts as $post)
<div class="allposts"><a href="{{route('post.show', $post->id)}}">{{$count++}}. ({{$post->id}}) {{$post->title}}</a></div>
@endforeach
@can('view', auth()->user())
<br>
<br>
<div class="btn_post_admin">
    <form action="admin/posts">
        <button class="btn btn-primary">АдминПанель</button>
    </form>
</div>
@endcan
<form action="/login">
    <button class="btn btn-primary">Аккаунт</button>
</form>
<div>
    {{$posts->withQueryString()->links()}}
</div>
@endsection