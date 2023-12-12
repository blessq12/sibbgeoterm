@extends('layouts.front')

@section('title', $slug->name)
@section('desc', $slug->desk)

@section('content')
    
    @yield('slug-content')
@endsection