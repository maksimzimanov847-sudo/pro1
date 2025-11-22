@extends('layouts.app')
@section('title', 'Создание услуги')
@section('content')
    <div>
        @include('components.form_errors')
        <a href="{{ route('services.index') }}">назад</a>
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            @include('services.form')
        </form>
    </div>
@endsection
