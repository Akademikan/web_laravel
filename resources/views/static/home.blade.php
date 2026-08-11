@extends('layouts.main')

@section('header-title', 'Главная')

@section('content')

    <section class="hero">
        <div class="hero-content">
            <h1>Добро пожаловать в Tattoo_Asya</h1>
            <p>Забивайтесь тату с нами</p>
            <button type="button" id="open-contact-modal" class="btn">Запись на тату</button>
        </div>
    </section>

    <div class="main-container">
        <div class="main-block">
            <h2>Home page</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non totam qui quo nihil est deserunt aut possimus asperiores odit ea, itaque sed voluptate rem eligendi at accusamus quos debitis perferendis.</p>
        </div>
        @include('includes.aside')
    </div>

    {{-- Модальное окно с формой --}}
    <div class="modal-overlay" id="contact-modal">
        <div class="modal-window">
            <button type="button" class="modal-close" id="close-contact-modal">&times;</button>

            <h1>Contact page</h1>
            <form action="{{ route('contact.post') }}" method="POST">
                @csrf

                <label for="name">Имя</label>
                <input type="text" placeholder="Введите имя" name="name" id="name" value="{{ old('name') }}">

                <label for="email">Почта</label>
                <input type="email" placeholder="Введите почту" name="email" id="email" value="{{ old('email') }}">

                <label for="subject">Тема сообщения</label>
                <input type="text" placeholder="Введите тему сообщения" name="subject" id="subject" value="{{ old('subject') }}">

                <label for="message">Сообщение</label>
                <textarea name="message" id="message" placeholder="Введите сообщение">{{ old('message') }}</textarea>

                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>

    <script>
        const modal = document.getElementById('contact-modal');
        const openBtn = document.getElementById('open-contact-modal');
        const closeBtn = document.getElementById('close-contact-modal');

        openBtn.addEventListener('click', function () {
            modal.classList.add('active');
        });

        closeBtn.addEventListener('click', function () {
            modal.classList.remove('active');
        });

        // Закрытие по клику на затемнённый фон (мимо самого окна)
        modal.addEventListener('click', function (event) {
            if (event.target === modal) {
                modal.classList.remove('active');
            }
        });

        // Закрытие по Escape
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                modal.classList.remove('active');
            }
        });
    </script>

@endsection