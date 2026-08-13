<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('header-title') — Tattoo_Asya</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Manrope:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <header>
        <div class="inner">
            <a href="{{ route('home') }}" class="logo">Tattoo<span>_</span>Asya</a>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}">Главная</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'is-active' : '' }}">Про нас</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'is-active' : '' }}">Контакты</a></li>
                </ul>
            </nav>
            <a href="{{ route('home') }}#zapis" class="btn header-cta">Записаться</a>
        </div>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <div class="inner">
            <span class="logo">Tattoo<span>_</span>Asya</span>
            <span class="footer-note">Все права защищены</span>
        </div>
    </footer>

    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
