@extends('layouts.front')

@section('title', $slug->name)
@section('desc', $slug->desk)

@section('content')
    <x-front.slug-header
        image="/{{ optional($slug->image)->path ?? '//via.placeholder.com/1920x1080' }}"
    ></x-front.slug-header>
    
    @yield('slug-content')
@endsection