@extends('layouts.layout')
@section('title', 'プロフィール')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3">
      <img src="{{ asset('/storage/img/' . $user->profile_img)}}" alt="{{ $user->profile_img }}" class="img-thumbnail" loading="lazy">
    </div>
    <div class="col-9">
      <div class="card border-light mb-3">
        <div class="card-header">{{$user->name}}</div>
        <div class="card-body">
          <h5 class="card-title">コメント欄</h5>
          <p class="card-text">{{$user->comment}}</p>
        </div>
      </div>
    </div>
    <div class="container">
      @foreach ($recipes as $recipe)
      <a href="{{ action('RecipeController@show', ['id' => $recipe->id]) }}">
        <div class="row">
          <div class="col-1">
            <img src="{{ asset('/storage/img/' . $recipe->recipe_img)}}" alt="recipe_image" class="img-thumbnail">
          </div>
          <div class="col-10 ">
            <div>日付：{{ $recipe->created_at->format('Y/m/d') }}　　　　レシピ名：{{ $recipe->recipe_name }}</div>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection