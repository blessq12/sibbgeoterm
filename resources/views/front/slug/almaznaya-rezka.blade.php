@extends('front.slug.single-slug')

@section('slug-content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-red-dark rounded text-light p-5">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <h3>Бурение в чистовых условиях</h3>
                            <p>
                                Если стоит главная задача - требуется сохранить целостность отделки, то этот вариант сверления для вас. 
                                В настоящее время это возможно благодаря специальному устройству - рециркулятору. Для этого надевается водосборное кольцо, через которую циркулирует вода. 
                                Она омывает края режущего элемента и тем самым собирает всю грязи и пыль в емкость. По завершении работ остается только вылить эту воду с грязью. 
                                Это исключает необходимость использования строительного пылесоса и получить нужный результат.
                            </p>
                            <p>
                                С помощь такой установки все задачи будут выполнены оперативно и качественно, а ваш ремонт не пострадает!
                            </p>
                        </div>
                        <div class="col-12 col-md-6">
                            <iframe width="100%" class="rounded" height="315" src="https://www.youtube.com/embed/u2oohp1I-7U?si=xDhp8VjH6JTQSaLE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<section>
    @php
        $advants = [
            (object) ['name' => 'Скорость', 'text' => 'Самый быстрый способ, практически не имеет минусов', 'icon' => 'fa fa-clock-o'],
            (object) ['name' => 'Надежность', 'text' => 'Это безударный способ, поэтому трещины не появятся', 'icon' => 'fa fa-shield'],
            (object) ['name' => 'Стоимость', 'text' => 'Благодаря скорости сокращаются и расходы', 'icon' => 'fa fa-money'],
            (object) ['name' => 'Точность', 'text' => 'Края получаются идеально круглые и гладкие', 'icon' => 'fa fa-balance-scale'],
        ]
    @endphp
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            
            @foreach ($advants as $item)
            <div class="col">
                <div class="border p-3 border-danger rounded h-100 text-center d-flex align-items-start" >
                    <div>
                        <i class="{{ $item->icon }} mb-4" style="font-size: 65px"></i>
                        <h5>{{ $item->name }}</h5>
                        <p>{{ $item->text }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 position-relative">
                <h2 class="section-title">
                    Только сертифицированное оборудованиие
                </h2>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <object data="{{ asset('assets/images/82da17c.svg') }}" class="mb-4"  type=""></object>
                <p class="mb-4 mb-md-4">
                    Наш инструмент способен просверлить отверстия в таких материалах, которые трудно доступны или полностью недоступны другому оборудованию.
                    При попадании на арматуру, мы сверлим ее, а не начинает бурить новое отверстие рядом.
                    Уровень шума практически равен нулю, ваши соседи даже не узнают, что вы проводили работы.
                </p>

            </div>
            <div class="col-12 col-md-6">
                <ul class="d-flex p-0 m-0 align-items-center">
                    <li><img src="{!! file_exists(public_path('assets/images/88313ec.jpeg')) ? asset('assets/images/88313ec.jpeg') : '//via.placeholder.com/240x360' !!}" alt="" class="img-fluid"></li>
                    <li class="mx-4"><img src="{!! file_exists(public_path('assets/images/e31cdff.jpeg')) ? asset('assets/images/e31cdff.jpeg') : '//via.placeholder.com/240x360' !!}" alt="" class="img-fluid"></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">
                    услуги
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <equipment></equipment>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">
                    Предварительный рассчет стоимости
                </h2>
            </div>
        </div>
        <div class="row">
            кулькулятор
        </div>
    </div>
</section>

<section>
    <angar-slider></angar-slider>
</section>

@endsection