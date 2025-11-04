@vite(['resources/css/app.css'])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Обновление данных по услуге #{{ $service->id }}</title>
</head>
<body>
<div>
    <a href="{{ route('services.index') }}">назад</a>
    <form action="{{ route('services.update', $service) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('services.form')
    </form>
</div>
</body>
</html>
