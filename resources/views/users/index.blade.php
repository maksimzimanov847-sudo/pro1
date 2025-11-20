@extends('layouts.app')
@section('title','Пользователи')

@section('content')
    <div class="container">
        <div class="header">
            <a href="{{route("users.create")}}" class="btn btn-primary">Добавить</a>
        </div>
    </div>

    <div class="table-container">
        <table class="table">
            <thead>
            <tr>
                <th>номер</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>отчество</th>
                <th>Роль </th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($users as $user)
                <tr>
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
                    <td colspan="6">Нет пользователей в системе</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
