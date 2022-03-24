@extends('layouts.login')

@section('content')
<div class='container'>

   <div class='container2'>
        <h2 class='page-header'>新しく投稿をする</h2>
        {!! Form::open(['url' => 'redirectList']) !!}
        <div class="form-group">
            {!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容']) !!}
        </div>
        {!! Form::close() !!}
    </div>



        <p class="pull-right"><a class="btn btn-success" href="create">投稿する</a></p>
        <h2 class='page-header'>投稿一覧</h2>
        <table class='table table-hover'>
            <tr>
                <th>投稿No</th>
                <th>投稿内容</th>
                <th>投稿日時</th>
            </tr>
            <th></th>
            <th></th>

            @foreach ($list as $list)
            <tr>
                <td>{{ $list->user_id }}</td>
                <td>{{ $list->posts }}</td>
                <td>{{ $list->created_at }}</td>
                <td><a class="btn btn-primary" href="/post/{{$list->id}}/update-form">更新</a></td>
                <td><a class="btn btn-danger" href="/post/{{$list->id}}/delete" onclick="return confirm('こちらのつぶやきを削除します。よろしいでしょうか？')">削除</a></td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection
