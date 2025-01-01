<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('assets/') }}/img/logo.png" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8; width: 100px; height: 100px;">

        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ms-4">
                    {{ __('Masuk') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
