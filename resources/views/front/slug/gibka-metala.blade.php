@extends('front.slug.single-slug')

@section('slug-content')
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                @php
                    $advs = [
                        (object) [ 'id' => 1, 'icon' => 'fa fa-truck', 'text' => 'Собственный цех и склад'],
                        (object) [ 'id' => 1, 'icon' => 'fa fa-credit-card', 'text' => 'Постоплата'],
                        (object) [ 'id' => 1, 'icon' => 'fa fa-phone', 'text' => 'Оперативный менеджер'],
                    ]
                @endphp
                @foreach ($advs as $item)
                    <div class="col mb-4 mb-md-0">
                        <div class="h-100 border border-danger p-3 d-flex align-items-center justify-content-center rounded" style="">
                            <i class="{{ $item->icon }}" style="margin-right: 12px"></i>
                            <p class="mb-0" style="width: fit-content">
                                {{ $item->text }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <p>
                        Современное строительство динамично развивается, появляются новые материалы, среди которых сэндвич-панели, набирающие все большее распространение при возведении объектов различного назначения. 
                        С целью обеспечить надежность соединения таких конструкций и их надежной защиты от негативного воздействия внешней среды предназначены металлические фасонные элементы.
                    </p>
                    <p>
                        Одновременно фасонный погонаж призван создать завершенный внешний вид фасада, гарантировать необходимую эстетику и привлекательность. 
                        Добиться этого можно только при условии применения качественной продукции, выполненной из надежного металла с дополнительным нанесением полимерного покрытия, исключающего возможность поражения коррозией.
                    </p>
                    <p>
                        Наша компания предлагает клиентам качественный стальной фасонный погонаж, производимый на современном оборудовании из лучших марок сталей с дополнительным формированием защитного полимерного слоя, длительное время сохраняющего яркость своего первоначального цвета. 
                        Широкая палитра используемых цветов RAL позволяет каждому клиенту подобрать оптимальный вариант для каждого конкретного проекта, обеспечивая необходимый уровень эстетики.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="bg-image h-100 rounded" style="background: url('https://profnastil-159.ru/assets/images/articles/11.jpg'); min-height:350px;"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        Виды фасонных элементов
                    </h2>
                    <p class="mb-0">
                        На сегодня существует широкий выбор фасонных изделий из металла, обеспечивающих возможность надежной защиты сэндвич-панелей в любой ситуации. 
                        В каталоге нашей компании представлены:
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                @php
                    $types = [
                        (object) ['name' => 'углы внутренние', 'image' => '//via.placeholder.com/256x256'],
                        (object) ['name' => 'п-образные профили', 'image' => '//via.placeholder.com/256x256'],
                        (object) ['name' => 'полосы', 'image' => '//via.placeholder.com/256x256'],
                        (object) ['name' => 'планки обрамления', 'image' => '//via.placeholder.com/256x256'],
                        (object) ['name' => 'нащельники', 'image' => '//via.placeholder.com/256x256'],
                        (object) ['name' => 'отливы', 'image' => '//via.placeholder.com/256x256'],
                    ]
                @endphp

                @foreach ($types as $type)
                    <div class="col mb-4">
                        <div class="border border-danger p-3 rounded d-flex align-items-center">
                            <img src="{{ $type->image }}" alt="" class="img-fluid rounded" style="max-width: 100px; margin-right: 24px">
                            <h4>{{ $type->name }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                        При необходимости мы готовы провести изготовление любых фасонных элементов по индивидуальным чертежам заказчика в кратчайшие сроки и в любых количествах. Предлагаемый эксклюзивный добор может быть выполнен практически в любых цветах в соответствии с потребностями заказчика, позволяя создавать целостность экстерьера объекта.s
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
                        Наши преимущества
                    </h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4 mb-md-0">
                    <p>
                        Длительный период присутствия на рынке работы с металлом, в том числе производстве фасонных элементов, позволяет нашей компании успешно решать в кратчайшие сроки любые по степени сложности и объему задачи, обеспечивая покупателей высококачественной металлической продукцией на выгодных ценовых условиях.
                    </p>
                    <p>
                        Все детали производятся из оцинкованной стали с дополнительным полимерным напылением, позволяющим полностью исключить негативное воздействие неблагоприятных факторов природного воздействия на металл. 
                        В результате фасонный погонаж прослужит долгие годы без ухудшения своих характеристик.
                    </p>
                </div>
                <div class="col">
                    <ul class="dots">
                        @php
                            $advs = [
                                'широкий ассортимент фасонных элементов',
                                'высокое качество изготовления деталей с полимерным покрытием',
                                'возможность выбора цвета с учетом линейки RAL;',
                                'изготовление продукции в любых объемах;',
                                'оперативность производства и отгрузки заказчику;',
                                'работа по индивидуальным чертежам заказчика;',
                                'гарантия на весь модельный ряд;',
                                'привлекательные ценовые условия;',
                                'особые условия сотрудничества с постоянными клиентами.'
                            ]
                        @endphp
                        @foreach ($advs as $adv)
                            <li class="fw-bolder"> {{ $adv }} </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <page-slider
            title="Примеры готовой продукции"
            subtitle=''
            :images='@json($slug->portfolioImages)'
        >
            <div class="border border-light p-3 rounded d-flex align-items-center h-100">
                <div class="d-block">

                    <h5 class="text-red">Не нашли ответ на свой вопрос?</h5>
                    <h4>звони - <a href="tel:{{ $company->tel }}">{{ $company->tel }}</a></h4>
                </div>
            </div>
        </page-slider>
    </section>
@endsection