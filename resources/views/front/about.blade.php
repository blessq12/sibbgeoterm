@extends('layouts::front')

@section('title', 'О Сибгеотерм')
@section('desc', 'Мы уверены что доверие может быть и к организации и поэтому хотим рассказать о себе, как об организации')

@section('content')
    <x-front.page-banner
        title="О компании сибгеотерм"
        background="https://skstal.ru/wp-content/uploads/2018/04/k11.jpg"
    >
    </x-front.page-banner>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{ $company->tel }}                    
                </div>
            </div>
        </div>
    </section>
@endsection