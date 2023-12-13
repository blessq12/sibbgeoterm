@extends('layouts.front')

@section('title', $slug->name)
@section('desc', $slug->desk)

@section('content')
    <x-front.slug-header
        image="/{{ optional($slug->image)->path }}"
    ></x-front.slug-header>
    
    @yield('slug-content')
@endsection