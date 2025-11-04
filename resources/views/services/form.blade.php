@php

    $service = $service ?? null;

@endphp

<div>
    <div>
        <label>Выберите роль: </label>
        <select name="role" id="role" required>

            @foreach($roles as $key => $value)
                <option value="{{ $key }} @selected(old('role') == $key)">{{ $value }}</option>

            @endforeach
        </select>
    </div>
    <div>
        <label for="title">Название услуги</label>
        <input value="{{ old('title', $service?->title) }}" type="text" id="title" name="title" required>
    </div>

    <div>
        <label for="description">Описание</label>
        <input value="{{ old('description', $service?->description) }}" type="text" id="description" name="description" required>
    </div>

    <div>
        <label for="price">Цена</label>
        <input value="{{ old('price', $service?->price) }}" type="text" id="price" name="price" required>
    </div>

    <div>
        <label for="type">Тип</label>
        <input value="{{ old('type', $service?->type) }}" type="text" id="type" name="type" required>
    </div>

    <div>
        <button type="submit">Сохранить данные</button>
    </div>
</div>

