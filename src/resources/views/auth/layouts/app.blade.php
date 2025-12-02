<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel = "stylesheet" href = "{{ asset('css/sanitize.css') }}" />
    <link rel = "stylesheet" href = "{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <div class = "content">
        <div class = "title">
            <h1>PiGLy</h1>
        </div>
        <main>
            @yield('content')
        </main>

    </div>

</body>
</html>