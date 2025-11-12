@extends('layouts.app')
@section('title', 'Редактирование отзыва')
@section('content')
    <h2>Редактирование отзыва</h2>

    <a href="{{ route('reviews.index') }}">← Вернуться к отзывам</a>

    <form action="{{ route('reviews.update', $review) }}" method="POST">
        @csrf
        @method('PATCH')

        <div>
            <label for="title">Заголовок:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $review->title) }}" required>
        </div>

        <div>
            <label for="text">Текст отзыва:</label>
            <textarea id="text" name="text" rows="5" required>{{ old('text', $review->text) }}</textarea>
        </div>

        <div>
            <label for="rating">Рейтинг (1–5):</label>
            <input type="number" id="rating" name="rating" min="1" max="5" value="{{ old('rating', $review->rating) }}" required>
        </div>

        <button type="submit">Сохранить изменения</button>
        <button type="button" onclick="history.back()">Отмена</button>
    </form>
@endsection
