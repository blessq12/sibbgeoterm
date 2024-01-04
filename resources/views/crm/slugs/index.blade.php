@extends('layouts.crm')

@section('title', 'Услуги')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4">
        @foreach ($slugs as $e)
            <div class="col mb-4">
                <a href="{{ route('crm.slugs.show', $e->id) }}" class="text-decoration-none">
                    <div class="bg-image w-100 position-relative rounded p-3 d-flex align-items-end" style="background: url({{ $e->image->isEmpty() ? '//via.placeholder.com/256x256' : $e->image->first()->path }}); min-height: 250px">
                        <div class="overlay"></div>
                        <div class="position-relative">
                            <h5 class="fs-6">{{ $e->name }}</h5>
                            
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection