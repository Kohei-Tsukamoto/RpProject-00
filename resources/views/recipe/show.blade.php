@extends('layouts.layout')


{{-- recipe.blade.phpの@yield('title')に'任意'を埋め込む --}}
@section('title', 'show')

{{-- recipe.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
  <div class="container">
    <div class="row">
      <div class="col">
        <p>レシピ名</p>
        <h2>{{$recipe->recipe_name}}</h2>
        <form action="{{ url( '/schedule_register' )}}" method="POST">
          <input class="input" id="datepicker" type="text" name="schedule">
          <input type="submit" class="btn btn-primary" value="作るリストに登録" id="register">
          <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
          @csrf
        </form>
        <script>
          $('#datepicker').datepicker({
            dateFormat: 'yy年mm月dd日',
            monthNames: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"]
          });
          // (function($, window) {
          //   $(function() {
          //     $('#register').on('click', function(e) {
          //       var date = $('#datepicker').val();
          //       alert(date);
          //     });
          //   });
          // })(jQuery, window);
        </script>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="recipe">
          <img src="{{asset('/storage/img/' . $recipe->recipe_img)}}" alt="{{ $recipe->recipe_img }}" class="img-thumbnail" loading="lazy" alt="img" class="img-fulied">
        </div>
      </div>
      <div class="col-md-8">
        <p>レシピコメント</p>
        <h3>{{ $recipe->recipe_comment }}</h3>
        <img src="{{ asset('storage/img/' . $user->profile_img)}}" alt="profile_img">
        <p>材料</p>
        <p>{{ $recipe->many_people }}人分</p>

        @foreach($ingredients as $ingredient)
        <p>{{ $ingredient->ingredient }} 個数{{ $ingredient->pivot->amount }}コ</p>
        @endforeach
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-4">
        <h2>工程</h2>
      </div>
    </div>
    @foreach($processes as $process)
    <div class="row">
      <p>手順　{{ $process->process_number }}</p>
      <p>{{ $process->process }}</p>
    </div>
    @endforeach
  </div>
</div>
@endsection