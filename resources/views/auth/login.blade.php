<x-guest-layout>
    <div style="width: 100%;">
        <div style="display: grid; grid-template-columns:50% 50%">
            <div>
                <img src='/imgs/auth.jpg' style="max-height: 788px; width:100%"/>
            </div>
            <div style="padding: 5%">
                <div name="logo" style="text-align: center; font-size:30px">
                    <h1>Seja Bem-Vindo</h1>
                </div>
        
                <x-jet-validation-errors class="mb-4" />
        
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                @csrf
                <form method="POST" action="{{ route('login') }}">
                 @csrf
                    <div style="margin-top: 30px">
                        <x-jet-label for="email" value="{{ __('E-mail') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <div class="mt-4" style="margin-top: 30px>
                        <x-jet-label for="password" value="{{ __('Palavra-Passe') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="mt-4" style="display: grid; grid-template-columns:auto auto; column-gap:50%">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Manter-me autenticado') }}</span>
                        </label>
        
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Recuperar Palavra-Passe') }}
                            </a>
                        @endif
                    </div>
        
                    <div class="flex items-center mt-4" >
                        <x-jet-button  style="width: 100%; margin-top: 30px">
                            {{ __('Entrar') }}
                        </x-jet-button>
                    </div>
                    <div class="alternatives-auth">
                        <div style="text-align: center;margin-top: 30px">Ou</div>
                        <div class="mt-4" style="margin-top: 30px">
                            <x-jet-input class="block mt-1 w-full" value="Autenticar-se com conta Google" type='button'/>
                        </div>
                        <div class="mt-4" style="margin-top: 30px">
                            <x-jet-input class="block mt-1 w-full" value="Autenticar-se com conta do Facebook" type='button'/>
                        </div>
                        <div class="mt-4" style="margin-top: 30px">
                            <a href="/register">
                                <x-jet-input class="block mt-1 w-full" value="Criar Conta" type='button'/>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
