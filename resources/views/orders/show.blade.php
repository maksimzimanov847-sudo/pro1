@php
    $order = $order ?? null;
@endphp

<div class="show-container">
    <div class="header">
        <h1>Пользователь #{{ $order->id }}</h1>

        <a href="{{ route('users.edit', $order) }}" class="btn btn-warning">Изменить</a>
        <a href="{{ route('users.index') }}" class="btn btn-back">Назад</a>
    </div>
</div>
<div class="table-container">
    <table class="table">
        <thead>
        <tr>
            <th>Пользователь:</th>
            <th>Услуга:</th>
            <th>Статус заказа:</th>
            <th>Общая цена:</th>
            <th>Заказан:</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $order->user->userFullName() }}</td>
            <td>{{ $order->service->name }}</td>
            <td>{{ $order->status }} </td>
            <td>{{ $order->total }}</td>
            <td>{{ $order->created_at }}</td>
        </tr>
        </tbody>
    </table>

</div>

