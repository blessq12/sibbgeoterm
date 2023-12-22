@extends('layouts::front')

@section('title', 'Услуги')
@section('desc', 'Описание для страницы услуги')

@section('content')
<section>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            @foreach ($slugs as $slug)
            <a href="{{ route('main.slug.single-slug', $slug->uri) }}" class="text-decoration-none">
                <div class="col">
                    <div class="position-relative d-flex align-items-end px-2 py-4 mb-4 overflow-hidden rounded" style="min-height: 300px">
                        <img src="{{ $slug->thumb->first()->path ?? '//via.placeholder.com/512x512' }}" alt="" class="position-absolute align-self-center" style="left: 0; transform: scale(1.1); justify-self: center">
                        <div class="overlay"></div>
                            <div class="position-relative">
                                <h4 class="mb-0 fs-5">{{ $slug->name }}</h4>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection