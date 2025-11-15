@extends('layouts.app')
@section('title','Показ пользователя')

@section('content')

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

@endsection
