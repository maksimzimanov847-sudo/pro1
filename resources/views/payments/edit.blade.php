@php
    $payment = $payment ?? null;
@endphp

    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновление данных платежа # {{ $payment->id }}</title>
</head>
<body>
<div class="container mt-5">
    <div class="header">
        <h1 class="mb-4">Обновление данных платежа #{{ $payment->id }}</h1>
        <a href="{{ route('payments.index') }}" class="btn btn-primary">Назад</a>
    </div>

    @include('components.form_errors')

    <form action="{{ route('payments.update', $payment) }}" method="POST" class="mt-4">
        @csrf
        @method('PATCH')

        @include('payments.form', ['mode' => 'edit'])

        <div class="mt-4">
            <button type="submit" class="btn btn-success">Сохранить изменения</button>
        </div>
    </form>
</div>
</body>
</html>
