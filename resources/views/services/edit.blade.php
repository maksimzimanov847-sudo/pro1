@extends('layouts.app')
@section('title', 'Редактирование услуги')
@section('content')
    <div>
        <a href="{{ route('services.index') }}">назад</a>
        <form action="{{ route('services.update', $service) }}" method="POST">
            @csrf
            @method('PATCH')
            @include('services.form')
        </form>
    </div>
@endsection
