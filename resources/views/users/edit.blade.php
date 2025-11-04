<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновление данных пользователя #{{ $user->id }}</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<div>
    <a href="{{ route('users.index') }}">Назад</a>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('users.form')
    </form>
</div>
</body>
</html>
