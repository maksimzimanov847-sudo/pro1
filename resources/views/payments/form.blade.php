@php
    $payment = $payment ?? null;
@endphp

<div class="form-container">
    <div>
        <label for="order_id">Выберите заказ: </label>
        <select name="order_id" id="order_id" required>
            @foreach($orders as $key => $value)
                <option value="{{ $key }}" @selected(old('order_id', $payment?->order_id) == $key)> {{ $value->service->id }}</option>
            @endforeach
        </select>

        <select name="status" id="status" required>
            @foreach($statuses as $key => $value)
                <option value="{{ $key }}" @selected(old('status->value', $payment?->status->value) == $key)> {{ $value }}</option>
            @endforeach
        </select>


        <select name="method" id="method" required>
            @foreach($methods as $key => $value)
                <option value="{{ $key }}" @selected(old('method->value', $payment?->method->value) == $key)> {{ $value }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <button type="submit">Сохранить данные</button>
    </div>
</div>
