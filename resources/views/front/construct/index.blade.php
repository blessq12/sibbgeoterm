@extends('layouts::front')
@section('title', 'Строительство')
@section('desc', 'Описание для строительство')

@section('content')
<div class="construct">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12 col-lg-6">
                <a href="{{ route('main.construct.angary') }}">
                    <div class="construct-item text-center">
                        <h2>Строительство безкарскасных ангаров арочного типа</h2>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a href="{{ route('main.construct.sandwich') }}">
                    <div class="construct-item text-center">
                        <h2>Строительство и проектирование складских и промышленных зданий</h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection