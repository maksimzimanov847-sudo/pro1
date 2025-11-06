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
        <label for="name">Название услуги</label>
        <input value="{{ old('name', $service?->name) }}" type="text" id="name" name="name" required>
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

    <!-- Кнопка сохранения данных -->
    <div>
        <button  type="submit" class="btn btn-primary">Сохранить #a</button>
    </div>
</div>

