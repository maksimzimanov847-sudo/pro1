@php
    $review = $review ?? null;
@endphp
    <div>
        <a href="{{ route('reviews.index') }}">назад</a>
        <form action="{{ route('reviews.update', $review) }}" method="POST">
            @csrf
            @method('PATCH')
            @include('reviews.form')
        </form>
    </div>

