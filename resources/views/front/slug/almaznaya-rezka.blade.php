@extends('front.slug.single-slug')

@section('slug-content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="border p-3 border-3 border-danger">
                    <h2 class="section-title">
                        Мы осуществляем работу без строительного мусора.
                    </h2>
                    <p class="mb-0">
                        После нашей работы Вам не потребуется вызывать клиниговую службу
                    </p>
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
                    Только сертифицированное оборудованиие
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{ asset('assets/images/hilti-logo.png') }}" alt="" class="img-fluid mb-4">
                <p class="mb-0">
                    Наш инструмент способен просверлить отверстия в таких материалах, которые трудно доступны или полностью недоступны другому оборудованию.
                    При попадании на арматуру, мы сверлим ее, а не начинает бурить новое отверстие рядом.
                    Уровень шума практически равен нулю, ваши соседи даже не узнают, что вы проводили работы.
                </p>

            </div>
            <div class="col-12 col-md-6">
                <ul class="d-flex p-0 m-0 align-items-center">
                    <li><img src="{{ asset('assets/images/88313ec.jpeg')}}" alt="" class="img-fluid"></li>
                    <li class="mx-4"><img src="{{ asset('assets/images/e31cdff.jpeg') }}" alt="" class="img-fluid"></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">
                    оборудование и услуги
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <equipment></equipment>
            </div>
        </div>
    </div>
</section>

@endsection