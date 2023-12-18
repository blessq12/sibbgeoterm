@extends('layouts.front')

@section('title', 'Строительство и проектирование складских и промышленных зданий')
@section('desc' , 'Описания для сендвич панелей')


@section('content')
    <x-front.page-banner
        background='https://fsc-group.ru/bitrix/templates/tis/img/FSCbanner_cold.jpg'
        title='Строительство и проектирование складских и промышленных зданий'
    >
    <button type="button" class="btn btn-outline-light btn-lg">Задать вопрос</button>
    </x-front.page-banner>

    @php
        $advantages = [
            (object)['name' => 'Проектирование'],
            (object)['name' => 'Возведение крупномасштабных объектов, складов, ангаров, хранилищ для сельского хозяйства, монолитных конструкций'],
            (object)['name' => 'Монтаж и установка канализационных, отопительных и слаботочных систем, водообеспечение, электросетей'],
            (object)['name' => 'Составление смет'],
            (object)['name' => 'Генеральный подряд'],
            (object)['name' => 'Технический заказчик'],
            (object)['name' => 'Работы по проектированию и строительству складских, производственных, логистических и коммерческих объектов'],
            (object)['name' => 'Воплощение в жизнь и дальнейшая эксплуатация коммерческих сооружений'],
        ]
    @endphp

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        СТРОИМ И ПРОЕКТИРУЕМ ПРОМЫШЛЕННЫЕ СООРУЖЕНИЯ И СКЛАДСКИЕ КОМПЛЕКСЫ В Томске И ОБЛАСТИ.
                    </h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($advantages as $advan)    
                    <div class="col mb-4">
                        <div class=" p-3 border rounded border-light h-100">
                            {{ $advan->name }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>        
    </section>
    @php
        $odds = [
            (object) ['name' => 'Качество – соблюдение всех стандартов строительства.', 'icon' => 'fa fa-star'],
            (object) ['name' => 'Сжатые сроки сдачи объектов.', 'icon' => 'fa fa-calendar'],
            (object) ['name' => 'Компетентные высококвалифицированные сотрудники.', 'icon' => 'fa fa-users'],
            (object) ['name' => 'Разработка каждого этапа совместно с клиентом.', 'icon' => 'fa fa-tasks'],
            (object) ['name' => 'Гибкая ценовая политика.', 'icon' => 'fa fa-usd'],
            (object) ['name' => 'Использование строительных материалов, соответствующих нормам ГОСТа.', 'icon' => 'fa fa-check-square-o'],
        ]
    @endphp
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        КОНКУРЕНТНЫЕ ПРЕИМУЩЕСТВА, СОТРУДНИЧЕСТВА С НАМИ
                    </h2>
                </div>
            </div>
            <div class="row row-cols row-cols-md-2 row-cols-lg-3">
                @foreach ( $odds as $odd )
                <div class="col mb-4" style="min-height: 200px">

                    <div class="p-3 border border-light rounded h-100 d-flex align-items-end position-relative overflow-hidden">
                        <i class="position-absolute {{ $odd->icon }}" style="font-size: 175px; opacity: .3; transform: rotate(15deg); top: -50px; left:-50px"></i>
                        <h5> {{ $odd->name }} </h5>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        Что мы строим
                    </h2>
                    <p>
                        Мы предлагаем разные типы объектов: однопролетные и многопролетные здания, односкатные, двускатные и ассиметричные сооружения. 
                        Изготовление осуществляется из прочных и легких материалов, стоимость которых доступна как для крупных предпринимателей, так и для частных лиц.
                    </p>
                </div>
            </div>
            <div class="row align-items-center mb-4">
                <div class="col-12 col-lg-5">
                    <h4 class="section-title mb-4">
                        Промышленные здания
                    </h4>
                    @php
                        $prom = [
                            (object)['name' => 'Склады'],
                            (object)['name' => 'Ангары'],
                            (object)['name' => 'Металлокаркасы'],
                            (object)['name' => 'Котельни'],
                            (object)['name' => 'Электрозарядные станции'],
                            (object)['name' => 'Цеха'],
                            (object)['name' => 'Складские здания'],
                            (object)['name' => 'Заводы'],
                            (object)['name' => 'Здания из металлоконструкций'],
                        ]
                    @endphp
                    <ul>
                        @foreach ($prom as $item)
                            <li>{{ $item->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-lg-7">
                    <img src="//via.placeholder.com/1920x1080" alt="" class="img-fluid rounded">
                </div>
            </div>
            <div class="row align-items-center flex-row-reverse mb-4">
                <div class="col-12 col-lg-5">
                    <h4 class="section-title mb-4">
                        Сельскохозяйственные сооружения
                    </h4>
                    @php
                        $prom = [
                            (object)['name' => 'Хранилища'],
                            (object)['name' => 'Ангары'],
                            (object)['name' => 'Коровники'],
                            (object)['name' => 'Зернохранилища'],
                            (object)['name' => 'Пристройки'],
                            (object)['name' => 'Овощехранилища'],
                            (object)['name' => 'Склады'],
                            (object)['name' => 'Свинарники'],
                            (object)['name' => 'Животноводческие комплексы'],
                        ]
                    @endphp
                    <ul>
                        @foreach ($prom as $item)
                            <li>{{ $item->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-lg-7">
                    <img src="//via.placeholder.com/1920x1080" alt="" class="img-fluid rounded">
                </div>
            </div>
            <div class="row align-items-center mb-4">
                <div class="col-12 col-lg-5">
                    <h4 class="section-title mb-4">
                        Другие быстровозводимые здания
                    </h4>
                    @php
                        $prom = [
                            (object)['name' => 'Магазины'],
                            (object)['name' => 'Автостоянки'],
                            (object)['name' => 'Паркинги'],
                            (object)['name' => 'Автомойки'],
                            (object)['name' => 'Павильоны'],
                            (object)['name' => 'Торговые здания'],
                            (object)['name' => 'Энергоцентры'],
                            (object)['name' => 'Автосалоны'],
                            (object)['name' => 'Автоцентры'],
                        ]
                    @endphp
                    <ul>
                        @foreach ($prom as $item)
                            <li>{{ $item->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-lg-7">
                    <img src="//via.placeholder.com/1920x1080" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

@endsection
