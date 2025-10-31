
@vite(['resources/css/app.css'])

    <!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пользователь #{{ $user->id }}</title>
</head>
<body>
<div class="container">
    <div class="header">
        <a href="http://localhost/users" class="btn btn-primary">Назад</a>
    </div>
</div>


<div class="table-container">
    <table class="table">
        <thead>
        <tr>
            <th>Фамилия:</th>
            <th>Имя:</th>
            <th>Отчество:</th>
            <th>Роль:</th>
            <th>Email:</th>
            <th>Аккаунт создан:</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->patronymic }}</td>
            <td>{{ $user->role->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
