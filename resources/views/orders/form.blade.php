@extends('layouts.app')

@section('title', 'Создание/редактирование заказа')

@section('content')
    @php
        $order = $order ?? null;
    @endphp

    <form action="{{ route('orders.store') }}" method="POST" class="form-container">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="user_id">Выберите пользователя:</label>
            <select
                name="user_id"
                id="user_id"
                class="form-control"
                required
            >
                @foreach($users as $key => $user)
                    <option
                        value="{{ $key }}"
                        {{ old('user_id', $order?->user_id) == $key ? 'selected' : '' }}
                    >
                        {{ $user->userFullName() }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="service_id">Выберите услугу:</label>
            <select
                name="service_id"
                id="service_id"
                class="form-control"
                required
            >
                @foreach($services as $key => $service)
                    <option
                        value="{{ $key }}"
                        {{ old('service_id', $order?->service_id) == $key ? 'selected' : '' }}
                    >
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="status">Статус заказа:</label>
            <select
                name="status"
                id="status"
                class="form-control"
                required
            >
                @foreach($statuses as $key => $value)
                    <option
                        value="{{ $key }}"
                        {{ old('status', $order?->status) == $key ? 'selected' : '' }}
                    >
                        {{ $value }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="total">Общая сумма:</label>
            <input
                type="number"
                step="0.01"
                id="total"
                name="total"
                class="form-control"
                value="{{ old('total', $order?->total ?? 0) }}"
                required
            >
        </div>

        <!-- Кнопка сохранения данных -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Сохранить
            </button>
        </div>
    </form>
@endsection
