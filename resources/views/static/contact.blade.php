@extends('layouts.main')

@section('header-title', 'Контакты')

@section('content')
@if ($errors->any())
    <div class="block-error">
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="page main-container">
    <div class="main-block">
        <span class="eyebrow">Контакты</span>
        <h1>Напишите<br>нам</h1>
        <p class="lead">Свяжитесь с нами напрямую в Telegram — ответим на все вопросы и поможем с записью.</p>

        <div class="hero-actions">
            <a href="https://t.me/jjjkkksssw" target="_blank" rel="noopener noreferrer" class="btn">Telegram</a>
            <a href="{{ route('home') }}#zapis" class="btn btn--ghost">Форма записи</a>
        </div>
    </div>
    @include('includes.aside')
</section>
@endsection
