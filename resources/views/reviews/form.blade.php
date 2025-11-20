@extends('layouts.app')
@section('title', 'Редактирование отзыва')

@section('content')
    @php
        $review = $review ?? null;
    @endphp

    <h2>Редактирование отзыва</h2>
    <div class="form-group">
        <label for="user_id">Выберите пользователя:</label>
        <select
            id="user_id"
            name="user_id"
            class="form-control @error('user_id') is-invalid @enderror"
            required
        >
            <option value="">Выберите пользователя</option>
            @foreach ($users as $user)
                <option
                    value="{{ $user->id }}"
                    {{ old('user_id', $review?->user_id) == $user->id ? 'selected' : '' }}
                >
                    {{ $user->name }} ({{ $user->email }})
                </option>
            @endforeach
        </select>
        @error('user_id')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Выбор услуги -->
    <div class="form-group">
        <label for="service_id">Выберите услугу:</label>
        <select
            id="service_id"
            name="service_id"
            class="form-control @error('service_id') is-invalid @enderror"
            required
        >
            <option value="">Выберите услугу</option>
            @foreach ($services as $service)
                <option
                    value="{{ $service->id }}"
                    {{ old('service_id', $review?->service_id) == $service->id ? 'selected' : '' }}
                >
                    {{ $service->name }}
                </option>
            @endforeach
        </select>
        @error('service_id')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Текст отзыва -->
    <div class="form-group">
        <label for="comment">Текст отзыва:</label>
        <textarea
            id="comment"
            name="comment"
            rows="5"
            class="form-control @error('comment') is-invalid @enderror"
            required
        >{{ old('comment', $review?->comment ?? '') }}</textarea>
        @error('comment')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    <div class="form-group">
        <label for="rating">Рейтинг (1–5):</label>
        <input
            type="number"
            id="rating"
            name="rating"
            min="1"
            max="5"
            value="{{ old('rating', $review?->rating ?? 1) }}"
            class="form-control @error('rating') is-invalid @enderror"
            required
        >
        @error('rating')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div>
        <!-- Кнопка сохранения данных -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Сохранить
            </button>
        </div>
        </form>
@endsection
