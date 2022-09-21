@extends('layouts.main')
@section('content')
<form action="{{route('post.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input value="{{old('title')}}" name="title" type="text" class="form-control" id="title" placeholder="Название поста: ">
        @error('title')
        <p class="text-danger">Обязательное поле</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea name="content" class="form-control" id="content" cols="5" rows="5" placeholder="Содержание: ">{{old('content')}}</textarea>
        @error('content')
        <p class="text-danger">Обязательное поле</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="images" class="form-label">Image</label>
        <input value="{{old('images')}}" name="images" type="text" class="form-control" id="images" placeholder="Картинка: ">
        @error('images')
        <p class="text-danger">Обязательное поле</p>
        @enderror
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="status">Статус</label>
        <select class="form-select" id="status" name="status">
            <option value="0" selected >Скрыт</option>
            <option value="1">Опубликован</option>
        </select>
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="categ">Категория</label>
        <select class="form-select" id="categ" name="category_id">
            @foreach($categories as $categ)
            <option 
            {{$categ->id == old('category_id') ? "selected" : ""}}
            value="{{$categ->id}}">{{$categ->title}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>
@endsection()