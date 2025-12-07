<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8 bg-white p-8 rounded-2xl shadow-xl border border-blue-100">
            <div class="text-center">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">
                    Вход в систему
                </h2>
                <p class="mt-2 text-sm text-blue-600">
                    Введите свои учетные данные
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 p-3 rounded-lg bg-blue-50 border border-blue-200 text-blue-700" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-blue-700 font-medium" />
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <x-text-input
                            id="email"
                            class="block mt-1 w-full pl-10 border-blue-200 focus:border-blue-500 focus:ring-blue-500"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
                            autocomplete="email"
                            placeholder="example@mail.com"
                        />
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Пароль')" class="text-blue-700 font-medium" />
                    <div class="relative mt-1">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <x-text-input
                            id="password"
                            class="block mt-1 w-full pl-10 border-blue-200 focus:border-blue-500 focus:ring-blue-500"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="••••••••"
                        />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between mt-4">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer">
                        <input
                            id="remember_me"
                            type="checkbox"
                            class="rounded border-blue-300 text-blue-600 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                            name="remember"
                        >
                        <span class="ms-2 text-sm text-gray-700 hover:text-blue-700 transition duration-150">{{ __('Запомнить меня') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm font-medium text-blue-600 hover:text-blue-800 transition duration-150 ease-in-out" href="{{ route('password.request') }}">
                            {{ __('Забыли пароль?') }}
                        </a>
                    @endif
                </div>

                <!-- Submit Button & Register Link -->
                <div class="flex items-center justify-between mt-8">
                    @if (Route::has('register'))
                        <a class="text-sm font-medium text-blue-600 hover:text-blue-800 transition duration-150 ease-in-out" href="{{ route('register') }}">
                            {{ __('Нет аккаунта? Зарегистрироваться') }}
                        </a>
                    @endif

                    <x-primary-button class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:ring-4 focus:ring-blue-300 shadow-lg px-6 py-3 rounded-lg font-semibold transition duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        {{ __('Войти') }}
                    </x-primary-button>
                </div>

</x-guest-layout>
