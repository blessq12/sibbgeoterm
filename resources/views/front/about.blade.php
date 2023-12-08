@extends('layouts::front')

@section('title', 'О Сибгеотерм')
@section('desc', 'Мы уверены что доверие может быть и к организации и поэтому хотим рассказать о себе, как об организации')

@section('content')
    <x-front.page-banner
        title="О компании сибгеотерм"
        background="https://skstal.ru/wp-content/uploads/2018/04/k11.jpg"
    >
    </x-front.page-banner>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="bg-image h-100" style="background: url('{{ asset($company->logo) }}'); background-size: contain !important"></div>
                </div>
                <div class="col-12 col-md-8">
                    <h2 class="section-title mb-4">
                        Cибгеотерм - это
                    </h2>
                    <p>
                        Строительная компания Сибгеотерм специализируется на строительстве быстровозводимых зданий и сооружений, административных зданий, гаражей, реконструкции и капитальном ремонте зданий. 
                        Компания обладает материальнотехническим оснащением и квалифицированной бригадой мастеров, необходимыми для выполнения полученных заказов. 
                        Все работы осуществляются в соответствии с составленной сметой и условленными сроками.
                    </p>
                    <p>
                        «Наша цель — это удовлетворение постоянно растущего спроса на быстровозводимые конструкции с максимальным качеством и в минимальные сроки. 
                        Проявляя внимание к потребностям Заказчика, мы постоянно совершенствуем технологический процесс, используем современное оборудование и только качественные материалы». 
                        Гарантией качества наших работ служит соблюдение строгих стандартов производства и высокой квалификации сотрудников. 
                        На все виды работ компанией получены свидетельства лицензии и сертификаты. Мы проводим гарантийное и послегарантийное обслуживание на выполненных объектах».
                    </p>
                </div>
                
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @php
                    $odds = [
                        (object)['icon' => 'fa fa-globe', 'title' => 'Мобильность', 'content' => 'Подвод коммуникаций в труднодоступных природных зонах. Собственная генераторная установка.Вы вправе выбрать для строительства практически любую точку на карте!'],
                        (object)['icon' => 'fa fa-wrench', 'title' => 'Новейшее оборудование', 'content' => 'Только новые инструменты для производства и монтажа. Регулярная замена оборудования предотвращает брак изделий, некачественное соединение или плохую фиксацию.'],
                        (object)['icon' => 'fa fa-usd', 'title' => 'Система скидок', 'content' => 'Вам понравилась наша работа? На заказ каждого следующего сооружения действует система скидок. Актуальную информацию узнавайте у нашего менеджера.'],
                        (object)['icon' => 'fa fa-briefcase', 'title' => 'Большой опыт', 'content' => 'Большой опыт производства и монтажа в разных регионах Сибири – гарант наших компетенций. Мы постоянно растем и совершенствуем производственную и кадровую базу.'],
                        (object)['icon' => 'fa fa-building-o', 'title' => 'Проектирование', 'content' => 'Анализ потребностей, фиксация требований, расчет стоимости проекта, подбор материалов и прогноз дополнительных издержек. Досконально изучаем ваш проект.'],
                        (object)['icon' => 'fa fa-file-text-o', 'title' => 'Гарантия', 'content' => 'Мы используем только сертифицированную продукцию отечественных производителей, строго регламентированную для данного вида строительства.'],
                    ];
                @endphp

                @foreach ($odds as $adv)
                    
                    <div class="col mb-4">
                        <div class="border border-light rounded p-3 position-relative overflow-hidden">
                            <div class="position-absolute top-50" style="transform: rotate(15deg) scale(15); opacity: .1">
                                <i class="{{ $adv->icon }}"></i>
                            </div>
                            <div class="d-block position-relative">
                                <h4 class="text-red fs-5">{{ $adv->title }}</h4>
                                <p class="mb-0">
                                    {{ $adv->content }}
                                </p>
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
                        Отзывы и награды
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="d-flex">
                        <li style="margin-right:24px">
                            <img src="{{ asset('/assets/images/certificate.png') }}" alt="" class="img-fluid">
                        </li>
                        <li style="margin-right:24px">
                            <img src="{{ asset('/assets/images/pismo.png') }}" alt="" class="img-fluid">
                        </li>
                        <li style="margin-right:24px">
                            <img src="{{ asset('/assets/images/pismo-2.png') }}" alt="" class="img-fluid">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection