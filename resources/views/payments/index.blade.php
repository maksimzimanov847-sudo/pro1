@extends('layouts.app')
@section('title', 'Платежи')

@section('content')
    <div class="container mt-5">
        <div class="header mb-4">
            <h2 class="mb-2">Список платежей</h2>
            <a href="{{ route('payments.create') }}" class="btn btn-primary">Создать новый</a>
        </div>

        <div class="table-container">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr style="background-color: #f61500; color: white;">
                    <th scope="col">ID</th>
                    <th scope="col">Заказ</th>
                    <th scope="col">Статус платежа</th>
                    <th scope="col">Метод платежа</th>
                    <th scope="col">Действия</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>
                            @if ($payment->order)
                                {{ $payment->order->service->title }}
                            @else
                                Нет данных
                            @endif
                        </td>
                        <td>{{ $payment->status->label() }}</td>
                        <td>{{ $payment->method->label() }}</td>
                        <td class="actions">
                            <div class="btn-group" role="group">
                                <a href="{{ route('payments.show', $payment) }}" class="btn btn-info">Показать</a>
                                <a href="{{ route('payments.edit', $payment) }}" class="btn btn-warning">Изменить</a>
                                <form action="{{ route('payments.destroy', $payment) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Вы уверены?')">
                                        Удалить
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Нет данных</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
