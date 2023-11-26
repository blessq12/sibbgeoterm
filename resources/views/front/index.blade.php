@extends('layouts::front')
@section('title', 'Главная страница')
@section('desc', 'Описание главной страницы')

@section('content')
<div class="hero-banner">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="link">
                    {{-- <img src="//via.placeholder.com/1024x512" alt=""> --}}
                    <h2>Construction</h2>
                </div>
            </div>
            <div class="col-6">
                <div class="link">
                    {{-- <img src="//via.placeholder.com/1024x512" alt=""> --}}
                    <h2>Slugs</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection