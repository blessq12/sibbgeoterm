@extends('layouts::front')

@section('title', 'Услуги')
@section('desc', 'Описание для страницы услуги')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <a href="" class="slug-link">
                    <div class="slug-item overflow-hidden position-relative h-100 rounded bg-image p-4" style="background: url({{ asset('/assets/images/banner.jpg') }})">
                        <div class="overlay" style="background: rgba(0, 0, 0, .7)"></div>
                        <div class="d-block align-self-end position-relative px-2 pb-2">
                            <h3 class="m-0">Строительные услуги</h3>
                            <p>Оказание строительных услуг в городе томске и области</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-12 col-lg-8">
                <div class="row g-2">
                    @foreach ($slugs as $slug)
                        <div class="col-12 col-md-4">
                            <a href="" class="slug-link">
                                <div class="slug-item overflow-hidden position-relative rounded">
                                    <img src="{{ asset('/assets/images/banner.jpg') }}" alt="" class="image-fluid">
                                    <div class="overlay"></div>
                                    <div class="d-block align-self-end position-relative px-2 pb-2">
                                        <h4 class="m-0">{{ $slug->name }}</h4>
                                        <p> {{ $slug->desc }} </p>
                                    </div>
                                </div>
                            </a>
                        </div>    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection