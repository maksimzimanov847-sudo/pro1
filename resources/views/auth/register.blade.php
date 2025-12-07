<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8 bg-white p-8 rounded-2xl shadow-xl border border-blue-100">
            <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">
                    Регистрация
                </h2>
                <p class="mt-2 text-sm text-blue-600">
                    Создайте свой аккаунт
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-6">
                @csrf

                <!-- Name Fields -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                    <!-- Имя -->
                    <div>
                        <x-input-label for="name" :value="__('Имя')" class="text-blue-700 font-medium" />
                        <x-text-input
                            id="name"
                            class="block mt-1 w-full border-blue-200 focus:border-blue-500 focus:ring-blue-500"
                            type="text"
                            name="name"
                            :value="old('name')"
                            required
                            autofocus
                            autocomplete="name"
                        />
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-600" />
                    </div>

                    <!-- Фамилия -->
                    <div>
                        <x-input-label for="surname" :value="__('Фамилия')" class="text-blue-700 font-medium" />
                        <x-text-input
                            id="surname"
                            class="block mt-1 w-full border-blue-200 focus:border-blue-500 focus:ring-blue-500"
                            type="text"
                            name="surname"
                            :value="old('surname')"
                            required
                            autocomplete="family-name"
                        />
                        <x-input-error :messages="$errors->get('surname')" class="mt-2 text-red-600" />
                    </div>

                    <!-- Отчество -->
                    <div>
                        <x-input-label for="patronymic" :value="__('Отчество')" class="text-blue-700 font-medium" />
                        <x-text-input
                            id="patronymic"
                            class="block mt-1 w-full border-blue-200 focus:border-blue-500 focus:ring-blue-500"
                            type="text"
                            name="patronymic"
                            :value="old('patronymic')"
                            required
                            autocomplete="additional-name"
                        />
                        <x-input-error :messages="$errors->get('patronymic')" class="mt-2 text-red-600" />
                    </div>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" class="text-blue-700 font-medium" />
                    <x-text-input
                        id="email"
                        class="block mt-1 w-full border-blue-200 focus:border-blue-500 focus:ring-blue-500"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autocomplete="email"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Пароль')" class="text-blue-700 font-medium" />
                    <x-text-input
                        id="password"
                        class="block mt-1 w-full border-blue-200 focus:border-blue-500 focus:ring-blue-500"
                        type="password"
                        name="password"
                        required
                        autocomplete="new-password"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Подтверждение пароля')" class="text-blue-700 font-medium" />
                    <x-text-input
                        id="password_confirmation"
                        class="block mt-1 w-full border-blue-200 focus:border-blue-500 focus:ring-blue-500"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <a class="text-sm font-medium text-blue-600 hover:text-blue-800 transition duration-150 ease-in-out" href="{{ route('login') }}">
                        {{ __('Уже зарегистрированы?') }}
                    </a>

                    <x-primary-button class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:ring-4 focus:ring-blue-300 shadow-lg px-3 py-2 rounded-lg font-semibold transition duration-300">
                        {{ __('Зарегистрироваться') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
