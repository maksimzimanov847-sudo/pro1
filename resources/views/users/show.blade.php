@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Отзыв</h2>

        <div class="card">
            <div class="card-body">
                <strong>Автор:</strong> {{ $review->user->name }}
                <br>
                <strong>Текст отзыва:</strong>
                <p>{{ $review->text }}</p>
            </div>
        </div>
    </div>
@endsection
