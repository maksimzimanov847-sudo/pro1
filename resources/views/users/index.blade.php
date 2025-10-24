@vite(['resources/css/app.css'])

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
<div class="container">
    <div class="header">
        <a href="#" class="btn btn-primary">create new</a>
    </div>
</div>

<div class="table-container">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Patronymic</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->patronymic }}</td>
                <td>{{ $user->role->name }}</td>
                <td class="actions">
                    <!-- Кнопка просмотра -->
                    <a href="#" class="btn btn-info me-2">Show</a>

                    <!-- Кнопка редактирования -->
                    <a href="#" class="btn btn-warning me-2">Edit</a>

                    <!-- Форма для удаления -->
                    <form action="#" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Нет пользователей в системе</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
