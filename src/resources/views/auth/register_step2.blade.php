@extends('auth.layouts.app')

@section('css')
<link rel = "stylesheet" href = "{{ asset('css/register__step2.css') }}" />
@endsection

@section('content')

<div class = "heading">
    <h2>新規会員登録</h2>
</div>
<div class = "subheading">
    <h3>STEP2 体重データの入力</h3>
</div>

<form class = "content__group" action = "/register/step2" method = "post">
    @csrf
<div class = "group">
    <label for = "current_weight">現在の体重</label>
    <div class = "input-unit-wrapper">
        <input type = "number" id = "current_weight" name = "current_weight" placeholder = "現在の体重を入力" value = "{{ old('current_weight') }}" step = "0.1" />
        <span>kg<span>
    </div>
    <div class = "group__error">
        @error('current_weight')
        {{ $message }}
        @enderror
    </div>

    <label for = "target_weight">目標の体重</label>
    <div class = "input-unit-wrapper">
        <input type = "number" id = "target_weight" name = "target_weight" placeholder = "目標の体重を入力" value = "{{ old('target_weight') }}" step = "0.1" />
        <span>kg<span>
    </div>
    <div class = "group__error">
        @error('target_weight')
        {{ $message }}
        @enderror
    </div>

</div>

<div class = "content__button">
    <button class = "account-btn" type = "submit" >アカウント作成</button>
</div>
</form>
@endsection