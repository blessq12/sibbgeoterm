@extends('layouts::front')
@section('title', 'Главная страница')
@section('desc', 'Описание главной страницы')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-6 ">
                <a href="{{ route('main.construct.index') }}" class="base-link">
                    строительство
                </a>
            </div>
            <div class="col-6">
                <a href="{{ route('main.slug.index') }}" class="base-link">
                    услуги
                </a>
            </div>
        </div>
    </div>
@endsection