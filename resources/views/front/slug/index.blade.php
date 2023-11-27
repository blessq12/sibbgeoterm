@extends('layouts::front')

@section('title', 'Услуги')
@section('desc', 'Описание для страницы услуги')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner p-4 border border-dark rounded bg-dark text-light d-flex align-items-end position-relative" 
                        style="
                            min-height: 350px; 
                            background: url({{ asset('/assets/images/banner.jpg') }});
                            background-position: center !important

                        ">
                        <div class="overlay"></div>
                        <div class="d-block position-relative">
                            <h2 class="mb-0">Строительные услуги</h2>
                            <p>Наша компания оказывает широкий спектр стрительных услуг</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Услуги</h2>
                        <hr class="w-50">
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($slugs as $slug)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="single-slug p-4 d-flex align-items-end position-relative" style="
                            background: url({{ asset('/assets/images/banner.jpg') }});   
                            background-position: center !important
                        ">
                            <div class="overlay"></div>
                            <div class="d-block text-light position-relative">
                                <h4 class="mb-0">{{ $slug->name }}</h4>
                                <p> {{ $slug->desc }} </p>    
                            </div>
                        </div>
                    </div>    
                @endforeach
            </div>
        </div>
    </section>
@endsection