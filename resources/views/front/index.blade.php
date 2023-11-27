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

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="mb-0">Почему выбирают нас</h3>
                    <p>Самые ключевые качества, которыми мы гордимся</p>
                    <hr class="w-50">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="wu-item overflow-hidden" style="background: url('{{ asset('/assets/images/banner.jpg') }}')">
                    <div class="overlay"></div>
                    <div class="position-relative">
                        <h4>Причина 1</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="wu-item overflow-hidden" style="background: url('{{ asset('/assets/images/banner.jpg') }}')">
                    <div class="overlay"></div>
                    <div class="position-relative">
                        <h4>Причина 2</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="wu-item overflow-hidden" style="background: url('{{ asset('/assets/images/banner.jpg') }}')">
                    <div class="overlay"></div>
                    <div class="position-relative">
                        <h4>Причина 3</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="wu-item overflow-hidden" style="background: url('{{ asset('/assets/images/banner.jpg') }}')">
                    <div class="overlay"></div>
                    <div class="position-relative">
                        <h4>Причина 4</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection