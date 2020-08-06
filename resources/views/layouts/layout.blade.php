<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    {{-- 後の章で説明します --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
    <title>@yield('title')</title>

    <!-- Scripts -->
    {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- jQuery UI-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Bootstrap-datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.4.3/flatpickr.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- Laravel標準で用意されているCSSを読み込みます --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">




</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light " style="background-color:#eee1d3">
            <!--ブランド名・ロゴを入れる-->
            <a class="navbar-brand" href="/"><img src="{{ asset('/assets/images/logo.png')}}" alt="ロゴ" width="140" height="140"></a>

            <!--レスポンシブの際のハンバーガーメニューのボタン-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--ナビバー内のメニュー-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <h4><a class="nav-link" href="{{ url('recipe_weeklyschedule/show') }}">買い物リスト</a></h3>
                    </li>
                    <li class="nav-item">
                        <h4><a class="nav-link" href="{{ action('AllFavoriteController@all_recipe') }}">お気に入りレシピ</a></h3>
                    </li>
                    <li class="nav-item">
                        <h4><a class="nav-link" href="{{ url('all_recipes') }}">レシピ一覧</a></h3>
                    </li>
                    <li class="nav-item">
                        <h4><a class="nav-link" href="{{ url('admin/recipe/create') }}">レシピを投稿</a></h3>
                    </li>
                </ul>


                <!--ナビバー内の検索フォーム-->
                <form class="form-inline my-2 my-lg-0" action="{{ url('/recipes') }}" method="GET">
                    <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="レシピ名を入力" aria-label="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">検索</button>
                </form>
            </div>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <h5><a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a></h5>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <h5><a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a></h5>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
        <div class="row">
            <div class="col-12 clearfix">
                <div class="float-right">
                    <p>Copyright © 2020 KT.Inc All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>