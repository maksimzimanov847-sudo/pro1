@extends('layouts.shop')

@section('title', 'Каталог товаров — Зиманушка')

@section('content')

    <div class="bg-gradient-to-t from-blue-600 to-blue-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Добро пожаловать в магазин!
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8">
                    Качественные товары и услуги по доступным ценам!
                </p>
                <div class="max-w-md mx-auto">
                    <div class="relative">
                        <input
                            type="text"
                            placeholder="Поиск товаров…"
                            class="w-full px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300"
                        >
                        <button
                            class="absolute right-2 top-2 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition duration-300"
                        ></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
