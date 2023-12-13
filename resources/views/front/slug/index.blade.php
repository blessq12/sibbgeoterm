@extends('layouts::front')

@section('title', 'Услуги')
@section('desc', 'Описание для страницы услуги')

@section('content')
<section>
    <div class="container">
        <div class="row">
            @foreach ($slugs as $slug)
                <a href="{{ route('main.slug.single-slug', $slug->uri) }}">{{ $slug->name }}</a>
            @endforeach
        </div>
    </div>
</section>
@endsection