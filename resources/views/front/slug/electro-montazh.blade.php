@extends('front.slug.single-slug')

@section('slug-content')
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        ОСВЕЩЕНИЕ КАК ИСКУССТВО 
                    </h2>
                    <p>Профессиональный монтаж осветительных приборов</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <p>
                        Специализированное подразделение компании {{ $company->name }} готово на профессиональном уровне осуществить монтаж и шефмонтаж светотехнического оборудования. 
                        Наши опытные специалисты готовы выполнить работы любой сложности, осуществляя как самостоятельный монтаж, так и сотрудничая с другими подрядными организациями. 
                        Мы работаем с объектами любого типа – от жилых помещений до коммерческих и производственных объектов.
                    </p>
                </div>
                <div class="col">
                    <p>
                        В нашем ассортименте представлены разнообразные модели светильников, обеспечивающие оптимальное освещение для любых помещений. 
                        Гарантируем высокое качество нашей продукции и профессиональный подход к выполнению каждого заказа. 
                        Мы стремимся к тому, чтобы каждый наш клиент остался доволен результатом и получил качественное освещение для своего объекта.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        Наши преимущества
                    </h2>
                    <p>
                        Мы способны на профессиональном уровне осуществить монтаж и шефмонтаж светотехнического оборудования. 
                        Наши опытные специалисты готовы выполнить работы любой сложности, осуществляя как самостоятельный монтаж, так и сотрудничая с другими подрядными организациями.
                        Мы работаем с объектами любого типа – от жилых помещений до коммерческих и производственных объектов.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                @php
                    $advantages = [
                        (object) ['icon' => 'fa fa-users', 'text' => 'Опытные специалисты'],
                        (object) ['icon' => 'fa fa-thumbs-o-up', 'text' => 'Монтаж любой сложности'],
                        (object) ['icon' => 'fa fa-car', 'text' => 'Оперативный выезд на объект'],
                        (object) ['icon' => 'fa fa-file-text-o', 'text' => 'Гибкие условия сотрудничества'],
                    ]
                @endphp

                @foreach ($advantages as $item)
                    <div class="col mb-4 mb-lg-0">
                        <div class="border border-danger rounded text-center p-4 h-100">
                            <i class="{{ $item->icon }} fa-4x mb-4"></i>
                            <h5>{{ $item->text }}</h5>
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
                        ЧТО МЫ ПРЕДЛАГАЕМ СВОИМ КЛИЕНТАМ
                    </h2>
                </div>
            </div>
            @php
                $items = [
                    (object)['title' => 'КАЧЕСТВО И БЕЗОПАСНОСТЬ', 'text' => 'Монтажные работы выполняют специалисты компании Сибгеотерм с высокой квалификацией и необходимыми группами допуска по электробезопасности.', 'image' => '/assets/images/electro-2.jpeg'],
                    (object)['title' => 'ПРОФЕССИОНАЛЬНЫЙ МОНТАЖ', 'text' => 'Мы индивидуально подходим к каждому проекту, учитывая требования заказчика для обеспечения высокого качества и эффективности освещения на объектах.', 'image' => '/assets/images/electro-1.jpeg'],
                    (object)['title' => 'СЕРВИС И ГАРАНТИЯ', 'text' => 'Предоставляем гарантию на все проведенные работы 1 год, а на наше светотехническое оборудование – до 5-х лет с заменой светильника, если он вышел из строя.', 'image' => '/assets/images/electro-3.jpeg'],
                ]
            @endphp
            <what-we-introduce
                :items='@json($items)'
            ></what-we-introduce>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        МОНТАЖ ОСВЕЩЕНИЯ НА ЛЮБЫХ ОБЪЕКТАХ
                    </h2>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-2 g-0">
                @php
                    $wheres = [
                        (object) ['name' => 'ОФИСЫ', 'image' => 'https://ledalen.ru/thumb/2/jLYPwSBfcC_WdA56WYIWLw/440c362/d/montazh_osveshcheniya_ofisov.jpg'],
                        (object) ['name' => 'ТОРГОВЫЕ ЦЕНТРЫ', 'image' => 'https://ledalen.ru/thumb/2/vg-otbLwAdRwzV6REsUriQ/440c362/d/montazh_osveshcheniya_torgovyh_centrov.jpg'],
                        (object) ['name' => 'ПОЛИКЛИНИКИ', 'image' => 'https://ledalen.ru/thumb/2/rgzx5e18KTH1bLs6k65TYg/440c362/d/montazh_osveshcheniya_gorodskih_poliklinik.jpg'],
                        (object) ['name' => 'ШКОЛЫ', 'image' => 'https://ledalen.ru/thumb/2/Fs8obVTCnBX55qyeTnSAwg/440c362/d/montazh_osveshcheniya_shkol.jpg'],
                        (object) ['name' => 'ДЕТСКИЕ САДЫ', 'image' => 'https://ledalen.ru/thumb/2/_7kREOUJ1FRyQsb9Z4ZGJA/440c362/d/montazh_osveshcheniya_detskogo_sada.jpg'],
                        (object) ['name' => 'КОВОРКИНГ', 'image' => 'https://ledalen.ru/thumb/2/0CDWuCCgJ_xoOqhGKM93pQ/440c362/d/montazh_osveshcheniya_kovorkinga.jpg'],
                        (object) ['name' => 'РЕСТОРАНЫ', 'image' => 'https://ledalen.ru/thumb/2/ULWIClHPgR5qS1ynsyxJDg/440c362/d/montazh_osveshcheniya_restoranov.jpg'],
                        (object) ['name' => 'АВТОСАЛОНЫ', 'image' => 'https://ledalen.ru/thumb/2/Btb5W7u9RJtyMB1cln3-LQ/440c362/d/montazh_osveshcheniya_avtosalonov.jpg'],
                        (object) ['name' => 'САЛОНЫ КРАСОТЫ', 'image' => 'https://ledalen.ru/thumb/2/tALJWxUFodGa1KiuJn2dCQ/440c362/d/montazh_osveshcheniya_salonov_krasoty.jpg'],
                        (object) ['name' => 'МАГАЗИНЫ', 'image' => 'https://ledalen.ru/thumb/2/UsPAmV2hMDpUh1V9ttHE8w/440c362/d/montazh_osveshcheniya_magazinov.jpg'],
                    ]
                @endphp
                @foreach ($wheres as $item)
                    
                    <div class="col p-0">
                        <div class="bg-image w-100 position-relative p-3 d-flex align-items-end" style="min-height: 300px;background:url( {{ $item->image }} )">
                            <div class="overlay position-absolute w-100 h-100 top-0" style="background: rgba(0,0,0,.6)"></div>
                            <h3 class="position-relative section-title">
                                {{ $item->name }}
                            </h3>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
    {{-- slider --}}
    <section>
        @php
            $images = [
                (object) ['id' => 1, 'path' => '//via.placeholder.com/512x512'],
                (object) ['id' => 2, 'path' => '//via.placeholder.com/515x515'],
                (object) ['id' => 3, 'path' => '//via.placeholder.com/520x520'],
                (object) ['id' => 4, 'path' => '//via.placeholder.com/510x510'],
            ]    
        @endphp
        <page-slider
            title="РЕАЛИЗОВАННЫЕ ПРОЕКТЫ"
            subtitle='Мы разрабатываем индивидуальные работающие концепции освещения, производим любые световые конструкции и фигуры непосредственно под бизнес клиента.'
            :images='@json($images)'
        >
            <div class="border border-light rounded p-3 h-100 d-flex align-items-center">
                <div class="d-block">
                    <h4>индивидуальные работающие концепции освещения</h4>
                    <p class="text-red">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum itaque excepturi dolores molestiae sint alias obcaecati facilis sapiente, in unde nostrum soluta suscipit tempore maiores at voluptates, illo, praesentium quam?</p>
                </div>
            </div>
        </page-slider>
    </section>
@endsection