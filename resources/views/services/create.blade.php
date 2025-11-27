@php
    $service = $service ?? null;
@endphp
    <div>
        <h1>Создание услуги </h1>
        <a href="{{ route('services.index') }}">назад</a>
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            @include('services.form')
        </form>
    </div>

