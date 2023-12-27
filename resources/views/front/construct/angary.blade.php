@extends('layouts::front')

@section('title','Ангары арочного типа')
@section('desc','Описание для ангаров арочного типа')

@section('content')
    <x-front.page-banner 
        background="/assets/images/banner.jpg"
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
                <div class="col-12 col-md-6">
                    <div class="rounded bg-image h-100" style="background: url('/assets/images/banner.jpg')"></div>
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
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
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
                <div class="col-12 col-lg-8">
                    <div class="row flex-row flex-md-column w-lg-100">
                        <div class="col mb-4">
                            <div class="border border-2 rounded border-light p-3">
                                <h3 class="border-start border-danger border-5 px-4">
                                    Строительство
                                </h3>
                                <div class="row row-cols-2">
                                    <div class="col">
                                        <ul class="m-0">
                                            <li>Фундамент с закладными элементами</li>
                                            <li>Изготовление арок для ангара</li>
                                            <li>Возведение и монтаж арочной конструкции</li>
                                            <li>Монтаж торцевых стен</li>
                                            <li>Утепление ангара</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="m-0 fw-bold">
                                            <li>3-7 дней</li>
                                            <li>3-4 дней</li>
                                            <li>2-10 дней</li>
                                            <li>2-4 дней</li>
                                            <li>7-21 дней</li>
                                        </ul>
                                    </div>
                                </div>
                                
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
        @php
            $images = [
                (object)['id' => 1, 'path' => '/assets/images/angars/primeri/6.jpeg'],
                (object)['id' => 2, 'path' => '/assets/images/angars/primeri/7.jpeg'],
                (object)['id' => 3, 'path' => '/assets/images/angars/primeri/8.jpeg'],
                (object)['id' => 4, 'path' => '/assets/images/angars/primeri/9.jpeg'],
                (object)['id' => 5, 'path' => '/assets/images/angars/primeri/10.jpeg'],
                (object)['id' => 6, 'path' => '/assets/images/angars/primeri/11.jpeg'],
                (object)['id' => 7, 'path' => '/assets/images/angars/primeri/13.jpeg'],
                (object)['id' => 8, 'path' => '/assets/images/angars/primeri/15.jpeg'],
                (object)['id' => 9, 'path' => '/assets/images/angars/primeri/17.jpeg'],
                (object)['id' => 10, 'path' => '/assets/images/angars/primeri/19.jpeg'],
                (object)['id' => 11, 'path' => '/assets/images/angars/primeri/21.jpeg'],
            ]
        @endphp
        <page-slider
            title="Примеры уже построенных ангаров"
            subtitle="Ниже приведены примеры уже сданых и введеных в эксплуатацию ангаров"
            :images='@json($images)'
        >
            <div class="border-light border p-3 d-flex align-items-center rounded h-100">
                <h4>Для ознакомления представленые уже завершенные проекты, которые сданы в эксплуатацию</h4>
            </div>
        </page-slider>
    </section>
@endsection