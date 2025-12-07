@extends('layouts.app')
@section('title','Пользователи')

@section('content')
    <div class="container">
        <div class="header mb-3">
            <h2 class="text-primary fw-bold mb-3">Список пользователей</h2>
            <a href="{{route("users.create")}}" class="text-white hover:text-blue-300 px-3 py-2 rounded">Добавить</a>
        </div>
    </div>

    <div class="table-container bg-white shadow p-4 rounded">
        <table class="table table-striped">
            <thead class="bg-primary text-white">
            <tr>
                <th class="text-white">номер</th>
                <th class="text-white">Имя</th>
                <th class="text-white">Фамилия</th>
                <th class="text-white">отчество</th>
                <th class="text-white">Роль </th>
                <th class="text-white">Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($users as $user)
                <tr class="hover-bg-light">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->patronymic }}</td>
                    <td>{{ $user->role->label() }}</td>
                    <td class="actions">
                        <!-- Кнопка просмотра -->
                        <a href="{{route("users.show",$user)}}" class="btn btn-info me-2">Показать</a>

                        <!-- Кнопка редактирования -->
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning me-2">
                            Редактировать
                        </a>

                        <!-- Форма для удаления -->
                        <form action="{{route("users.destroy",$user)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-secondary">Нет пользователей в системе</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
