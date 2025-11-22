@extends('layouts.app')
@section('title','Создание пользователя')

@section('content')
    <div>
        <a href="{{ route('users.index') }}">Вернуться к списку пользователей</a>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            @include('users.form')
        </form>
    </div>
    @include('components.form_errors')
        <a href="{{ route('users.index') }}">Вернуться к списку пользователей</a>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            @include('users.form')
        </form>
    </div>
@endsection
