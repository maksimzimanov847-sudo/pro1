@extends('layouts.app')
@section('title','Отзывы')

@section('content')
    <div class="table-container">
        <a href="{{ route('reviews.create') }}" class="btn btn-primary">Создать новую услугу</a>
        <table class="table">
            <thead>
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
                <tr>
                    <td>{{ $review->id }}</td>
                    <td>{{ $review->user->user_id  }}</td>
                    <td>{{ $review->service->service_id }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>{{ $review->comment }}</td>
                    <td class="actions">
                        <!-- Кнопка просмотра -->
                        <a href="{{ route('reviews.show', $review) }}" class="btn btn-info me-2">Показать</a>

                        <!-- Кнопка редактирования -->
                        <a href="{{ route('reviews.edit',$review) }}" class="btn btn-warning me-2">Редактировать</a>

                        <!-- Форма для удаления -->
                        <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="no-data">Нет данных</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
