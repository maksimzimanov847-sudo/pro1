@extends('layouts.shop')

@section('title', 'Каталог товаров — Зиманушка')

@section('content')


    <div class="bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 tracking-tight">
                    Добро пожаловать в магазин <span class="text-blue-200">Зиманушка</span>!
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-10 max-w-3xl mx-auto leading-relaxed">
                    Качественные товары и услуги по доступным ценам с доставкой по всей России!
                </p>
                <div class="max-w-2xl mx-auto">
                    <div class="relative group">
                        <input
                            type="text"
                            placeholder="Поиск товаров по названию или описанию…"
                            class="w-full px-6 py-4 rounded-xl text-gray-900 focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-50 shadow-lg transition duration-300"
                        >
                        <button
                            class="absolute right-3 top-3 bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white px-6 py-2.5 rounded-lg transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5"
                        >
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                Найти
                            </div>
                        </button>
                    </div>
                    <div class="mt-6 flex flex-wrap justify-center gap-3">
                        <span class="text-sm text-blue-200">Популярные категории:</span>
                        <a href="#" class="text-sm bg-blue-500 hover:bg-blue-400 text-white px-3 py-1 rounded-full transition duration-200">Электроника</a>
                        <a href="#" class="text-sm bg-blue-500 hover:bg-blue-400 text-white px-3 py-1 rounded-full transition duration-200">Одежда</a>
                        <a href="#" class="text-sm bg-blue-500 hover:bg-blue-400 text-white px-3 py-1 rounded-full transition duration-200">Бытовая техника</a>
                        <a href="#" class="text-sm bg-blue-500 hover:bg-blue-400 text-white px-3 py-1 rounded-full transition duration-200">Книги</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-6">
            <div>
                <p class="text-gray-600 max-w-2xl">
                    Выберите из нашего широкого ассортимента товаров. Все товары проверены и имеют гарантию качества.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                <select class="px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 shadow-sm">
                    <option value="quotation" selected>По популярности</option>
                    <option value="price_asc">По цене (возрастание)</option>
                    <option value="price_desc">По цене (убывание)</option>
                    <option value="name">По названию (А-Я)</option>
                    <option value="name_desc">По названию (Я-А)</option>
                    <option value="newest">Сначала новые</option>
                </select>

                <select class="px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 shadow-sm">
                    <option value="all" selected>Все категории</option>
                    <option value="electronics">Электроника</option>
                    <option value="clothing">Одежда</option>
                    <option value="home">Для дома</option>
                    <option value="books">Книги</option>
                </select>
            </div>
        </div>

        @if($services->isEmpty())

            <div class="text-center py-20 bg-gradient-to-b from-blue-50 to-white rounded-2xl border border-blue-100">
                <div class="inline-flex items-center justify-center w-24 h-24 rounded-full bg-gradient-to-r from-blue-100 to-indigo-100 mb-6">
                    <svg class="w-12 h-12 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0H4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Товары не найдены</h3>
                <p class="text-gray-600 max-w-md mx-auto mb-8">
                    В данный момент товары отсутствуют в каталоге. Попробуйте изменить параметры фильтрации или загляните позже.
                </p>
                <button class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold px-8 py-3 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    Сбросить фильтры
                </button>
            </div>
        @else

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($services as $service)
                    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 ease-out transform hover:-translate-y-2 overflow-hidden border border-gray-100 group">

                        <div class="h-48 bg-gradient-to-br from-blue-50 to-indigo-50 relative overflow-hidden">


                            <div class="absolute top-4 left-4">

                                <span class="inline-flex items-center px-3 py-1.5 rounded-full text-xs font-semibold {{ $service->type?->label() == 'Акция' ? 'bg-red-100 text-red-800' : 'bg-blue-100 text-blue-800' }}">
                                    {{ $service->type?->label() ?? 'Товар' }}
                                </span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <button class="w-10 h-10 rounded-full bg-white/80 hover:bg-white shadow-md flex items-center justify-center transition duration-200 group-hover:scale-110">
                                    <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                <div class="bg-black/20 backdrop-blur-sm w-full h-full flex items-center justify-center">
                                    <button class="bg-white text-blue-600 font-semibold px-6 py-2.5 rounded-lg shadow-lg hover:bg-blue-50 transition duration-200">
                                        Быстрый просмотр
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-blue-600 transition duration-200">
                                {{ $service->name }}
                            </h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3 leading-relaxed">
                                {{ $service->description ?? 'Описание отсутствует' }}
                            </p>


                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <div class="text-2xl font-bold text-gray-900">{{ number_format($service->price, 2, '.', ' ') }} ₽</div>
                                    @if(rand(0, 1) && $service->price < ((float)rand(30, 600)))
                                    <div class="text-sm text-gray-500 line-through">{{ number_format(rand(30, 600), 2, '.', ' ') }} ₽</div>
                                    @endif
                                </div>
                                <div class="flex items-center">
                                    <div class="flex text-yellow-400 mr-2">
                                        @php
                                            $rating = rand(3, 5);
                                        @endphp
                                        @for($i = 0; $i < 5; $i++)
                                            <svg class="w-4 h-4 {{ $i < $rating ? 'fill-current' : '' }}" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        @endfor
                                    </div>
                                    <span class="text-sm text-gray-500">({{ rand(10, 500) }})</span>
                                </div>
                            </div>


                            <div class="flex gap-3">
                                <button class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-3 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-0.5">
                                    В корзину
                                </button>
                                <button class="w-12 h-12 border border-gray-300 hover:border-blue-400 rounded-lg flex items-center justify-center transition duration-200 hover:bg-blue-50">
                                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            @if($services->hasPages())
                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        {{ $services->links() }}
                    </nav>
                </div>
            @endif
        @endif


        <div class="mt-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl overflow-hidden shadow-xl">
            <div class="p-8 md:p-12 flex flex-col md:flex-row items-center justify-between">
                <div class="text-white mb-6 md:mb-0 md:mr-8">
                    <h3 class="text-2xl font-bold mb-2">Скидка 15% на первый заказ!</h3>
                    <p class="text-blue-100 mb-4">Воспользуйтесь промокодом: <span class="font-bold">ZIMAN15</span></p>
                    <p class="text-sm text-blue-200">Действует до 31 декабря 2028 года</p>
                </div>
                <button class="bg-white text-blue-600 hover:bg-blue-50 font-bold px-8 py-3 rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    Получить скидку
                </button>
            </div>
        </div>
    </div>

@endsection
