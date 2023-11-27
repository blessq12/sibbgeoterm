@extends('layouts::front')

@section('title', 'Сооружения из сендвич панелей')
@section('desc', 'Описание для сендвич панелей')

@section('content')
    <div class="container-fluid bg-image position-relative" style="height: 500px; background: url({{ asset('/assets/images/banner.jpg') }})">
        <div class="overlay" style="background: rgba(0, 0, 0, .7)"></div>
        <div class="container h-100 py-5 position-relative">
            <div class="position-absolute"
            style="background: #fff;
            width:350px;
            height:50px;
            right: 12px;
            bottom: -1px
        "></div>
            <div class="row align-items-end h-100">
                <div class="col-12">
                    <h1 class="px-4 border-danger border-start border-5 text-light"
                        style="font-size: 5rem; width: 90%"
                    >
                        Сооружения из сендвич панелей
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2>Строительство из сендвич панелей</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis sapiente ipsa tempora repellat corporis error voluptatum voluptatem repudiandae voluptates, dignissimos neque obcaecati maiores quisquam distinctio officiis in a cum at!</p>
                </div>
            </div>
            <div class="row placeholder-glow">
                <div class="col-12 col-md-6">
                    <span class="placeholder w-100 h-100 rounded" style="min-height: 350px"></span>
                </div>
                <div class="col-12 col-md-6">
                    <span class="placeholder w-100 h-100 rounded"></span>
                </div>
            </div>
        </div>
    </section>
@endsection