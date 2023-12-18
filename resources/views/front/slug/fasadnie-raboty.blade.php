@extends('front.slug.single-slug')

@section('slug-content')

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">
                    Занимаемся отделкой фасадов, декором под ключ 
                </h2>
            </div>
        </div>
        <div class="row">
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
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @foreach ($slugs as $item)
                    <div class="col mb-4">
                        <div class="position-relative rounded p-3 h-100 d-flex align-items-end overflow-hidden" style="min-height: 250px">
                            <img src="{{ $item->image }}" alt="" class="img-fluid position-absolute" style="top: 0; left: 0">
                            <div class="overlay"></div>
                            <div class="d-flex align-items-center justify-content-between position-relative">
                                <h5 class="w-50">{{ $item->name }}</h5>
                                <p class="mb-0" style="max-width: 60%; font-size: .8rem; font-weight: 200">{{ $item->desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <p>
                    Современная строительная индустрия предъявляет все более высокие требования к строительным компаниям на предмет качества строй-материалов, 
                    профессионализма строителей и скорости выполнения строительно-монтажных работ. 
                    Монтаж сэндвич-панелей очень ответственная операция и требует высокой квалификации строителей-специалистов. 
                    Нарушение технологии при  монтаже сэндвич-панелей могут привести к серьезным недостаткам качества строительства (нарушение теплоизоляции здания), а также к порче самих панелей
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
                <h2 class="section-title">Стоимость монтажа</h2>
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
@endsection