@extends('auth.layouts.app')

@section('css')
<link rel = "stylesheet" href = "{{ asset('css/login.css') }}" />
@endsection

@section('content')

<div class = "heading">
    <h2>ログイン</h2>
</div>
<div class = "subheading">
    <h3></h3>
</div>

<form class = "content__group" action = "/login" method = "post">
    @csrf
<div class = "group">
    <label for = "email">メールアドレス</label>
    <input type = "email" id = "email" name = "email" placeholder = "メールアドレスを入力" value = "{{ old('email') }}" />
    <div class = "group__error">
        @error('email')
        {{ $message }}
        @enderror
    </div>

    <label for = "password">パスワード</label>
    <input type = "password" id = "password" name = "password" placeholder = "パスワードを入力" value = "{{ old('password') }}" />
    <div class = "group__error">
        @error('password')
        {{ $message }}
        @enderror
    </div>
</div>
</form>

<div class = "content__button">
    <button class = "login-btn" type = "submit">ログイン</button>
    <a class = "mv-register-btn" href = "/register/step1">アカウント作成はこちら</a>
</div>
@endsection