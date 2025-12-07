@extends('layouts.app')
@section('title','Отзывы')

@section('content')
    <div class="container">
        <div class="header mb-3">
            <h2 class="text-primary fw-bold mb-3">Отзывы</h2>
            <a href="{{ route('reviews.create') }}" class="btn btn-primary bg-primary text-white">Создать новый отзыв</a>
        </div>
    </div>

    <div class="table-container bg-white shadow p-4 rounded">
        <table class="table table-striped">
            <thead class="bg-primary text-white">
            <tr>
                <th>ID</th>
                <th>Пользователь</th>
                <th>Услуга</th>
                <th>Рейтинг</th>
                <th>Комментарий</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($reviews as $review)
                <tr class="hover-bg-light">
                    <td>{{ $review->id }}</td>
                    <td>{{ $review->user->name ?? 'Не указан' }}</td> <!-- Улучшили вывод пользователя -->
                    <td>{{ $review->service->title ?? 'Не указана' }}</td> <!-- Улучшили вывод услуги -->
                    <td>
                        @for($i = 1; $i <= 5; $i++)
                            <span class="star @if($i <= $review->rating) text-warning @else text-gray-400 @endif">&#9733;</span>
                        @endfor
                    </td>
                    <td>{{ Str::limit($review->comment, 50) }}</td>
                    <td class="actions">
                        <!-- Кнопка просмотра -->
                        <a href="{{ route('reviews.show', $review) }}" class="btn btn-info me-2">Показать</a>

                        <!-- Кнопка редактирования -->
                        <a href="{{ route('reviews.edit',$review) }}" class="btn btn-warning me-2">Редактировать</a>

                        <!-- Форма для удаления -->
                        <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены?')">
                                Удалить
                            </button>
                        </form>
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
