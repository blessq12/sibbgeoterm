@extends('front.slug.single-slug')

@section('slug-content')

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="section-title">
                        Развивайте бизнес с отделкой помещений под ключ
                    </h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                
                <div class="col">
                    <div class="bg-image h-100 w-100 rounded" style="background:url(https://myremont.ru/assets/from_origin/upload/resize_cache/iblock/618/600_450_2/618137359e646211f123991f657afb09.jpg); min-height: 300px"></div>
                </div>
                <div class="col">
                    <p>
                        Обновление интерьера может сыграть ключевую роль для вашего бизнеса с точки зрения развития бренда, корпоративной культуры и финансовой отдачи. 
                        Комфортное и функциональное пространство привлекает клиентов, повышает продуктивность сотрудников.
                    </p>
                    <p>
                        В «{{ $company->name }}» выполняем отделку в коммерческих помещениях для малых, средних компаний и крупных предприятий. 
                        Наш опыт включает косметический и капитальный ремонт офисов, магазинов, гостиничного и ресторанного бизнеса. 
                        Мы также ремонтируем технические, складские и производственные помещения.
                    </p>
                </div>
                
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="section-title">
                        Почему мы?
                    </h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4 mb-md-0">
                    <p>
                        От ремонта коммерческого помещения косвенно зависит прибыль организации. 
                        Правильно подобранные оттенки, грамотное освещение и расположение мест повышают работоспособность сотрудников. 
                        Даже небольшое пространство можно сделать максимально функциональным и спланировать рабочие зоны так, чтобы более эффективно задействовать площадь офиса.
                    </p>
                    <ul class="dots">
                        @php
                            $lists = [
                                'Все виды работ без субподрядчиков', 
                                'Наличие лицензии МЧС на монтаж противопожарных систем',
                                'Сами проектируем и сами монтируем',
                                'Возьмём на постгарантийное обслуживание',
                                'Cжатые сроки ,невысокие цены'
                            ]
                        @endphp
                        @foreach ($lists as $li)
                            <li>{{ $li }}</li>
                        @endforeach

                    </ul>
                </div>
                <div class="col">
                    <div class="bg-image w-100 h-100 roudned" style="background: url(/assets/images/otdelka.jpeg);min-height: 300px"></div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- slugs --}}
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="section-title">
                        Наши услуги
                    </h2>
                    <p>
                        Мы экономим время наших клиентов – все отделочные и ремонтные работы выполняются в максимально короткие сроки с высочайшим качеством.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                @php
                    $slugs = [
                        (object) ['name' => 'Косметический ремонт', 'text' => 'Внутренняя отделка с минимальными затратами на материалы. Оптиимальное решение в тех случаях, если нужно обновить интреьер при небольших расходах.', 'price' => '1990', 'image' => 'https://restroymaster.ru/assets/images/articles/vastu-living-room2.jpg' ],
                        (object) ['name' => 'Капитальный ремонт', 'text' => 'Перепланировка помещения, монтаж/демонтаж перегородок, дверных проемов, перенос или прокладка иинженерных систем и вентиляции', 'price' => '2990', 'image' => 'https://www.eremont.ru/upload/iblock/3c7/kapitalnyi6.jpg' ],
                        (object) ['name' => 'Разработка проектов', 'text' => 'Выполним проектирование всех разделов, учтем все технические аспекты, подготовим график строительства и предельно точную итоговую смету', 'price' => '490', 'image' => 'https://gnarch.ru/wp-content/uploads/2019/04/1-3.jpg' ],
                        (object) ['name' => 'Отделочные работы', 'text' => 'Внешнее отражение рабочего пространства, общая картина магазина, исходя их которой складываются определенные впечатления', 'price' => '3490', 'image' => 'https://www.dom-krepost.ru/cache/events/625x500x5dc578efe09c1.jpg' ],
                    ]
                @endphp
                @foreach ($slugs as $e)
                    <div class="col mb-4">
                        <div class="bg-image h-100 w-100 position-relative rounded" style="background: url({{ $e->image }})">
                            <div class="overlay"></div>
                            <div class="position-relative d-flex align-items-end p-3" style="min-height: 300px">
                                <div class="d-block">
                                    <h4>{{ $e->name }}</h4>
                                    <p>{{ $e->text }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section>
        <page-slider
            title='Портфолио'
            subtitle=''
            :images='@json($slug->portfolioImages)'
        >
            <div class="border border-light p-3 d-flex align-items-center rounded h-100">
                <div class="d-block">
                    <h4>Завершенные проекты отделочных работ</h4>
                    <p>
                        Ознакомитьтся с полным порфтолио
                    </p>
                    <a href="#" class="text-red">
                        Перейти в портфолио
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </page-slider>
    </section>

@endsection