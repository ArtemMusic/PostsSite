@extends('layouts.main')
@section('content')
<h1>{{$id->title}}</h1>
<p>{{$id->content}}</p>
<p><b>Images: </b>{{$id->images}}</p>
<!-- {{$my_category = ""}} -->
<!-- @foreach($categories as $categ)
        {{$id->category_id === $categ->id ? $my_category = $categ->title : "Без категории"}}
    @endforeach -->
<p><b>Category: </b>{{$my_category}}</p>
<!-- {{$my_tag = ""}} -->
<!-- {{$title_tag = ""}} -->
<p><b>Tags: </b>
    @foreach($pt as $p_t)
    <!-- {{$id->id == $p_t->post_id ? $my_tag = $p_t->tag_id : ""}} -->
    @foreach($tags as $tag)
    {{$my_tag == $tag->id ? $title_tag = $tag->title . ',' : ""}}
    @endforeach
    @endforeach
</p>

<p><b>Status: </b>
    @if($id->status == 1)
    Опубликован
    @else
    Скрыт
    @endif</p>
<p><b>Deleted: </b>
    @if($id->deleted_at == NULL)
    Существует
    @else
    Удален
    @endif
</p>
@can('view', auth()->user())
<form action="{{route('post.edit', $id)}}">
    <button class="btn btn-secondary">Редактировать</button>
</form>
<br><br>
<form action="{{route('post.destroy', $id)}}" method="POST">
    @csrf
    @method("delete")
    <button type="submit" class="btn btn-danger" href="{{route('post.destroy', $id->id)}}">Удалить</button>
</form>
@endcan
<form action="{{route('post.index')}}">
    <button class="btn btn-primary">Назад</button>
</form>
@can('view', auth()->user())
@endcan
</div>
@endsection