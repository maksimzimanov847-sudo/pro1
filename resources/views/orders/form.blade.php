@php
    $order = $order ?? null;
@endphp

<div class="form-group">
    <label for="user_id">Выберите пользователя:</label>
    <select
        name="user_id"
        id="user_id"
        class="form-control"
        required
    >
        @foreach($users as $user)
            <option
                value="{{ $user->id }}"
                {{ old('user_id', $order?->user_id) == $user->id ? 'selected' : '' }}
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
        @foreach($services as $service)
            <option
                value="{{ $service->id }}"
                {{ old('service_id', $order?->service_id) == $service->id ? 'selected' : '' }}
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

@include('components.form_errors')

<div class="form-group">
    <button type="submit" class="btn btn-primary">
        Сохранить
    </button>
</div>
