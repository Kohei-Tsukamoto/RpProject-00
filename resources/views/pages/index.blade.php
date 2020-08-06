@extends('layouts.layout')


{{-- index.blade.phpの@yield('title')に'任意'を埋め込む --}}
@section('title', 'index')

{{-- index.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4  img-hidden">
      <div class="random_recipe">
        <a href="{{ action('RecipeController@show', ['id' => $recipe->id]) }}">
          <img src="{{ asset('storage/img/' . $recipe->recipe_img)}}" alt="{{ $recipe->recipe_img }}" class="img-thumbnail" loading="lazy" alt="recipe-img" class="img-responsive">
          <p>本日のおすすめメニュー　；メニュー名{{ $recipe->recipe_name }}</p>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <a href="{{ action('RecipeController@show', ['id' => $recipe1->id]) }}">
        <img src="{{ asset('storage/img/' . $recipe1->recipe_img)}}" alt="recipe_img" class="img-fulied" 　width="180" height="180">
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ action('RecipeController@show', ['id' => $recipe2->id]) }}">
        <img src="{{ asset('storage/img/' . $recipe2->recipe_img)}}" alt="recipe_img" class="img-fulied" 　width="180" height="180">
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ action('RecipeController@show', ['id' => $recipe3->id]) }}">
        <img src="{{ asset('storage/img/' . $recipe3->recipe_img)}}" alt="recipe_img" class="img-fulied" 　width="180" height="180">
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ action('RecipeController@show', ['id' => $recipe4->id]) }}">
        <img src="{{ asset('storage/img/' . $recipe4->recipe_img)}}" alt="recipe_img" class="img-fulied" 　width="180" height="180">
      </a>
    </div>
  </div>
</div>
@endsection