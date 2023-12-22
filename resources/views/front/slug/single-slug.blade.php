@extends('layouts.front')

@section('title', $slug->name)
@section('desc', $slug->desk)

@section('content')
    <x-front.slug-header
        image="{{ $slug->image->first()->path ?? '//via.placeholder.com/1920x1080' }}"
        :slug="$slug"
    >
    
        <button type="button" class="btn btn-outline-light btn-lg">
            Узнать стоимость 
        </button>

    </x-front.slug-header>
    
    @yield('slug-content')
@endsection