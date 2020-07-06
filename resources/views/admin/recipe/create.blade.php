@extends('layouts.layout')

@section('title', 'レシピの新規作成')

@section('content')
<form action="{{ url('admin/recipe/create') }}" method="post" enctype="multipart/form-data">
    @if (count($errors) > 0)
    <ul>
        @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
        @endforeach
    </ul>
    @endif
    <div class="container">
        <div class="container">
            <div class="form-group row">
                <label class="" for="recipe_name">料理名</label>
                <input type="text" class="form-control" name="recipe_name">
            </div>
        </div>
        <div class="container">
            <div class="container">
                <div class="form-group row">
                    <div　class="col-4">
                        <label class="" for="img">
                            レシピ画像
                        </label>
                        <input type="file" class="form-control-file" name="recipe_img">
                    </div>
                    <div class="col8">
                        <label class="col-8" for="comment">コメント</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="recipe_comment">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="form-group row">
                <div class="col">
                    <label for="many_people">□人分</label>
                    <select name="many_people" id="many_people" class="form-control">
                        <option value="1">１</option>
                        <option value="2">２</option>
                        <option value="3">３</option>
                        <option value="4">４</option>
                    </select>
                    <span>人前</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="form-group">
                <div>
                    <label for="ingredient">材料:</label>
                    <select id="ingredient" name="ingredient[]" class="form-control">
                        　　<option disabled selected value>選択してください</option>
                        @foreach($data as $d)
                        <option value="{{ $d->ingredient }}">{{ $d->ingredient }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="amount">数量</label>
                    <input type="text" class="form-control" name="amount[]" 　maxlength='5'>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="ingredient">材料:</label>
                    <select id="ingredient" name="ingredient[]" class="form-control">
                        　　<option disabled selected value>選択してください</option>
                        @foreach($data as $d)
                        <option value="{{ $d->ingredient }}">{{ $d->ingredient }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="amount">数量</label>
                    <input type="text" class="form-control" name="amount[]" 　maxlength='5'>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="ingredient">材料:</label>
                    <select id="ingredient" name="ingredient[]" class="form-control">
                        　　<option disabled selected value>選択してください</option>
                        @foreach($data as $d)
                        <option value="{{ $d->ingredient }}">{{ $d->ingredient }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="amount">数量</label>
                    <input type="text" class="form-control" name="amount[]" 　maxlength='5'>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="ingredient">材料:</label>
                    <select id="ingredient" name="ingredient[]" class="form-control">
                        　　<option disabled selected value>選択してください</option>
                        @foreach($data as $d)
                        <option value="{{ $d->ingredient }}">{{ $d->ingredient }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="amount">数量</label>
                    <input type="text" class="form-control" name="amount[]" 　maxlength='5'>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="ingredient">材料:</label>
                    <select id="ingredient" name="ingredient[]" class="form-control">
                        　　<option disabled selected value>選択してください</option>
                        @foreach($data as $d)
                        <option value="{{ $d->ingredient }}">{{ $d->ingredient }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="amount">数量</label>
                    <input type="text" class="form-control" name="amount[]" 　maxlength='5'>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="ingredient">材料:</label>
                    <select id="ingredient" name="ingredient[]" class="form-control">
                        　　<option disabled selected value>選択してください</option>
                        @foreach($data as $d)
                        <option value="{{ $d->ingredient }}">{{ $d->ingredient }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="amount">数量</label>
                    <input type="text" class="form-control" name="amount[]" 　maxlength='5'>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="ingredient">材料:</label>
                    <select id="ingredient" name="ingredient[]" class="form-control">
                        　　<option disabled selected value>選択してください</option>
                        @foreach($data as $d)
                        <option value="{{ $d->ingredient }}">{{ $d->ingredient }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="amount">数量</label>
                    <input type="text" class="form-control" name="amount[]" 　maxlength='5'>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="ingredient">材料:</label>
                    <select id="ingredient" name="ingredient[]" class="form-control">
                        　　<option disabled selected value>選択してください</option>
                        @foreach($data as $d)
                        <option value="{{ $d->ingredient }}">{{ $d->ingredient }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="amount">数量</label>
                    <input type="text" class="form-control" name="amount[]" 　maxlength='5'>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="ingredient">材料:</label>
                    <select id="ingredient" name="ingredient[]" class="form-control">
                        　　<option disabled selected value>選択してください</option>
                        @foreach($data as $d)
                        <option value="{{ $d->ingredient }}">{{ $d->ingredient }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="amount">数量</label>
                    <input type="text" class="form-control" name="amount[]" 　maxlength='5'>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="ingredient">材料:</label>
                    <select id="ingredient" name="ingredient[]" class="form-control">
                        　　<option disabled selected value>選択してください</option>
                        @foreach($data as $d)
                        <option value="{{ $d->ingredient }}">{{ $d->ingredient }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="amount">数量</label>
                    <input type="text" class="form-control" name="amount[]" 　maxlength='5'>
                </div>
            </div>
        </div>
        <div class="container">
            <h2>工程</h2>
            <div class="form-group row">
                <p>１</p>
                <textarea name="process[]" rows="5"></textarea>
            </div>
            <div class="form-group row">
                <p>２</p>
                <textarea name="process[]" rows="5"></textarea>
            </div>
            <div class="form-group row">
                <p>３</p>
                <textarea name="process[]" rows="5"></textarea>
            </div>
            <div class="form-group row">
                <p>４</p>
                <textarea name="process[]" rows="5"></textarea>
            </div>
            <div class="form-group row">
                <p>５</p>
                <textarea name="process[]" rows="5"></textarea>
            </div>
            <div class="form-group row">
                <p>６</p>
                <textarea name="process[]" rows="5"></textarea>
            </div>
            <div class="form-group row">
                <p>７</p>
                <textarea name="process[]" rows="5"></textarea>
            </div>
            <div class="form-group row">
                <p>８</p>
                <textarea name="process[]" rows="5"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="投稿">
        </div>
        @csrf
</form>
@endsection