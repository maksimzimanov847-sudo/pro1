@extends('layouts.app')
@section('title','Форма пользователя')

@section('content')
    @php

        $user = $user ?? null;
    @endphp


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


        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password"
                   class="form-control"
                   id="password"
                   name="password"
                {{ $user ? '' : 'required' }}>
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Сохранить
            </button>
        </div>
    </form>
@endsection
