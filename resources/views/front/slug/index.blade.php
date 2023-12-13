@extends('layouts::front')

@section('title', 'Услуги')
@section('desc', 'Описание для страницы услуги')

@section('content')
<section>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            @foreach ($slugs as $slug)
            <a href="{{ route('main.slug.single-slug', $slug->uri) }}">
                <div class="col">
                    <div class="position-relative d-flex align-items-end px-2 py-4 mb-4 overflow-hidden rounded" style="min-height: 200px">
                        <img src="{{ optional($slug->thumb)->path ?? '//via.placeholder.com/512x512' }}" alt="" class="img-fluid position-absolute top-0 w-100" style="left:0">
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