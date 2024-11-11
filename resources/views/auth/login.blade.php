{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
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
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('components.authlayout')
@section('formu')
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form id="signInForm" class="geex-content__authentication__form" method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="geex-content__authentication__title">Sing In to Your Account 👋</h2>
            <div class="geex-content__authentication__form-group">
                <label for="emailSignIn" :value="__('Email')">Your Email</label>
                <input type="email" id="emailSignIn" name="email" placeholder="Enter Your Email" :value="old('email')" required autofocus autocomplete="username"/>
                <i class="uil-envelope"></i>
                <x-input-error :messages="$errors->get('email')" class="mt-1" />
            </div>
            <div class="geex-content__authentication__form-group">
                <div class="geex-content__authentication__label-wrapper">
                    <label for="loginPassword">Your Password</label>
                    @if (Route::has('password.request'))
                        {{-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a> --}}
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                        {{-- <a href="forgot-password.html">Forgot Password?</a> --}}
                    @endif
                </div>
                <input type="password" id="loginPassword" name="password" placeholder="Password" required autocomplete="current-password" />
                <i class="uil-eye toggle-password-type"></i>
                <x-input-error :messages="$errors->get('password')" class="mt-1" />

            </div>
            <div class="geex-content__authentication__form-group custom-checkbox">
                <input type="checkbox" class="geex-content__authentication__checkbox-input" id="rememberMe" name="remember">
                <label class="geex-content__authentication__checkbox-label" for="rememberMe">Remember Me</label>
            </div>
            <button type="submit" class="geex-content__authentication__form-submit">Se connecter</button>


            <span class="geex-content__authentication__form-separator">Or</span>

            <div class="geex-content__authentication__form-social">
                <a href="#" class="geex-content__authentication__form-social__single">
                    <img src="{{ asset('assets/img/icon/google.svg') }}" alt="">Google
                </a>
                <a href="#" class="geex-content__authentication__form-social__single">
                    <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.9133 0H11.0427C11.1465 1.2826 10.6569 2.24096 10.062 2.93497C9.47815 3.62419 8.67872 4.29264 7.38574 4.19122C7.29949 2.92698 7.78985 2.0397 8.38403 1.34729C8.93508 0.701997 9.94535 0.127781 10.9133 0ZM14.8274 13.3499V13.3859C14.464 14.4864 13.9457 15.4296 13.3132 16.3048C12.7358 17.0995 12.0282 18.1689 10.7647 18.1689C9.67302 18.1689 8.94786 17.4669 7.82898 17.4477C6.64541 17.4285 5.99452 18.0347 4.91238 18.1872H4.54341C3.74877 18.0722 3.10747 17.4429 2.64027 16.8759C1.26264 15.2003 0.19806 13.0361 0 10.2664V9.4526C0.0838563 7.47039 1.04701 5.85876 2.32721 5.0777C3.00285 4.66241 3.93166 4.30861 4.96589 4.46674C5.40913 4.53543 5.86195 4.68717 6.25887 4.83731C6.63503 4.98186 7.10542 5.23822 7.55106 5.22464C7.85294 5.21586 8.15322 5.05853 8.4575 4.94752C9.34877 4.62567 10.2225 4.2567 11.3741 4.43001C12.7581 4.63925 13.7404 5.25419 14.3474 6.20297C13.1766 6.94809 12.251 8.07096 12.4091 9.98848C12.5497 11.7303 13.5624 12.7493 14.8274 13.3499Z" fill="black"/>
                    </svg>
                    Apple
                </a>
            </div>
            <div class="geex-content__authentication__form-footer">
                Vous n'avez pas de compte ? <a href="{{ route('register') }}">S'inscrire </a>
            </div>
        </form>
@endsection
