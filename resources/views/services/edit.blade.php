@php
    $review = $review ?? null;
@endphp
    <div>
        <a href="{{ route('services.index') }}">назад</a>
        <form action="{{ route('services.update', $service) }}" method="POST">
            @csrf
            @method('PATCH')
            @include('services.form')
        </form>
    </div>
@include('components.form_errors')
