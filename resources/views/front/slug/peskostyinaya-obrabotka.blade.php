@extends('front.slug.single-slug')

@section('slug-content')
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                @php
                $advs = [
                    (object) [ 'icon' => 'fa fa-check', 'name' => 'Профессиональный подход', 'text' => 'Подбираем необходимый абразив для каждого вида работ' ],
                    (object) [ 'icon' => 'fa fa-check', 'name' => 'Работаем быстро, от 1 дня', 'text' => 'Круглосуточный режим и подключение дополнительных бригад при необходимости' ],
                    (object) [ 'icon' => 'fa fa-check', 'name' => 'Гарантийное обслуживание', 'text' => 'Все услуги мы оказываем по договору. На все выполненные работы действует гарантия.' ],
                    ]
                    @endphp
            @foreach ($advs as $ad)
            <div class="col mb-4 mb-md-0">
                <div class="bg-red-dark p-3 py-4 rounded h-100">
                    <h5> {{ $ad->name }} </h5>
                    <p class="mb-0">{{ $ad->text }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>

    <section>
        @php
            $items = [
                (object) ['id' => 1, 'title' => 'Ржавчина ', 'text' => 'Один из самых востребованных способов обработки металлов. Ее применяют для снятия ржавчины и окалины, удаления старого лакокрасочного слоя. С помощью пескоструя увеличивают шероховатость поверхности и обезжиривают ее перед покраской для улучшения адгезии покрытия к металлу', 'image' => '/assets/images/peskostryi/rzhavchina.jpeg'],
                (object) ['id' => 2, 'title' => 'Следы после пожара ', 'text' => 'С помощью пескоструйной обработки можно очистить поверхность от последствий пожара. Абразивные частицы ударяясь с потоком воздуха о пострадавшую поверхность вычищают мягкие, рыхлые слои до более твердых слоев. При этом абразив равномерно проникает во все полости не оставляя следов как после электроинструмента', 'image' => '/assets/images/peskostryi/pozhar.jpeg'],
                (object) ['id' => 3, 'title' => 'Штукатурка ', 'text' => 'Пескоструйная обработка поверхностей после штукатурки помогает полностью убрать весь образив материала, чтобы предотвратить в дальнейшем некачественное нанесения покрытий', 'image' => '/assets/images/peskostryi/shtukaturka.jpeg'],
                (object) ['id' => 4, 'title' => 'Налёт ', 'text' => 'С помощью пескоструйной обработки, можно удалить разные вида налета с различных поверхностей до 99% очистив их с помощью мелкограннулированного песка подаваемого при высоком давлении. Этот метод показывает себя намного эффективнее стандартных способов очистки', 'image' => '/assets/images/peskostryi/nalet.jpeg'],
                (object) ['id' => 5, 'title' => 'Плесень ', 'text' => 'Очень частая проблема борьбы с плесенью на поверхностях стен в подвалах жилых домов и торговых центров, это обусловлено способом размножения бактерий, при обработке очень важно уничтожить ее всю, но это тяжело достягается стандартными способами. При помощи пескоструйной обработки можно уничтожить ее в самых труднодуступных местах, благодаря высокому давлению подаваемого песка.', 'image' => '/assets/images/peskostryi/plesen.jpeg'],
                (object) ['id' => 6, 'title' => 'Цемент ', 'text' => 'Пескоструйная обработка крайне полезна во время ремонта, ведь именно с помощью этого способа обработки поверхностей можно без труда избавиться от многих проблем. Часто есть нужда очистить стены до их "первозданного" состояния, но очень тяжело убирать цемент, который остается мелкой крошкой на всей поверхности. С помощью пескоструйной обработки можно забыть об этой проблеме!', 'image' => '/assets/images/peskostryi/cement.jpeg'],
                (object) ['id' => 7, 'title' => 'Пятна соли ', 'text' => 'Пескоструйная обработка позволяет без труда и больших затрат времени обновить фасад здания после зимнего сезона, после которого, как правило, остаются следы на каменных фасадов от соли, попадающей на поверхности с снегом или дождем и оставляющая неприятные разводы и пятна.', 'image' => '/assets/images/peskostryi/rzhavchina.jpeg'],
                (object) ['id' => 8, 'title' => 'Битум ', 'text' => 'Пескоструйная обработка является незаменимым помощником при кровельных работах. С помощью пескоструйной обработки можно с лугкостью избавиться от битума, очистив нужную поверхность полностью от самого битума и следов от гудрона, который содержится в нем', 'image' => '/assets/images/peskostryi/bitum.jpeg'],
                (object) ['id' => 9, 'title' => 'Лакокрасочные покрытия ', 'text' => 'Пескоструйная обработка металов и других материалов от целикового слоя лкп или же от его следов - является распространненной услугой даже в автомобильной сфере, ведь с помощью пескоструйной обработки, можно быстро и без особого труда очистить от следов лако красочных покрытий большую по площади поверхность, при это не повредив сам материал на который она нанесена', 'image' => '/assets/images/peskostryi/rzhavchina.jpeg'],
            ]
        @endphp
        <pesko-strui
            title="Что можно очистить таким способом"
            subtitle=""
            :items='@json($items)'
        ></pesko-strui>
    </section>

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="section-title">
                        Цены на услуги пескоструйной обработки
                    </h2>
                    <p>
                        Цены могут отличаться в зависимости от конкреттного случая.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                @php
                    $prices = [
                        (object) ['name' => 'Очистка древесины', 'price' => '180', 'image' => '//via.placeholder.com/128x128'],
                        (object) ['name' => 'Очистка кирпича', 'price' => '150', 'image' => '//via.placeholder.com/128x128'],
                        (object) ['name' => 'Очистка бетона', 'price' => '180', 'image' => '//via.placeholder.com/128x128'],
                        (object) ['name' => 'Очистка металла', 'price' => '280', 'image' => '//via.placeholder.com/128x128'],
                        (object) ['name' => 'Альпинисты', 'price' => '280', 'image' => '//via.placeholder.com/128x128'],
                        (object) ['name' => 'Покраска сооружений', 'price' => '50', 'image' => '//via.placeholder.com/128x128'],
                    ]
                @endphp
                @foreach ($prices as $p)
                    <div class="col mb-4">
                        <div class="border border-light p-3 rounded d-flex align-items-center justify-content-between">
                            <div class="d-block">
                                <h5> {{ $p->name }} </h5>
                                <span class="roadradio">
                                    Цена: от 
                                        <span class="fs-4 text-red">
                                            {{ $p->price }} руб/м2
                                        </span>
                                </span>
                            </div>
                            <img src="{{ $p->image }}" alt="{{ $p->name }}" class="img-fluid" style="margin-left: 12px">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="section-title">
                        С нами <span class="text-red">выгодно</span> и <span class="text-red">комфортно</span> работать
                    </h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                @php
                    $advs = [
                        (object) ['title' => 'Полный комплекс работ', 'text' => 'Мы способны взять под ключ: пескоструйную обработку, промышленный альпинизм, покрасочные работы', 'image' => '//via.placeholder.com/128x128'],
                        (object) ['title' => 'Оптимальная стоимость', 'text' => 'Низкие расценки за счёт автоматизации производства. Действует система скидок', 'image' => '//via.placeholder.com/128x128'],
                        (object) ['title' => 'Срочный выезд', 'text' => 'Готовы приехать в день оставления заявки или на следующий день. Выполним работу в сжатые сроки!', 'image' => '//via.placeholder.com/128x128'],
                    ]
                @endphp
                @foreach ($advs as $a)
                    <div class="col mb-4 mb-md-0">
                        <div class="border border-danger p-3 text-center rounded h-100">
                            <img src="{{ $a->image }}" alt="{{ $a->title }}" class="img-fluid mb-4">
                            <h4>{{ $a->title }}</h4>
                            <p class="mb-0">{{ $a->text }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        @php
            $images = [
                (object) ['id' => 1, 'path' => '/assets/images/peskostryi/bitum.jpeg'],
                (object) ['id' => 2, 'path' => '/assets/images/peskostryi/lpk.jpeg'],
                (object) ['id' => 3, 'path' => '/assets/images/peskostryi/nalet.jpeg'],
                (object) ['id' => 4, 'path' => '/assets/images/peskostryi/pozhar.jpeg'],
                (object) ['id' => 5, 'path' => '/assets/images/peskostryi/cement.jpeg'],
            ]
        @endphp
        <page-slider
            title='Выполненные заказы'
            subtitle=''
            :images='@json($images)'
        >
            <div class="border border-light rounded p-3 d-flex align-items-center h-100">
                <h4>
                    Заказы клиентов
                </h4>
            </div>
        </page-slider>
    </section>
@endsection