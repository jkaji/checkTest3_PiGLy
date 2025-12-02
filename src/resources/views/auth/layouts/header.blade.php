<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel = "stylesheet" href = "{{ asset('css/sanitize.css') }}" />
    <link rel = "stylesheet" href = "{{ asset('css/header.css') }}" />
    @yield('css')
</head>

<body>
    <header class = "header">
        <p class = "header__logo">PiGLy</p>
        
        <form class = "form" action = "/logout" method = "post">
            @csrf
        <div class = "header__buttons">
            <a class = "goal-btn" href = "/weight_logs/goal_setting">目標体重設定</a>
            <button class = "logout-btn">ログアウト</button>
        </div>
        </form>
    </header>>

    <main>
        @yield('content')
    </main>
</body>
</html>