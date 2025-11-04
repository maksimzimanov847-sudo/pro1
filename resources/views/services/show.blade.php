@vite(['resources/css/app.css'])
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пользователь # {{ $service->id }}</title>
</head>
<body>

<div class="container">
    <div class="header">
        <a href="{{ route('services.index') }}" class="btn btn-primary">Создать нового</a>
    </div>
</div>
<div class="table-container">
    <table class="table">
        <thead>
        <tr>
            <th>Заголовок</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Тип</th>
            <th>Аккаунт создан:</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td>{{ $service->title }}</td>
            <td>{{ $service->description }}</td>
            <td>{{ $service->price }}</td>
            <td>{{ $service->type }}</td>
            <td>{{ $service->created_at }}</td>

        </tr>
    </table>
</div>

</body>
</html>

