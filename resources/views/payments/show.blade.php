@vite(['resources/css/app.css'])
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Платеж #{{ $payment->id }}</title>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Платеж #{{ $payment->id }}</h1>
        <a href="{{ route('payments.edit', $payment) }}" class="btn btn-primary">Изменить</a>
        <a href="{{ route('payments.index') }}" class="btn btn-primary">Назад</a>
    </div>
</div>

<div class="table-container">
    <table class="table">
        <thead>
        <tr>
            <th>Заказ:</th>
            <th>Статус заказа:</th>
            <th>Метод платежа:</th>
            <th>Оплачен:</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $payment->order->service->title }}</td>
            <td>{{ $payment->status }}</td>
            <td>{{ $payment->method }} </td>
            <td>{{ $payment->created_at }}</td>
        </tr>
        </tbody>
    </table>

</div>

