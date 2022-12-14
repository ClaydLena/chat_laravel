<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        {{-- css da app --}}
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/welcome.css">
        <link rel="stylesheet" href="/css/descricao.css">
        <link rel="stylesheet" href="/css/dashboard.css">
        <link rel="stylesheet" href="/css/criar.css">
        <link rel="stylesheet" href="/css/painel.css">
        <link rel="stylesheet" href="/css/lista.css">
        <script src="/js/script.js"></script>

        {{-- Font --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/imgs/logo.png"  alt="Logo">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        @auth
                            @if(in_array('leitor', Auth::user()->acesso))
                                <li class="nav-item">
                                    <a href="/favoritos" class="nav-link">Favoritos</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leituras" class="nav-link">Lista de leituras</a>
                                </li>
                            @endif
                            @if(in_array('escritor', Auth::user()->acesso))
                                <li class="nav-item">
                                    <a href="/autoria" class="nav-link">Autoria</a>
                                </li>
                            @endif
                            @if(Auth::user()->acesso == 'admin')
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link">Painel de Controle</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                    @csrf
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="nav-link" onclick="this.closest('form').sunmit()">Sair</a>
                                    </form>
                            </li>
                        @endauth
                        @guest    
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/register" class="nav-link">Criar conta</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    {{-- Verifiar se ha algum feedback a ser mandado --}}
                    @if(session('msg')) 
                        <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>

        <footer>
            <p>Biblioteca Virtual - Desenvolvida por Clayd Nandza &copy; 2022</p>
        </footer> 
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
