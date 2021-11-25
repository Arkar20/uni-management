<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/" class="d-flex justify-content-center mb-4"> --}}
                {{-- <x-application-logo width=64 height=64 /> --}}
                <h3 class="d-flex justify-content-center mb-4">Student Login Page</h3>
            {{-- </a> --}}
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class=""
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="mt-3 form-check">
                @if (Route::has('password.request'))
                    <a class="text-muted" href="{{ route('password.request') }}" style="margin-right: 15px; margin-top: 15px;">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="d-flex justify-content-end mt-4">
                
                    <a class="text-muted" href="/register" style="margin-right: 15px; margin-top: 15px;">
                   Not Registered? Sign Up Here.
                </a>

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
