
@php
    $order = $order ?? null;
@endphp


    <div class="container">
    <div class="header">
        <h1>Обновление данных заказа </h1>
        <a href="{{ route('orders.index') }}" class="btn btn-primary">Назад</a>
    </div>
    <form action="{{ route('orders.update', $order) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('orders.form')

    </form>
</div>
