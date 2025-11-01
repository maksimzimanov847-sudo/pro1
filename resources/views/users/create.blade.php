@vite(['resources/css/app.css'])
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание нового пользователя</title>
</head>
<body>
<div>
    <a href="{{ route('users.index') }}">Вернуться к списку пользователей</a>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        @include('users.form')
    </form>
</div>
</body>
</html>
