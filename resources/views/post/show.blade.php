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
    <a href="{{route('post.edit', $id)}}">Редактировать</a>
    <br><br>
    <form action="{{route('post.destroy', $id)}}" method="POST">
        @csrf
        @method("delete")
        <button type="submit" class="btn btn-danger" href="{{route('post.destroy', $id->id)}}">Удалить</button>
    </form>
    <a href="{{route('post.index')}}">Назад</a>
@endsection