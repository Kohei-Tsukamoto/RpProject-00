@extends('layouts.layout')


@section('title', 'profileの新規作成')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>プロフィールの新規作成</h2>
            <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="name">アカウント名</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="comment">コメント</label>
                    <div class="col-md-10">
                        　　<input type="text" class="form-control" name="comment" value="{{ old('comment') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="img">画像</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="image">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="投稿">
            </form>
        </div>
    </div>
</div>
@endsection