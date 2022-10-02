@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Вы успешно вошли!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @can('view', auth()->user())
                    <div class="btn_post_admin">
                        <form action="admin/posts">
                            <button class="btn btn-primary">АдминПанель</button>
                        </form>
                    </div>
                    @endcan
                    <br>
                    <form action="/posts">
                        <button class="btn btn-primary">Посты</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection