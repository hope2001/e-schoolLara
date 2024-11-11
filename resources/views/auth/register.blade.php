
@extends('components.authlayout')
@section('formu')
{{-- <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form> --}}
<form id="signInForm" class="geex-content__authentication__form" method="POST" action="{{ route('register') }}">
    @csrf
    <h2 class="geex-content__authentication__title">Sign Up Your Account 👋</h2>
    <div class="geex-content__authentication__form-group">
        <label for="emailSignIn">Nom et prénom</label>
        <input type="text" id="emailSignIn"  placeholder="Enter Your name & surname" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <i class="uil-envelope"></i>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div class="geex-content__authentication__form-group">
        <label for="emailSignIn">Email</label>
        <input type="email" id="emailSignIn" name="email" placeholder="Enter Your Email" required autocomplete="email" />
        <i class="uil-envelope"></i>
    </div>
    <div class="geex-content__authentication__form-group">
        <div class="geex-content__authentication__label-wrapper">
            <label for="loginPassword">Mot de passe</label>
        </div>
        <input type="password" id="loginPassword" placeholder="Password" name="password" required autocomplete="new-password">
        <i class="uil-eye toggle-password-type"></i>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <div class="geex-content__authentication__form-group">
        <div class="geex-content__authentication__label-wrapper">
            <label for="loginPassword">Confirmer le mot de passe</label>
        </div>
        <input type="password" id="loginPassword" placeholder="Password" name="password_confirmation" required autocomplete="new-password" />
        <i class="uil-eye toggle-password-type"></i>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>
    <div class="geex-content__authentication__form-group custom-checkbox">
        <input type="checkbox" class="geex-content__authentication__checkbox-input" id="rememberMe">
        <label class="geex-content__authentication__checkbox-label" for="rememberMe">En créant un compte, vous acceptez nos <a href="#">termes et conditions Politique de confidentialité</a></label>
    </div>
    <button type="submit" class="geex-content__authentication__form-submit">Soumettre</button>
    <span class="geex-content__authentication__form-separator">Ou</span>
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
        Vous avez déjà un compte ? <a href="{{ route('login') }}">Se connecter</a>
    </div>
</form>
@endsection
{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
