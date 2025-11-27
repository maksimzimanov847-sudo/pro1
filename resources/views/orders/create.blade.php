@php
    $order = $order ?? null;
@endphp



<div class="container">
    <div class="header">
        <h1>Создание нового заказа</h1>
        <a href="{{ route('orders.index') }}">Назад</a>
    </div>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        @include('orders.form')

    </form>
</div>


