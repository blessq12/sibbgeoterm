@extends('layouts::front')

@section('title', 'Сооружения из сендвич панелей')
@section('desc', 'Описание для сендвич панелей')

@section('content')

    <x-front.page-banner
        background="{{ asset('/assets/images/banner.jpg') }}"
        title="Сооружения из сендвич панелей"
    >
        <a href="javascript:void(0)" class="btn btn-outline-light btn-lg">
            Оставить заявку сейчас
        </a>
    </x-front.page-banner>

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