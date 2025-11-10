@extends('layouts.app')
@section('title', 'Форма услуги')

@section('content')
    @php
        $service = $service ?? null;
    @endphp

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="form-group">
            <label>Выберите роль:</label>
            <select name="role" id="role" class="form-control" required>
                @foreach($roles as $key => $value)
                    <option value="{{ $key }}" {{ old('role') == $key || ($service && $service->role == $key) ? 'selected' : '' }}>
                        {{ $value }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="name">Название услуги</label>
            <input
                value="{{ old('name', $service?->name) }}"
                type="text"
                id="name"
                name="name"
                class="form-control"
                required
            >
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea
                name="description"
                id="description"
                class="form-control"
                rows="4"
                required
            >
                {{ old('description', $service?->description) }}
            </textarea>
        </div>

        <div class="form-group">
            <label for="price">Цена</label>
            <input
                value="{{ old('price', $service?->price) }}"
                type="number"
                step="0.01"
                id="price"
                name="price"
                class="form-control"
                required
            >
        </div>

        <div class="form-group">
            <label for="type">Тип</label>
            <input
                value="{{ old('type', $service?->type) }}"
                type="text"
                id="type"
                name="type"
                class="form-control"
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
