@extends('auth.layouts.app')

@section('css')
<link rel = "stylesheet" href = "{{ asset('css/register__step1.css') }}" />
@endsection

@section('content')

<div class = "heading">
    <h2>新規会員登録</h2>
</div>
<div class = "subheading">
    <h3>STEP1 アカウント情報の登録</h3>
</div>

<form class = "content__group" action = "/register/step1" method = "post">
    @csrf
<div class = "group">
    <label for = "name">お名前</label>
    <input type = "text" id = "name" name = "name" placeholder = "名前を入力" value = "{{ old('name') }}" />
    <div class = "group__error">
        @error('name')
        {{ $message }}
        @enderror
    </div>

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

<div class = "content__button">
    <button class = "next-btn" type = "submit"> 次に進む</button>
    <a class = "mv-login-btn" href = "/login">ログインはこちら</a>
</div>
</form>
@endsection