@extends('layouts.app')
@section('title', 'Список услуг')

@section('content')
    <div class="container">
        <div class="header">
            <a href="{{ route('services.create') }}" class="btn btn-primary">Создать новую услугу</a>
        </div>
    </div>

    <div class="table-container">
        <table class="table table-striped table-bordered">
            <thead style="background-color: #7a3636; color: #000000;">
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
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->title }}</td>
                    <td>{{ Str::limit($service->description, 50) }}</td> <!-- Ограничение длины текста -->
                    <td>{{ number_format($service->price, 2, ',', ' ') }} ₽</td> <!-- Форматирование цены -->
                    <td>{{ $service->type }}</td>
                    <td class="actions">
                        <div class="btn-group">
                            <a href="{{ route('services.show', $service) }}" class="btn btn-info">Показать</a>
                            <a href="{{ route('services.edit', $service) }}" class="btn btn-warning">Изменить</a>
                            <form action="{{ route('services.destroy', $service) }}" method="POST"
                                  style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"
                                        onclick="return confirm('Вы уверены?')">
                                    Удалить
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Нет данных</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection

