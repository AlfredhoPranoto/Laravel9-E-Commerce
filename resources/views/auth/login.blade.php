<x-guest-layout>
    @slot('title', 'Login')
    <form method="POST" action="/login">
        @csrf
        <x-input-error :type="'danger'" />

        <div class="mb-3">
            <x-input-label for="email" :value="'Email'" />
            <x-text-input id="email" type="email" name="email" :value="Cookie::get('user_cookie') !== null ? Cookie::get('user_cookie') : ''" required autofocus
                autocomplete="username" />
        </div>

        <div class="mb-3">
            <x-input-label for="password" :value="'Password'" />
            <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="mb-3">
            <label for="remember">
                <input id="remember" type="checkbox" class="rounded me-2 form-check-input" name="remember">
                <span class="text-sm">Remember me</span>
            </label>
        </div>

        <div class="d-flex justify-content-end mt-4 align-items-center">
            <a class="underline text-sm" href="{{ route('register') }}">Don't have account?</a>

            <x-primary-button class="ms-3">
                Log in
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
