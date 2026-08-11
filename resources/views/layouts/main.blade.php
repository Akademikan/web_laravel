<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('header-title')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <header>
        <div class="inner">
            <span class="logo">Tattoo_Asya</span>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Главная</a></li>
                    <li><a href="{{ route('about') }}">Про нас</a></li>
                    <li><a href="{{ route('contact') }}">Контакты</a></li>
                </ul>
            </nav>
        </div>       
    </header>    
    
    <div class="content">
        @yield('content')
    </div>

    <footer>Все права защищены</footer>

    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>