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
                    <h2>явные преимущества на рынке</h2>
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
                            <li class="border-danger border-5 border-start px-2 mb-2">
                                <h6>{{ $item }}</h6>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-md-6 placeholder-glow">
                    <span class="img-fluid placeholder h-100 rounded w-100"></span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <angar-type></angar-type>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 placeholder-glow">
                    <span class="img-fluid placeholder h-100 rounded w-100"></span>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <h3>Заголовок для ангаров</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dolorem quos ex modi totam repellat deserunt recusandae libero fuga excepturi suscipit ea dolorum, placeat nesciunt eaque magnam veniam laudantium itaque!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dolorem quos ex modi totam repellat deserunt recusandae libero fuga excepturi suscipit ea dolorum, placeat nesciunt eaque magnam veniam laudantium itaque!
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora minima aliquid repudiandae nihil facere cupiditate corporis odio amet modi eligendi, quas possimus cum atque. Possimus culpa id ullam in asperiores!
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection