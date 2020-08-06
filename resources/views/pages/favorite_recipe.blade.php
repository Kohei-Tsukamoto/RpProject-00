@extends('layouts.layout')
@section('title', 'お気に入りリスト')



@section('content')
<div class="container">
  <h2>お気に入りレシピ一覧</h2>
  @foreach($recipes as $recipe)
  <div class="container">
    <div class="row">
      <a href="{{ action('RecipeController@show', ['id' => $recipe->id]) }}">
        <div class="col-4">
          <img src="{{ asset('storage/img/' . $recipe->recipe_img)}}" alt="{{ $recipe->recipe_img }}" class="img-thumbnail" loading="lazy" width="400" height="400">
        </div>
        <div class="col-8">
          <h3>レシピ名：{{ $recipe->recipe_name }}　　</h3>
        </div>
      </a>
    </div>
  </div>
  @endforeach
  @endsection