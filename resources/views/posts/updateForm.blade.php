@extends('layouts.login')

@section('content')

 <div class='container'>
        <h2 class='page-header'>投稿内容を変更する</h2>
        {!! Form::open(['url' => 'redirectList2']) !!}
        <div class="form-group">
            {!! Form::hidden('id', $post->id) !!}
            {!! Form::input('text', 'upPost', $post->post, ['required', 'class' => 'form-control']) !!}
        </div>
        <button type="submit" class="btn btn-primary pull-right">更新</button>
        {!! Form::close() !!}
    </div>


@endsection
