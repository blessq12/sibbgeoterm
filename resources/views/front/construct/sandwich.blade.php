@extends('layouts::front')

@section('title', 'Сооружения из сендвич панелей')
@section('desc', 'Описание для сендвич панелей')

@section('content')

    <x-front.page-banner
        background="https://maksistroy.ru/images/gorizontalniy-montazh-sendvich-paneley.jpg"
        title="Монтаж сендвич-панелей"
    >
       <div class="btn btn-warning text-start">
        <h3 class="fs-2 mb-0">Супер цена</h3>
        <p class="fw-bold">Монтаж сендвич панелей <br> от <span class="btn btn-outline-dark"> 600 </span> рублей/м2</p>
       </div>
    </x-front.page-banner>

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
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="btn btn-outline-light rounded-0 active btn-lg" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button">
                            Монтаж кровель сэндвич-панелей
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="btn btn-outline-light mx-4 rounded-0 btn-lg" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button">
                            Монтаж стеновых сэндвич-панелей
                          </button>
                        </li>
                       
                      </ul>
                      <div class="tab-content py-4">
                        <div class="tab-pane fade show active" id="home">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="bg-image h-100" style="background: url('https://snabpaneli.ru/i/orangepanels.png'); background-size: contain !important"></div>
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
                        <div class="tab-pane fade" id="profile" >
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
    <section></section>
@endsection