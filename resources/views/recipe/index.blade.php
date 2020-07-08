@extends('layouts.layout')

@section('title', 'index')

@section('content')
<div class="container">
  @if($recipes->count())
  <table border="1">
    <tr>
      <th>レシピ名</th>
    </tr>
    @foreach($recipes as $recipe)
    <tr>
      <td>
        <a href="{{ action('RecipeController@show', ['id' => $recipe->id]) }}">
          <img src="{{asset('storage/img/' . $recipe->recipe_img)}}" alt="recipe_img">
        </a>
      </td>
      <td>
        <a href="{{ action('RecipeController@show', ['id' => $recipe->id]) }}">
          {{ $recipe->recipe_name }}
        </a>
      </td>
    </tr>
    @endforeach
  </table>
  @else
  <p>レシピは見つかりませんでした。</p>
  @endif
</div>
@endsection