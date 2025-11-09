@extends('layouts.app')
@section('title','CD')

@section('content')
    @php
        // Установка значения по умолчанию для пользователя
        $user = $user ?? null;
    @endphp

        <!-- Форма для редактирования/создания пользователя -->
    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <div class="form-group">
            <label>Выберите роль:</label>
            <select name="role" id="role" class="form-control" required>
                @foreach($roles as $key => $value)
                    <option value="{{ $key }}" {{ old('role', $user?->role) == $key ? 'selected' : '' }}>
                        {{ $value }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Поля для ввода персональных данных -->
        <div class="form-group">
            <label for="surname">Фамилия</label>
            <input value="{{ old('surname', $user?->surname) }}"
                   type="text"
                   class="form-control"
                   id="surname"
                   name="surname"
                   required>
        </div>

        <div class="form-group">
            <label for="name">Имя</label>
            <input value="{{ old('name', $user?->name) }}"
                   type="text"
                   class="form-control"
                   id="name"
                   name="name"
                   required>
        </div>

        <div class="form-group">
            <label for="patronymic">Отчество</label>
            <input value="{{ old('patronymic', $user?->patronymic) }}"
                   type="text"
                   class="form-control"
                   id="patronymic"
                   name="patronymic"
                   required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ old('email', $user?->email) }}"
                   type="email"
                   class="form-control"
                   id="email"
                   name="email"
                   required>
        </div>

        <!-- Поле для пароля с условной валидацией -->
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password"
                   class="form-control"
                   id="password"
                   name="password"
                {{ $user ? '' : 'required' }}>
        </div>

        <!-- Кнопка отправки формы -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Сохранить
            </button>
        </div>
    </form>
@endsection
