@extends('layouts.main')

@section('header-title', 'Главная')

@section('content')

    <section class="hero">
        <div class="hero-text">
            <span class="eyebrow">Тату-студия · Санкт-Петербург · выезд</span>
            <h1>Забивайтесь<br>тату<br><span class="accent">с нами</span></h1>
            <p>Работаем по вашим эскизам и предлагаем свои. Любая сложность — от минимализма до реализма.</p>
            <div class="hero-actions" id="zapis">
                <button type="button" id="open-contact-modal" class="btn">Запись на тату</button>
                <a href="https://t.me/jjjkkksssw" target="_blank" rel="noopener noreferrer" class="btn btn--ghost">Telegram</a>
            </div>
        </div>
        <div class="hero-media">
            <img src="{{ asset('images/face.jpg') }}" alt="Сердце с кинжалами — работа мастера">
        </div>
    </section>

    <div class="ticker">
        <div class="ticker-track">
            <span>Реализм</span><span>Минимализм</span><span>Олдскул</span><span>Леттеринг</span><span>Геометрия</span><span>Выезд</span>
            <span>Реализм</span><span>Минимализм</span><span>Олдскул</span><span>Леттеринг</span><span>Геометрия</span><span>Выезд</span>
        </div>
    </div>

    <section class="gallery-section">
        <div class="section-head">
            <h2>Галерея сделанных тату</h2>
            <p class="gallery-subtitle">Реальные работы наших мастеров</p>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="{{ asset('images/stars.jpg') }}" alt="Парные тату — тонкие звёздочки на кистях и пальцах" onclick="openLightbox(this)">
                <span class="gallery-caption">Звёзды, кисти рук</span>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/face.jpg') }}" alt="Сердце с кинжалами и глаза в стиле готик-трэш, розовые акценты" onclick="openLightbox(this)">
                <span class="gallery-caption">Сердце с кинжалами, икра</span>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/krest.jpg') }}" alt="Крупный трайбл-крест с розовым контуром на голени" onclick="openLightbox(this)">
                <span class="gallery-caption">Трайбл-крест, голень</span>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/krestwithface.jpg') }}" alt="Трайбл-крест и сердце в терниях на плече, чёрный контур" onclick="openLightbox(this)">
                <span class="gallery-caption">Крест и сердце, плечо</span>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/face1.jpg') }}" alt="Плачущие глаза и розовое сердце с кинжалами на бедре" onclick="openLightbox(this)">
                <span class="gallery-caption">Плачущие глаза, бедро</span>
            </div>
        </div>
    </section>

    <section class="gallery-section">
        <div class="section-head">
            <h2>Галерея эскизов</h2>
            <p class="gallery-subtitle">Готовые эскизы, доступные для записи</p>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="{{ asset('images/girl.jpg') }}" alt="Эскиз маркером: девушка с двумя пистолетами и звездой" onclick="openLightbox(this)">
                <span class="gallery-caption gallery-caption--accent">Девушка с пистолетами</span>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/woman.jpg') }}" alt="Графичный эскиз: женский портрет с длинными волосами и лучами" onclick="openLightbox(this)">
                <span class="gallery-caption gallery-caption--accent">Портрет в лучах</span>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/eye.jpg') }}" alt="Цветной эскиз глаза с пирсингом и радужной штриховкой" onclick="openLightbox(this)">
                <span class="gallery-caption gallery-caption--accent">Глаз, цветной эскиз</span>
            </div>
        </div>
    </section>

    <section class="about-strip">
        <div class="about-strip-inner">
            <div>
                <span class="eyebrow">О студии</span>
                <h2>Выполняем тату любой сложности</h2>
                <p>По вашим эскизам, а также предоставляем свои. Услуги в студии и на выезде.</p>
                <a href="{{ route('about') }}" class="text-link">Подробнее о нас</a>
            </div>
            <div class="facts">
                <div class="fact"><span class="fact-value">7+</span><span class="fact-label">лет практики</span></div>
                <div class="fact"><span class="fact-value">900+</span><span class="fact-label">работ</span></div>
                <div class="fact"><span class="fact-value">24ч</span><span class="fact-label">ответ на заявку</span></div>
                <div class="fact"><span class="fact-value">100%</span><span class="fact-label">стерильность</span></div>
            </div>
        </div>
    </section>

    {{-- Модальное окно с формой --}}
    <div class="modal-overlay" id="contact-modal">
        <div class="modal-window">
            <button type="button" class="modal-close" id="close-contact-modal">&times;</button>

            <h1>Запись на сеанс<br><span class="accent">консультацию</span></h1>

            @if ($errors->any())
                <div class="block-error">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('contact.post') }}" method="POST">
                @csrf

                <label for="name">Имя</label>
                <input type="text" placeholder="Введите имя" name="name" id="name" value="{{ old('name') }}">

                <label for="number">Номер телефона</label>
                <input type="tel" placeholder="+7 (___) ___-__-__" name="number" id="number" value="{{ old('number') }}" inputmode="numeric" pattern="^\+?[0-9\s\-\(\)]{7,20}$">

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

    <div class="lightbox-overlay" id="lightbox">
        <div class="lightbox-content">
            <button type="button" class="lightbox-close" id="lightbox-close">&times;</button>
            <img src="" alt="" id="lightbox-image">
            <p class="lightbox-caption" id="lightbox-caption"></p>
        </div>
    </div>

    <script>
        const modal = document.getElementById('contact-modal');
        const openBtn = document.getElementById('open-contact-modal');
        const closeBtn = document.getElementById('close-contact-modal');

        openBtn.addEventListener('click', function () { modal.classList.add('active'); });
        closeBtn.addEventListener('click', function () { modal.classList.remove('active'); });
        modal.addEventListener('click', function (event) {
            if (event.target === modal) modal.classList.remove('active');
        });

        const phoneInput = document.getElementById('number');

        phoneInput.addEventListener('input', function (event) {
            let digits = event.target.value.replace(/\D/g, '');
            if (digits.startsWith('7') || digits.startsWith('8')) digits = digits.slice(1);
            digits = digits.slice(0, 10);

            let formatted = '+7';
            if (digits.length > 0) formatted += ' (' + digits.slice(0, 3);
            if (digits.length >= 3) formatted += ') ' + digits.slice(3, 6);
            if (digits.length >= 6) formatted += '-' + digits.slice(6, 8);
            if (digits.length >= 8) formatted += '-' + digits.slice(8, 10);

            event.target.value = formatted;
        });

        phoneInput.addEventListener('focus', function (event) {
            if (!event.target.value) event.target.value = '+7 (';
        });

        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxCaption = document.getElementById('lightbox-caption');
        const lightboxClose = document.getElementById('lightbox-close');

        function openLightbox(imgElement) {
            lightboxImage.src = imgElement.src;
            lightboxImage.alt = imgElement.alt;
            lightboxCaption.textContent = imgElement.alt;
            lightbox.classList.add('active');
        }

        lightboxClose.addEventListener('click', function () { lightbox.classList.remove('active'); });
        lightbox.addEventListener('click', function (event) {
            if (event.target === lightbox) lightbox.classList.remove('active');
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                modal.classList.remove('active');
                lightbox.classList.remove('active');
            }
        });
    </script>

@endsection
