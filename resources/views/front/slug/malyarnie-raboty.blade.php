@extends('front.slug.single-slug')

@section('slug-content')

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        Услуги покрасочных работ в Томске и области
                    </h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <p>
                        Внутренняя покраска стен и потолка — наиболее экономичный подход к обновлению вида рабочего пространства и зданий. 
                        Свежие цвета повышают активность сотрудников, производят впечатление на клиентов, подчеркивают корпоративный стиль.
                    </p>
                    <p>
                        С услугами нашей компании по покрасочным работам помещение снова выглядит как новое, и вы быстро возвращаетесь к своим обычным делам.
                    </p>
                    <p>
                        Однако, малярные работы — нечто большее, чем просто перекрашивание. 
                        Это все подготовительные и последующие работы, благодаря которым, помимо справедливого соотношения цены и качества, гарантируем долговечность отделки.
                    </p>
                </div>
                <div class="col">
                    <p>
                        От подготовки основания до нанесения финишного покрытия применяем накопленные знания обо всех типах конструкций, малярных материалах, инструментах и методах, чтобы выполнить работу на профессиональном уровне.
                    </p>
                    <div class="alert alert-success">
                        Хотите знать, сколько стоят покрасочные работы в Томске? Тогда свяжитесь с нами для получения предложения, которое включает стоимость подготовки, покраски, расходных материалов:<br>
                        Телефон <a href="tel:{{ $company->tel }}" class="text-dark">{{ $company->tel }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- price --}}
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        Средние цены за м2 на малярные работы в Томске
                    </h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3">
                @php
                    $prices = [
                        (object) ['title' => 'Обновление стен', 'price' => '400', 'sub' => '', 'content' => ['Заделка отверстий, сколов, трещин', 'Грунтование', 'Покраска в 2 слоя по старой краске или обоям'], ],
                        (object) ['title' => 'Ремонт и покраска стен', 'price' => '1000', 'sub' => '', 'content' => ['Расчистка старой краски, удаление обоев', 'Ремонт гипсокартона, штукатурки с заделкой трещин', 'Шпаклевка с ошкуриванием', 'Грунтование', 'Покраска в 2 слоя'], ],
                        (object) ['title' => 'Подготовка и отделка с нуля', 'price' => '1700', 'sub' => '', 'content' => ['Выравнивание штукатуркой по маякам', 'Наклейка стеклохолста' , 'Базовая шпаклевка', 'Финишная шпаклевка', 'Шлифовка', 'Грунтовка', 'Покраска в 2 слоя'], ],
                    ]
                @endphp
                @foreach ($prices as $item)    
                    <div class="col mb-4 mb-lg-0 ">
                        <div class="price">
                            <div class="bg-red-dark py-4 d-flex justify-content-center align-items-center rounded-top">
                                <div class="d-block">
                                    <h5>{{ $item->title }}</h5>
                                    <h3>от {{ $item->price }} /м2</h3>
                                </div>
                            </div>
                            <div class="p-3 bg-light" style="min-height: 350px">
                                <ul>
                                    @foreach ($item->content as $li)
                                        <li class="text-dark py-2 border-bottom border-dark"> {{ $li }} </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="bg-red-dark py-4 d-flex justify-content-center rounded-bottom">
                                <vbutton class="btn btn-outline-light btn-lg" target="modal">
                                    Рассчитать смету
                                </vbutton>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-info my-5 d-flex align-items-center">
                        <div class="d-block">
                            <i class="fa fa-info fa-3x d-none d-lg-block mx-4"></i>
                            Усредненные расценки могут меняться в зависимости от размера окрашиваемого пространства, сложности, типа используемых материалов. Если планируете покраску в Томске, то закажите бесплатную смету по телефону <a href="tel:{{ $company->tel }}" class="text-dark">{{ $company->tel }}</a> или назначьте осмотр.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- why us --}}
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        Почему выбирают нас
                    </h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
                @php
                    $whys = [
                        (object) ['icon'=>'fa fa-user', 'title' => 'Точная цена', 'text' => 'В смете учитываем все деталии - от подготовки основания и расходных материалов до окрасочного этапа и уборки помещения, чтобы предоставить вам точную предварительную стоимость'],
                        (object) ['icon'=>'fa fa-user', 'title' => 'Услуги "Под ключ"', 'text' => 'Управляем каждой деталью вашего проекта от начала до конца, чтобы вы могли потратить своё время на более важные дела. Менеджер проекта находится на месте каждый день, чтобы контроллировать работу и держать вас в курсе проекта.'],
                        (object) ['icon'=>'fa fa-user', 'title' => 'Мастерство + Опыт', 'text' => 'Наши малярные бригады специализируются на выполнении коммерческих проектов с минимальными неудобствамии для бизнеса, независимо от их размера и сложности.'],
                        (object) ['icon'=>'fa fa-user', 'title' => 'Быстрое завершение', 'text' => 'Гарантируем выполнение работы в предложенные сроки. Составляем гравик под вас и работаем по выходным, праздникам, вечерам, чтобы ваш офис выглядел эффектно, но без лишних хлопот'],
                    ]
                @endphp
                @foreach ($whys as $item)
                    <div class="col mb-4 mb-md-4">
                        <div class="border border-light overflow-hidden position-relative p-3 rounded h-100">
                            <div class="position-absolute" style="opacity: .1; font-size: 150px; transform: rotate(15deg); top: -50px">
                                <i class="{{ $item->icon }}"></i>
                            </div>
                            <h5 class="mb-0"> {{ $item->title }} </h5>
                            <hr class="my-2 border-danger w-50">
                            <p> {{ $item->text }} </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="section-title">
                        Часто задаваемые вопросы
                    </h2>
                    <p>
                        Здесь мы собрали вопросы, которые нам задают чаще всего. Если вы не находите подходящий ответ, обращайтесь по телефону <a href="tel:{{ $company->tel }}">{{ $company->tel }}</a> или по <a href="mailto:{{ $company->email }}"> {{ $company->email }} </a>.
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                @php
                    $faqs = [
                        [
                            (object) ['uri' => 'f', 'name' => 'Сколько стоит покраска за квадратный метр?', 'text' => 'В Томске и Томской области средняя цена профессиональных покрасочных работ составляет 250 рублей за квадратный метр для стен и 300 рублей за квадратный метр для потолков. Это стоимость для окраски в два слоя поверхностей, которые находятся в достаточно хорошем состоянии и не требуют ремонта.'],
                            (object) ['uri' => 's', 'name' => 'От чего зависит стоимость подготовки и окраски?', 'text' => 'Цена малярных работ в основном зависит от: Размер окрашиваемой области, Сколько раз красим, Необходимость стыковать разные цвета, Высота перегородок, легкость доступа, Укрывные работы, перемещение мебели, Нужно ли ремонтировать поверхность, Требуются ли штукатурные работы, Работа в нерабочее время, Утилизация мусора, уборка, Специальные инструменты, строительные леса'],
                            (object) ['uri' => 't', 'name' => 'Сколько времени нужно на выполнение малярных работ?', 'text' => 'У каждого проекта свой график. В зависимости от объема подготовки, количества слоев, размера и доступности окрашиваемой площади покрасочные работы могут занять от двух дней до нескольких недель. Предварительный срок вы узнаете уже на первой встрече с оценщиком.'],
                            (object) ['uri' => 'd', 'name' => 'Что входит в услуги по малярным работам?', 'text' => 'Наш подход включает: Укрываем пол, мебель защитной пленкой, Выравниваем плоскость штукатуркой, Заделываем дыры, трещины, устраняем пятна, шлифуем, грунтуем поверхности, Наносим составы высшего качества для равномерного покрытия, Уделяем пристальное внимание чистоте в рабочей зоне, Вместе с вами осматриваем обновленное пространство, чтобы услышать обратную связь'],
                        ],
                        [
                            (object) ['uri' => 'zx', 'name' => 'Нужно ли мне заранее переставлять мебель?', 'text' => 'Мы защищаем мебель, полы, но хрупкие предметы и технику, которую сложно переместить, пожалуйста, вынесите до прибытия малярной бригады или предупредите нас до начала работ.'],
                            (object) ['uri' => 'ewq', 'name' => 'Можете ли вы отремонтировать повреждения отделки?', 'text' => 'Да, ремонтируем поврежденные участки гипсокартона, трещины.'],
                            (object) ['uri' => 'qw', 'name' => 'Какие материалы используете?', 'text' => 'Используем качественные продукты, которые служат долго, имеют слабый запах, хорошую укрывистость и сохнут быстрее. Если берете дешевые аналоги, то в итоге тратите больше из-за недолговечности таких покрытий, которые уже на следующий год надо перекрашивать.'],
                        ] 
                    ]
                @endphp
                @foreach ($faqs as $col)
                    <div class="col">
                        <div class="accordion" id="bayan">
                            @foreach ($col as $qa)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#faq-{{ $qa->uri }}" aria-expanded="true" aria-controls="collapseOne">
                                    {{ $qa->name }}
                                  </button>
                                </h2>
                                <div id="faq-{{ $qa->uri }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#bayan">
                                  <div class="accordion-body">
                                    <p>
                                        {{ $qa->text }}
                                    </p>
                                  </div>
                                </div>
                              </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
    </section>

    {{-- slider --}}
    <section>
        <page-slider
            title="Примеры работ"
            subtitle=''
            :images='@json($slug->portfolioImages)'
        >
            <div class="border border-light rounded p-3 h-100 d-flex align-items-center">
                <div class="d-block">
                    <h4>Мы опубликовали часть фотографий завершенных объектов для ознакомления</h4>
                    <p class="text-red">
                        Если у вас остались вопросы - свяжитесь с нами
                    </p>
                </div>
            </div>
        </page-slider>
    </section>
@endsection