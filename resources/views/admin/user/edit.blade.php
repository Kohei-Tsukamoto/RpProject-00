@extends('layouts.layout')


@section('title', 'profileの編集')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>プロフィール情報の変更</h2>
            <form action="{{ url('admin/user/update' )}}" method="post" enctype="multipart/form-data">
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
                        @if(old('name'))
                        <input type="text" class="form-control" name="name" value="{{ old('name')}}">
                        @else
                        <input type="text" class="form-control" name="name" value="{{ $user->name}}">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="comment">メールアドレス</label>
                    <div class="col-md-10">
                        @if(old('comment'))
                        <input type="text" class="form-control" name="email" value="{{ old('email')}}">
                        @else
                        <input type="text" class="form-control" name="email" value="{{ $user->email}}">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="comment">コメント</label>
                    <div class="col-md-10">
                        @if(old('comment'))
                        <input type="text" class="form-control" name="comment" value="{{ old('comment')}}">
                        @else
                        <input type="text" class="form-control" name="comment" value="{{ $user->comment}}">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="img">画像</label>
                    <div class="col-md-10">
                        <input type="file" class="form-control-file" name="profile_img">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
            </form>
            <p>パスワード変更は<a href="{{ route('show.change_password', ['user' => $user]) }}">こちら</a></p>
        </div>
    </div>
</div>
@endsection