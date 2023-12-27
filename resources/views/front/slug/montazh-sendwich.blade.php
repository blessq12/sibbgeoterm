@extends('front.slug.single-slug')

@section('slug-content')
<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">
                    Строительная компания сибгеотерм предлагает услуги профессионального монтажа стеновых и кровельных сэндвич-панелей
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <p>
                    Современная строительная индустрия предъявляет все более высокие требования к строительным компаниям на предмет качества строй-материалов, 
                    профессионализма строителей и скорости выполнения строительно-монтажных работ. 
                    Монтаж сэндвич-панелей очень ответственная операция и требует высокой квалификации строителей-специалистов. 
                    Нарушение технологии при  монтаже сэндвич-панелей могут привести к серьезным недостаткам качества строительства (нарушение теплоизоляции здания), а также к порче самих панелей
                </p>
                <p>
                    Монтаж сэндвич-панелей позволяет максимально ускорить строительство промышленных зданий и возведение объектов сферы обслуживания. 
                    Огнестойкие и легкие панели используются для обустройства фасадов, кровель, а также для реконструкции и утепления старых зданий и помещений. 
                    Наша компания уже много лет занимается строительством зданий из металлоконструкций и монтажа сэндвич-панелями. Поэтому на нас можно положится!
                </p>
            </div>
            <div class="col-12 col-md-6">
                <div class="bg-image h-100 rounded" style="background: url('https://alp-servis.ru/wp-content/uploads/2017/01/IMAG0115.jpg')"></div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">Стоимость монтажа сэндвич-панелей</h2>
                <p>Мы рассчитываем стоимость монтажа сэндвич-панелей индивидуально. На цену влияют такие факторы:</p>
            </div>
        </div>
        <div class="row mb-4 row-cols-1 row-cols-md-2 row-cols-lg-2">

            @php
                $factors = [
                    (object) ['icon' => 'fa fa-globe', 'title' => 'Расположение объекта', 'desc' => 'Если здание находится далеко, мы включаем в стоимость работы расходы на транспортировку материалов'],
                    (object) ['icon' => 'fa fa-globe', 'title' => 'Объем работы', 'desc' => 'Если он большой, то цена за квадратный метр будет невысокой'],
                    (object) ['icon' => 'fa fa-globe', 'title' => 'Вес материала', 'desc' => 'Панели с минеральной ватой тяжелые, поэтому требуют дополнительной рабочей силы и использования специализированной техники. Это увеличивает затраты и итоговую стоимость монтажных работ'],
                    (object) ['icon' => 'fa fa-globe', 'title' => 'Технология монтажа', 'desc' => 'Наши специалисты подбирают способ установки панелей с учетом формы фасада, высоты строения. Высокие здания сложных конфигураций требуют усовершенствованных технологий монтажа по увеличенным расценкам'],
                ];
            @endphp

            @foreach ($factors as $factor)
                
            <div class="col mb-4">
                <div class="border border-light p-4 rounded d-flex align-items-center" style="min-height: 180px">
                    <div class="d-flex align-items-center justify-content-center" style="padding-right: 24px">
                        <i class="{{$factor->icon}} fa-3x"></i>
                    </div>
                    <div class="d-block">
                        <h4 class="mb-0 text-red">{{ $factor->title }}</h4>
                        <p class="mb-0">{{ $factor->desc }}</p>
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
                <h2 class="section-title">Цены на монтаж сендвич панелей</h2>
                <p>Цены могут варьироватьтся в зависимости от сложности транспортировки или монтажа</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="btn btn-outline-light active rounded-0 btn-lg" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button">
                        Монтаж стеновых сэндвич-панелей
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content py-4">
                    <div class="tab-pane fade show active" id="profile" >
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="bg-image h-100" style="background: url('https://snabpaneli.ru/i/wallpanels.png'); background-size: contain !important"></div>
                            </div>
                            <div class="col-lg-8">
                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">First</th>
                                          <th scope="col">Last</th>
                                          <th scope="col">Handle</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ([1,1,1,1,1] as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->index }}</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr> 
                                        @endforeach
                                      </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">
                    Особенность монтажа
                </h2>
                <p>
                    Как строительный подрядчик, имеем в штате опытных монтажников, имеющих допуски на высоту, работающих на объекте Заказчика совместно с руководителем проекта. 
                    Для удобства Заказчика к договору подряда составляется график производства работ для дополнительного контроля сроков монтажа.
                </p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4 mb-md-0">
                <h5>Возьмём на себя весь цикл монтажных работ:</h5>
                @php
                    $adlist = [
                        'поможем с выбором завода изготовителя;',
                        'подготовим проект раскладки сэндвич панелей;',
                        'согласуем доставку на объект необходимых комплектующих, оборудования, строительной техники;',
                        'выполним монтаж панелей и нащельников (фасонные и доборные элементы);',
                        'подготовим акты скрытых работ, исполнительные схемы и документацию',
                        ]
                @endphp
                <ul>
                    @foreach ($adlist as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <h5>При заключении договора подряда Заказчик получает:</h5>
                @php
                    $adlist2 = [
                        'фиксированную смету;',
                        'соблюдение технологии монтажа сэндвич панелей;',
                        'чистые договорные отношения и гарантию 5 лет;',
                        'завершенные в срок работы;',
                        'полный пакет исполнительной документации;',
                    ]
                @endphp
                <ul>
                    @foreach ($adlist2 as $item)
                        <li> {{ $item }} </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection