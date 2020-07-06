@extends('layouts.layout')
@section('title', 'スケジュール期間設定')

@section('content')
<form action="{{ action('ScheduleController@show_schedule') }}" method="GET">
  <input type="date" name="from" placeholder="from">
  <span class="mx-3 text-grey">~</span>
  <input type="date" name="to" placeholder="to">
  <p><input type="text" name="how_many">人分(分量換算)</p>
  <button type="submit">検索</button>
</form>

@endsection