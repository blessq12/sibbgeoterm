@extends('layouts::front')
@section('title', 'Главная страница')
@section('desc', 'Описание главной страницы')

@section('content')
<section>
    <x-front.actual></x-front.actual>
</section>
<section>
    <div class="hero-banner py-4" style="background: url('{{ asset('/assets/images/banner.jpg') }}')">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 col-md-6 col-lg-6 d-flex">
                    <a href="" class="main-offer construct" style="justify-self: start; align-self: start">
                        <span>Строительство</span>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-end">
                    <a href="" class="main-offer slug" style="align-self: end;">
                        <span>Услуги</span>
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