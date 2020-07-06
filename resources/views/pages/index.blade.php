@extends('layouts.layout')


{{-- index.blade.phpの@yield('title')に'任意'を埋め込む --}}
@section('title', 'index')

{{-- index.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1>メニュー一覧</h1>
      <h2><a>レシピ一覧</a></h2>
      <h2><a>献立作成</a></h2>
      <h2><a>ランキング</a></h2>
    </div>
    <div class="col-md-4  img-hidden">
      <div class="random_recipe">
        <a href="{{ action('RecipeController@show', ['id' => $recipe->id]) }}">
          <img src="{{ asset('storage/img/' . $recipe->recipe_img)}}" alt="{{ $recipe->recipe_img }}" class="img-thumbnail" loading="lazy" alt="img" class="img-fulied">
          <p>本日のおすすめメニュー　；メニュー名{{ $recipe->recipe_name }}</p>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <a href="{{ action('RecipeController@show', ['id' => $recipe->id]) }}">
        <img src="{{ asset('storage/img/' . $recipe->recipe_img)}}" alt="recipe_img" class="img-fulied">
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ action('RecipeController@show', ['id' => $recipe->id]) }}">
        <img src="{{ asset('storage/img/' . $recipe->recipe_img)}}" alt="recipe_img" class="img-fulied">
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ action('RecipeController@show', ['id' => $recipe->id]) }}">
        <img src="{{ asset('storage/img/' . $recipe->recipe_img)}}" alt="recipe_img" class="img-fulied">
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ action('RecipeController@show', ['id' => $recipe->id]) }}">
        <img src="{{ asset('storage/img/' . $recipe->recipe_img)}}" alt="recipe_img" class="img-fulied">
      </a>
    </div>
  </div>
</div>



@endsection