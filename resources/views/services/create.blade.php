@vite(['resources/css/app.css'])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Создание новой услуги</title>
</head>
<body>
<div>
    <a href="{{ route('services.index') }}">назад</a>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        @include('services.form')
    </form>
</div>
</body>
</html>
