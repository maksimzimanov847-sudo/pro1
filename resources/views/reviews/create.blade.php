@php
    $review = $review ?? null;
@endphp
    <div class="container">
        <div class="header">
            <h1>Создание нового отзыва</h1>
            <a href="{{ route('reviews.index') }}" class="btn btn-back">Назад</a>
        </div>

        <form action="{{ route('reviews.store') }}" method="POST">
            @csrf
            @include('reviews.form')
        </form>
    </div>


