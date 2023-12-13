@extends('layouts.crm')

@section('title', 'Услуги')

@section('content')
    <ul>
        @foreach ($slugs as $slug)
            
        <a href="{{ route('crm.slugs.show', $slug->id) }}">
            <li>{{ $slug->name }}</li>
        </a>
        
        @endforeach
    </ul>
@endsection