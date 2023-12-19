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


@endsection