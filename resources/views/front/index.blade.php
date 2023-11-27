@extends('layouts::front')
@section('title', 'Главная страница')
@section('desc', 'Описание главной страницы')

@section('content')
<section>
    <x-front.actual></x-front.actual>
</section>
<section>
    <div class="hero-banner bg-image" style="background: url({{ asset('/assets/images/banner.jpg') }})">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6">
                    <a href="{{ route('main.construct.index') }}" class=" d-flex justify-content-center h-100">
                        <div class="main-link">
                            <h2>Строительство</h2>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <a href="{{ route('main.slug.index') }}" class=" d-flex justify-content-center h-100">
                        <div class="main-link">
                            <h2>Строительные услуги</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection