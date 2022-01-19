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
                    <li class="nav-item">Eventos</li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">Criar Eventos</li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">Entrar</li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">Cadastrar</li>
                </ul>
            </div>
        </nav>
    </header>
@yield('content')
<footer>
    <p>Tito - Copyright&reg; 2022</p>
</footer>
</body>

</html>