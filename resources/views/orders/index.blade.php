@extends('layouts.app')

@section('title', 'заказы')

@section('content')
    <div class="container">
        <div class="header">
            <a href="{{ route('orders.create') }}" class="btn btn-primary">создать новый Заказ</a>
        </div>
    </div>

    <div class="table-container">
        <table class="table">
            <thead>
            <tr style="background-color: #f61500;">
                <th>ID</th>
                <th>Пользователь</th>
                <th>Услуга</th>
                <th>Статус заказа</th>
                <th>Общая цена</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->userFullName() }}</td>
                    <td>{{ $order->service?->name}}</td>
                    <td>{{ $order->status->label() }}</td>
                    <td>{{ $order->total }}</td>
                    <td class="actions">
                        <a href="{{ route('orders.show', $order) }}" class="btn btn-info">показать</a>
                        <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning">изменить</a>
                        <form action="{{ route('orders.destroy', $order) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="no-data">нет данных</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
