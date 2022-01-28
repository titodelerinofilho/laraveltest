<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONT GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- CSS DO APP -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- fim dos estilos -->
    <script src="/js/scripts.js"></script>
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo.png" alt="DTS">
                </a>
                <ul class="navbar-nav">
                    <a href="/" class="nav-link">
                        <li class="nav-item">Eventos</li>
                    </a>
                </ul>
                @auth
                <ul class="navbar-nav">
                    <a href="/events/create" class="nav-link">
                        <li class="nav-item">Criar Eventos</li>
                    </a>
                </ul>
                <ul class="navbar-nav">
                    <a href="/dashboard" class="nav-link">
                        <li class="nav-item">Meus Eventos</li>
                    </a>
                </ul>
                <ul class="navbar-nav">
                    <form method="POST" name="logout" action="{{ route('logout') }}">
                        @csrf
                        <a href="javascript:document.logout.submit()" class="nav-link"
                        onclick="this.preventDefault();
                        this.closest('form').submit();">Sair</a>
                    </form>
                </ul>
                @endauth
                @guest
                <ul class="navbar-nav">
                    <a href="/login" class="nav-link">
                        <li class="nav-item">Entrar</li>
                    </a>
                </ul>
                <ul class="navbar-nav">
                    <a href="/register" class="nav-link">
                        <li class="nav-item">Cadastrar</li>
                    </a>
                </ul>
                @endguest
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
<footer>
    <p>Tito - Copyright&reg; 2022</p>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>