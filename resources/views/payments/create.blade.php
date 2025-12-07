@vite(['resources/css/app.css'])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание нового заказа</title>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Создание нового платежа</h1>
        <a href="{{ route('payments.index') }}" class="btn btn-primary">Назад</a>

    </div>
    @include('components.form_errors')
    <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        @include('payments.form')

    </form>
</div>
</body>
</html>

