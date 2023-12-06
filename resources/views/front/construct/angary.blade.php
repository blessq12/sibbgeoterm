@extends('layouts::front')

@section('title','Ангары арочного типа')
@section('desc','Описание для ангаров арочного типа')

@section('content')
    <x-front.page-banner 
        background="{{ asset('/assets/portfolio/2.jpg') }}"
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
                    
                        <h2 class="section-title">явные преимущества на рынке</h2>
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
                    <div class="h-100 overflow-hidden d-flex position-relative rounded">
                        <img 
                            src="{{ asset('/assets/portfolio/1.jpg') }}" 
                            alt="" 
                            style="align-self: center"
                            class="img-fluid position-absolute "
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <angar-type></angar-type>
    </section>
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">Этапы работы над проектом</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="border border-light border-2 rounded p-4 h-100 d-flex align-items-center bg-light text-dark">
                        <div>
                            <h3 class="border-start border-danger border-5 px-4">
                                Проектирование
                            </h3>
                            <p>
                                На основе задач, которые стоят перед сооружением, с учетом планируемых затрат и требований, мы спроектируем вам проект объекта.
                                Такой проект позволит подобрать оптимальные материалы, рассчитать цену и определить срок строительства сооружения
                            </p>
                            <p class="text-opacity-50 text-dark">
                                Технология позволяет внести изменения в проект даже на этапе строительства и, 
                                например, увеличить длину ангара, создать новые отверстия под окна, двери, ворота и переходы.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row flex-column w-100">
                        <div class="col mb-4">
                            <div class="border border-2 rounded border-light p-3">
                                <h3 class="border-start border-danger border-5 px-4">
                                    Строительство
                                </h3>
                                <ul class="m-0">
                                    <li>Фундамент с закладными элементами</li>
                                    <li>Изготовление арок для ангара</li>
                                    <li>Возведение и монтаж арочной конструкции</li>
                                    <li>Возведение и монтаж арочной конструкции</li>
                                    <li>Монтаж торцевых стен</li>
                                    <li>Утепление ангара</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border border-2 rounded border-light p-3">
                                <h3 class="border-start border-danger border-5 px-4">
                                    Проводимые работы
                                </h3>
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        Проводится монтаж оборудования и чистовая отделка сооружения.
                                    </div>
                                    <div class="col-6 mb-4">
                                        Монтируются узлы системы автоматики, управляющие и исполнительные устройства.
                                    </div>
                                    <div class="col-6 mb-4">
                                        Проводятся другие работы предусмотренные техническим заданием (например, подвод водоснабжения, установка холодильного оборудования).
                                    </div>
                                    <div class="col-6 mb-4">
                                        Производится пуско-накладка системы в целом, которая включает регулировку и настройку.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <angar-sizes></angar-sizes>
    </section>
    <section>
        <angar-slider></angar-slider>
    </section>
@endsection