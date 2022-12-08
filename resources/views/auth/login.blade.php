{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-car-way</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />

</head>
<body>
    <main>
         <section class="login">

            <div class="wrapper">
                <img src="imgs/logo.png" class="login__logo">

                <h1 class="login__title">Fazer login</h1>

                <label class="login__label">
                    <span class="">nome do usuário</span>
                    <input type="text" name="username" class="input">
                </label>

                <label class="login__label">
                    <span>senha</span>
                    <input type="text" name="username" class="input">
                </label>
                
                <div class="login__icons">
                    <button type="button" class="icons__button">
                        <img src="imgs/Facebook-icon.png" alt="">
                    </button>
                    <button type="button" class="icons__button">
                        <img src="imgs/google-icon.png" alt="">
                    </button>  
                    <button type="button" class="icons__button">
                        <img src="imgs/Apple-icon.png" alt="">
                    </button>  
                </div>

                <label class="login__label--checkbox">
                    <input type="checkbox" class="input--checkbox">
                    Manter Login    
                </label>    
            </div>

            <div class="wrapper mt-5">
                <button type="button" class="login__button" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>        
                </button>

                <a href="#" class="login__link">Não consegue iniciar sessão?</a>
                <a href="#" class="login__link">criar conta</a>
            </div>

         </section>

      <section class="wallpaper"></section>    
    </main>


    <script src="js/costumer.js "></script>
</body>
</html>