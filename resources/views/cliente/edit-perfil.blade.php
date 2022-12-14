@extends('layouts.main')

@section('title', $user->name)

@section('content')
        @csrf
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name" >Nome</label>
                <input id="name" class="block mt-1 w-full" type="text" name="name" :value={{$user->name}} required autofocus autocomplete="name"  />
            </div>

            <div class="mt-4">
                <label for="email" >Email</label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value={{$user->email}}  required />
            </div>

            <div class="mt-4">
                <label for="profile_photo_path">Perfil</label>
                <input id="profile_photo_path" class="block mt-1 w-full" type="file" name="profile_photo_path" required />
                <img src="/imgs/books/{{ $user->profile_photo_path }}" alt="{{ $user->name }}" class="img-preview">
            </div>
            <div class="mt-4">
                <label for="password" >Senha</label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <label for="password_confirmation">Confirmar Senha</label>
                <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="ml-4">
                    Salvar
                </button>
            </div>
        </form>

@endsection