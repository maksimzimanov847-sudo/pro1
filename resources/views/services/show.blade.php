@extends('layouts.app')
@section('title', 'Список услуг')
@section('content')
    <div class="container">
        <div class="header">
            <a href="{{ route('services.index') }}" class="btn btn-primary">Назад</a>
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

@endsection
