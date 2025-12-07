@extends('layouts.app')
@section('title', 'Список услуг')

@section('content')
    <div class="container">
        <div class="header mb-3">
            <h2 class="text-primary fw-bold mb-3">Список услуг</h2>
            <a href="{{ route('services.create') }}" class="btn btn-primary bg-primary text-white">Создать новую услугу</a>
        </div>
    </div>

    <div class="table-container bg-white shadow p-4 rounded">
        <table class="table table-striped table-bordered">
            <thead class="bg-primary text-white">
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Описание</th>
                <th>Цена</th>
                <th>Тип</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($services as $service)
                <tr class="hover-bg-light">
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->title }}</td>
                    <td>{{ Str::limit($service->description, 50) }}</td>
                    <td>{{ number_format($service->price, 2, ',', ' ') }} ₽</td>
                    <td>{{ $service->type }}</td>
                    <td class="actions">
                        <div class="btn-group">
                            <a href="{{ route('services.show', $service) }}" class="btn btn-info me-2">Показать</a>
                            <a href="{{ route('services.edit', $service) }}" class="btn btn-warning me-2">Изменить</a>
                            <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Вы уверены?')">
                                    Удалить
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-secondary">Нет данных</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>


@endsection

