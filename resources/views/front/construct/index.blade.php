@extends('layouts::front')
@section('title', 'Строительство')
@section('desc', 'Описание для строительство')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
                <a href="{{ route('main.construct.angary') }}">
                    <div class="construct-item">
                        Ангары арочного типа
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <a href="{{ route('main.construct.sandwich') }}">
                    <div class="construct-item">
                        Сооружения из сендвич панелей
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection