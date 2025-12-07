@extends('layouts.app')
@section('title', 'Заказы')

@section('content')
    <div class="container">
        <div class="header mb-3">
            <h2 class="text-primary fw-bold mb-3">Список заказов</h2>
            <a href="{{ route('orders.create') }}" class="btn btn-primary bg-primary text-white">Создать новый заказ</a>
        </div>
    </div>

    <div class="table-container bg-white shadow p-4 rounded">
        <table class="table table-striped">
            <thead class="bg-primary text-white">
            <tr>
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
                <tr class="hover-bg-light">
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->userFullName() }}</td>
                    <td>{{ $order->service?->name ?? 'Не указана' }}</td>
                    <td>
                        @if($order->status->label() === 'Выполнен')
                            <span class="badge bg-success">{{ $order->status->label() }}</span>
                        @elseif($order->status->label() === 'В обработке')
                            <span class="badge bg-warning">{{ $order->status->label() }}</span>
                        @else
                            <span class="badge bg-danger">{{ $order->status->label() }}</span>
                        @endif
                    </td>
                    <td>{{ number_format($order->total, 2, ',', ' ') }} ₽</td>
                    <td class="actions">
                        <a href="{{ route('orders.show', $order) }}" class="btn btn-info me-2">Показать</a>
                        <a href="{{ route('orders.edit', $order) }}" class="btn btn-warning me-2">Изменить</a>
                        <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Вы уверены?')">
                                Удалить
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-secondary">Нет данных</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>


@endsection
