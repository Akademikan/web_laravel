@extends('layouts.main')

@section('header-title', 'Про нас')

@section('content')
<section class="page">
    <span class="eyebrow">Про нас</span>
    <h1>О нашей<br>тату студии</h1>
    <p class="lead">Предоставляем услуги тату как в студии, так и работаем на выезде.</p>

    <h2 class="page-subhead">Портфолио</h2>
    <div class="gallery-grid gallery-grid--square">
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
            <div class="gallery-item">
                <img src="{{ asset('images/girl.jpg') }}" alt="Эскиз маркером: девушка с двумя пистолетами и звездой" onclick="openLightbox(this)">
                <span class="gallery-caption">Девушка с пистолетами</span>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/woman.jpg') }}" alt="Графичный эскиз: женский портрет с длинными волосами и лучами" onclick="openLightbox(this)">
                <span class="gallery-caption">Портрет в лучах</span>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/eye.jpg') }}" alt="Цветной эскиз глаза с пирсингом и радужной штриховкой" onclick="openLightbox(this)">
                <span class="gallery-caption">Глаз, цветной эскиз</span>
            </div>
    </div>
</section>

<div class="lightbox-overlay" id="lightbox">
    <div class="lightbox-content">
        <button type="button" class="lightbox-close" id="lightbox-close">&times;</button>
        <img src="" alt="" id="lightbox-image">
        <p class="lightbox-caption" id="lightbox-caption"></p>
    </div>
</div>

<script>
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxCaption = document.getElementById('lightbox-caption');

    function openLightbox(imgElement) {
        lightboxImage.src = imgElement.src;
        lightboxImage.alt = imgElement.alt;
        lightboxCaption.textContent = imgElement.alt;
        lightbox.classList.add('active');
    }

    document.getElementById('lightbox-close').addEventListener('click', function () {
        lightbox.classList.remove('active');
    });
    lightbox.addEventListener('click', function (event) {
        if (event.target === lightbox) lightbox.classList.remove('active');
    });
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') lightbox.classList.remove('active');
    });
</script>
@endsection
