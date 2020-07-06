@extends('layouts.layout')
@section('title', 'schedule')
@section('content')

<div class="container">
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>作る日</th>
          <th>レシピ名</th>
          <th>削除</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">hogehoge:スケジュールの変数</th>
          <td>hogehogeカレー</td>
          <td><a>取り消し</a></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>食材名</th>
          <th>数量</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">ex にんじん</th>
          <td>21本</td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <th scope="row">ex ゴボウ</th>
          <td>５本</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


@endsection