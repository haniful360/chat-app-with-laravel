<x-guest-layout>
    <div class="flex items-center justify-center px-4">
        <div class="w-full max-w-md bg-white dark:bg-gray-900 rounded-xl overflow-hidden p-8">
            <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-6">
                Welcome My Chat App 👋
            </h2>
            
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-gray-700 dark:text-gray-300" />
                    <x-text-input id="email" class="block mt-1 w-full rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-gray-700 dark:text-gray-300" />
                    <x-text-input id="password" class="block mt-1 w-full rounded-lg shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <label for="remember_me" class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-indigo-600 hover:text-indigo-900 font-medium" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

                <div class="text-center mt-6">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Don't have an account?</span>
                    <a href="{{ route('register') }}" class="text-indigo-600 hover:underline font-medium ml-1">
                        {{ __('Register') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
