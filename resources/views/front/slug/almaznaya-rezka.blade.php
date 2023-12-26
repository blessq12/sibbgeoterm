@extends('front.slug.single-slug')

@section('slug-content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-red-dark rounded text-light p-3 p-md-5">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <h3>Бурение в чистовых условиях</h3>
                            <p>
                                Отверстия в помещениях с отделкой без протечек, системы сбора воды.
                                Работа с вакуумными системами крепления, без дополнительных отверстий.
                                Чистота на рабочих площадках – вся вода и шлам отводятся системой рециркуляции Hilti
                                Чрезвычайно низкий уровень шума при бурении – идеальное решение для работы в жилых зданиях
                                Безударное бурение уменьшает риск повреждения хрупких материалов и позволяет выполнять отверстия возле краев. Например, монтаж поручней на лестничном марше.
                                Обнаружение металлических, деревянных или пластиковых объектов и электрических кабелепроводов на глубине до 150 мм.Простое и быстрое обнаружение объектов, скрытых под поверхностью перед началом бурения, резки или штробления.
                            </p>
                            <p>
                                С помощь такой установки все задачи будут выполнены оперативно и качественно, а ваш ремонт не пострадает!
                            </p>
                        </div>
                        <div class="col-12 col-md-6">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/-eL_hhi22mw?si=gWmK3yjvp3tDEWII" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-4">
            
            @foreach ($advants as $item)
            <div class="col mb-4 mb-md-4 mb-lg-0">
                <div class="border p-3 border-danger rounded h-100 text-center d-flex align-items-start justify-content-center">
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
    <price-calc></price-calc>
</section>

<section>
    @php
        $videos = [
            (object) ['direction' => 'ltr', 'title' => 'Качественные инструменты', 'text' => 'Наш инструмент способен просверлить отверстия в таких материалах, которые трудно доступны или полностью недоступны другому оборудованию. При попадании на арматуру, мы сверлим ее, а не начинает бурить новое отверстие рядом. Уровень шума практически равен нулю, ваши соседи даже не узнают, что вы проводили работы.', 'link' => 'https://www.youtube.com/embed/u2oohp1I-7U?si=Uapyypo5Cf63NPkK', 'image' => '/assets/images/almaz/image_1.jpeg'],
            (object) ['direction' => 'rtl', 'title' => 'Система подачи воды', 'text' => 'Наша система подачи и отвода воды, в промышленных масштабах, значительно ускоряет работы и даже делает возможным бурение там, где нет подключения к водопроводу напрямую. Достаточно только несколько вёдер воды. А в случае работы в квартире, офисе, больнице и т.д. позволяет произвести работы без разбрызгивания воды и затопления, в помещениях с ремонтом без его порчи.', 'link' => 'https://www.youtube.com/embed/lOFWfI069Rg?si=n5OfFF_wqWaarCVz', 'image' => '/assets/images/almaz/image_2.jpeg'],
            (object) ['direction' => 'ltr', 'title' => 'В любых условиях', 'text' => 'Система автоматической подачи позволяет делать работы быстрее, оператор после запуска может производить другие работы, будь то штробление или бурение другого отверстия вручную второй установкой. Так же при помощи данной установки возможно бурение в местах, где присутствие оператора затруднено или должно сводиться к минимуму(большая температура, вредные вещества в воздухе, низкий уровень кислорода, радиация)', 'link' => 'https://www.youtube.com/embed/cqyZPj28dk8?si=HzvA3AEnbQbVtmeT', 'image' => '/assets/images/almaz/image_3.jpeg'],
        ]
    @endphp
    @foreach ($videos as $video)
        <video-content 
            direction='{{ $video->direction }}'
            style='margin-bottom: 100px'
            title='{{ $video->title }}' 
            text='{{ $video->text }}' 
            link='{{ $video->link }}' 
            image='{{$video->image}}'
        ></video-content>
    @endforeach
</section>

<section>
    @php
        $images = [
            (object)['id' => 1, 'path' => '/assets/images/almaz/1.jpeg'],
            (object)['id' => 2, 'path' => '/assets/images/almaz/2.jpeg'],
            (object)['id' => 3, 'path' => '/assets/images/almaz/3.jpeg'],
            (object)['id' => 4, 'path' => '/assets/images/almaz/4.jpeg'],
            (object)['id' => 5, 'path' => '/assets/images/almaz/5.jpeg'],
            (object)['id' => 6, 'path' => '/assets/images/almaz/6.jpeg'],
            (object)['id' => 7, 'path' => '/assets/images/almaz/7.jpeg'],
            (object)['id' => 8, 'path' => '/assets/images/almaz/8.jpeg'],
            (object)['id' => 9, 'path' => '/assets/images/almaz/9.jpeg'],
            (object)['id' => 10, 'path' => '/assets/images/almaz/10.jpeg'],
            (object)['id' => 11, 'path' => '/assets/images/almaz/11.jpeg'],
            (object)['id' => 12, 'path' => '/assets/images/almaz/12.jpeg'],
            (object)['id' => 13, 'path' => '/assets/images/almaz/13.jpeg'],
            (object)['id' => 14, 'path' => '/assets/images/almaz/14.jpeg'],
        ]
    @endphp
    <page-slider 
        title="Примеры работ"
        subtitle="Ниже представлены некоторые из наших завершенных заказов чтобы было понимание результатов"
        :images='@json($images)'
    >
        <div class="d-flex align-items-center h-100 border rounded border-light p-3">
            <div class="d-block">
                <h4 class="text-red">
                    примеры наших выполненных заказов
                </h4>
                <p>Воспользуйтесь навигацией, чтобы ознакомиться с примерами завершенных заказов</p>
            </div>
        </div>
    </page-slider>
</section>

@endsection