<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        <div class="text-center flex align-center justify-center">
            <a href="{{ route('dashboard') }}">
                <img src="/logo.webp" width="80"/>
            </a>
        </div>
        <h1 class="text-center py-4 text-2xl">Gestão de Arquivos - ISPAJ</h1>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('Esqueceste a sua palavra pass?') }}
            </a>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            @endif

            <x-primary-button class="ms-3">
                {{ __('Acessar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
