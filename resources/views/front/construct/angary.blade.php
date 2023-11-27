@extends('layouts::front')

@section('title','Ангары арочного типа')
@section('desc','Описание для ангаров арочного типа')

@section('content')
    <x-front.page-banner 
        background="{{ asset('/assets/images/banner.jpg') }}"
        title="Строительство ангаров арочного типа"
    >
    <div class="d-flex">
        <a href="javascript:void(0)" class="btn btn-outline-light btn-lg">
            Оставить заявку сейчас
        </a>
    </div>
    </x-front.page-banner>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2 class="border-danger border-5 border-start px-2 mb-2">явные преимущества на рынке</h2>
                    <p>
                        Компания обладает материальнотехническим оснащением и квалифицированной бригадой мастеров, необходимыми для выполнения полученных заказов. 
                        Все работы осуществляются в соответствии с составленной сметой и условленными сроками.
                    </p>
                    @php
                        $advantages = [
                            'мы постоянно совершенствуем технологический процесс',
                            'используем современное оборудование',
                            'только качественные материалы',
                            'соблюдение строгих стандартов производства и высокой квалификации сотрудников',
                            'На все виды работ компанией получены свидетельства лицензии и сертификаты',
                            'гарантийное и послегарантийное обслуживание на выполненных объектах',
                        ];
                    @endphp
                    <ul class="list-unstyled p-0 m-0">
                        @foreach ($advantages as $item)
                            <li class="d-flex align-items center">
                                <i class="fa fa-minus text-danger"></i>
                                <h6 class="px-2">{{ $item }}</h6>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-md-6 placeholder-glow">
                    <img src="{{ asset('/assets/images/banner.jpg') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>
    <section>
        <angar-type></angar-type>
    </section>
    <section>
        <angar-slider></angar-slider>
    </section>
@endsection