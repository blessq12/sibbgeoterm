@extends('front.slug.single-slug')

@section('slug-content')
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        Фасадные работы в Томске и области 
                    </h2>
                    <p>
                        Компания сибгеотерм выполняет весь комплекс фасадных работ в Томске и области : ремонт, обустройство и монтаж фасада здания. <br>
                        Фасадные работы от сибгеотерм обеспечивают зданию: 
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                @php
                    $results = [
                        (object) ['icon' => 'fa fa-home fa-3x', 'name' => 'Улучшенный внешний вид', 'text' => 'Здание приобрете современную оттделку с реализацией ваших дизайнерских пожеланий и защитой от внешней среды'],
                        (object) ['icon' => 'fa fa-sun-o fa-3x', 'name' => 'Теплоизоляция', 'text' => 'Поддержание внутри помещения комфортной температуры, снижение трат на отопление и кондиционирование'],
                        (object) ['icon' => 'fa fa-shield fa-3x', 'name' => 'Огнестойкость', 'text' => 'Сохраенение прочности конструкции здания при распространения огня и воздействия высоких температур'],
                        (object) ['icon' => 'fa fa-bell-slash fa-3x', 'name' => 'Звукоизоляция', 'text' => 'Защита от внешнего звука, проникающего в помещение, обеспечение тихой и спокойной обсттановки'],
                    ]
                @endphp

                @foreach ($results as $res)
                    <div class="col mb-4">
                        <div class="border border-light overflow-hidden rounded p-4">
                            <div class="d-flex align-items-center mb-3">
                                <i class="{{ $res->icon }} text-danger" style="margin-right: 12px"></i>
                                <h3 class="mb-0">{{ $res->name }}</h3>
                            </div>
                            <p class="mb-0">
                                {{ $res->text }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-lg-2">
                    <img src="//via.placeholder.com/200x200" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-10">
                    <h2 class="section-title">
                        Почему выбирают нас
                    </h2>
                    <p>
                        Специалисты сибгеотерм проанализируют вашу ситуацию с точки зрения функциональных особенностей здания, природных и климатических условий, экономических и дизайнерских требований.
                    </p>
                    <p>
                        Предложенные варианты реализации фасадных систем, строительные маттериалы и решения будут направлены на достяжение максимального эффекта с учетом ваших требованиий и пожеланий.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 pt-4">
                @php
                    $blocks = [
                        (object) ['icon' => 'fa fa-user fa-3x', 'name' => 'Комфорт и безопасность', 'text' => 'Вы получаете здание с комортной и безопасной атмосферой'],
                        (object) ['icon' => 'fa fa-user fa-3x', 'name' => 'Реализация ваших идей', 'text' => 'Разнообразие выбора отделки и дизайнерских решений'],
                        (object) ['icon' => 'fa fa-user fa-3x', 'name' => 'Гарантии', 'text' => 'Многолетняя гарантия на выполненные работы'],
                    ]
                @endphp
                @foreach ($blocks as $item)
                    <div class="col mb-4 pt-5 pt-md-0">
                        <div class="bg-light text-dark rounded position-relative text-center d-flex justify-content-center align-items-center p-3" style="min-height: 250px">
                            <div class="position-absolute d-flex justify-content-center w-100" style="left: 0; top:-40px">
                                <div class="bg-danger text-light rounded-circle d-flex align-items-center justify-content-center" style="height: 80px; width: 80px">
                                    <i class="{{ $item->icon }}"></i>
                                </div>
                            </div>
                            <div>
                                <h4>{{ $item->name }}</h4>
                                <p class="mb-0">{{ $item->text }}</p>
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
                <div class="col-12">
                    <h2 class="section-title">
                        Занимаемся отделкой фасадов, декором под ключ 
                    </h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @php
                    $slugs = [
                        (object) ['name' => 'Сайдинг', 'desc' => 'Монтаж винилового, металического и других видов сайдинга', 'image' => 'https://fasadnye-raboty.ru/media/widgetkit/service_siding-b485e166beb8a65e000cfc6abf4aae27.jpg'],
                        (object) ['name' => 'Фасадные панели', 'desc' => 'Термопанели, фасадные панели под различные текстуры', 'image' => 'https://fasadnye-raboty.ru/media/widgetkit/fasadnye-paneli-ebf63f3239177c5ea055d890478e6151.jpg'],
                        (object) ['name' => 'Штукатурка и покраска', 'desc' => 'В том числе декоративная штукатурка фасадов и покраска', 'image' => 'https://fasadnye-raboty.ru/media/widgetkit/pokraska-fasadov-be77a52e92b279b849e1248bcbf33f02.jpg'],
                        (object) ['name' => 'Утепление фасада', 'desc' => 'Различные виды утепления стен и фасадов зданий', 'image' => 'https://fasadnye-raboty.ru/media/widgetkit/uteplenie-fasadov-499170bc314a65cd8086a9712d352602.jpg'],
                        (object) ['name' => 'Натуральные камень', 'desc' => '', 'image' => 'https://fasadnye-raboty.ru/media/widgetkit/stone-fasade-62fa6c1784a93e47f8d2f5b3c6496d0d.jpg'],
                        (object) ['name' => 'Кирпич', 'desc' => '', 'image' => 'https://fasadnye-raboty.ru/media/widgetkit/kirpich-fasade-4281161d2239177c10ad2937f1778620.jpg'],
                    ]
                @endphp
                    @foreach ($slugs as $item)
                        <div class="col mb-4">
                            <div class="position-relative rounded p-3 h-100 d-flex align-items-end overflow-hidden" style="min-height: 200px">
                                <img src="{{ $item->image }}" alt="" class="img-fluid position-absolute h-100 w-100" style="top: 0; left: 0%;">
                                <div class="overlay"></div>
                                <div class="d-flex align-items-center justify-content-between position-relative">
                                    <h5 class="w-50 fs-6">{{ $item->name }}</h5>
                                    <p class="mb-0" style="max-width: 60%; font-size: .8rem; font-weight: 200; padding-left:12px">{{ $item->desc }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                @php
                    $types = [
                        (object) ['name' => 'подготовительные работы', 'image' => 'https://tehstroy-city.ru/images/category/obshchestroitelnye/45464646.jpg', 'slugs' => [
                            (object)['name'=>'Монтаж строительных лесов', 'price' => 'от 90 руб/м²'],
                            (object)['name'=>'Демонтажные работы', 'price' => 'от 200 руб/м²'],
                            (object)['name'=>'Очистка фасадов, стен и цоколя', 'price' => 'от 100 руб/м²'],
                            (object)['name'=>'Оклейка пленкой', 'price' => 'от 50 руб/м²'],
                        ]],
                        (object) ['name' => 'отделка фасадов', 'image' => 'https://tehstroy-city.ru/images/category/obshchestroitelnye/1/otdelka-fasadov.jpg', 'slugs' => [
                            (object)['name'=>'Штукатурка', 'price' => 'от 550 руб/м²'],
                            (object)['name'=>'Плитка', 'price' => 'от 1 200 руб/м²'],
                            (object)['name'=>'Сайдинг, вагонка', 'price' => 'от 350 руб/м²'],
                            (object)['name'=>'Камень, кирпич', 'price' => 'от 1 000 руб/м²'],
                        ]],
                        (object) ['name' => 'Дополнительные работы', 'image' => 'https://tehstroy-city.ru/images/category/obshchestroitelnye/1/dop.jpg', 'slugs' => [
                            (object)['name'=>'Утепление', 'price' => 'от 350 руб/м²'],
                            (object)['name'=>'Монтаж декоративных элементов', 'price' => 'от 800 руб/м²'],
                            (object)['name'=>'Монтаж водостока', 'price' => 'от 400 руб/м²'],
                            (object)['name'=>'Погрузочно-разгрузочные работы', 'price' => 'от 1 000 руб/м²'],
                        ]]
                    ]
                @endphp
                @foreach ($types as $type)
                    <div class="col mb-4">
                        <div class="bg-danger rounded overflow-hidden">
                            <div class="px-2 py-4 text-center">
                                <h5 class="mb-0">{{ $type->name }}</h5>
                            </div>
                            <div class="bg-image" style="min-height: 260px; background: url({{ $type->image }})"></div>
                            <div class="bg-light px-2 py-4" style="min-height: 150px">
                                <ul class="text-dark">
                                    @foreach ($type->slugs as $item)
                                        <li class="d-flex justify-content-between">
                                            <b>{{ $item->name }}</b>
                                            {{ $item->price }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="px-2 py-4 text-center">
                                <vbutton target="modal" class="btn btn-outline-light w-100">
                                    Заказать
                                </vbutton>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <page-slider
            title="Выполненные заказы"
            subtitle=""
            :images='@json($slug->portfolioImages)'
        >
            <div class="border border-light rounded p-3 d-flex align-items-center h-100">
                <div class="d-block">
                    <h4>
                        Завершенные заказы по фасадным работам
                    </h4>
                </div>
            </div>
        </page-slider>
    </section>

@endsection