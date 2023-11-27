@extends('layouts::front')

@section('title','Ангары арочного типа')
@section('desc','Описание для ангаров арочного типа')

@section('content')
    <div class="container-fluid bg-image position-relative" style="height: 500px; background: url({{ asset('/assets/images/banner.jpg') }})">
        <div class="overlay" style="background: rgba(0, 0, 0, .7)"></div>
        <div class="container position-relative h-100 py-5">
            <div class="position-absolute"
            style="background: #fff;
            width:350px;
            height:50px;
            right: 12px;
            bottom: -1px
        "></div>
            <div class="row align-items-end h-100">
                <div class="col-12">
                    <div class="header text-light border-start border-danger border-5 px-4">
                        <h1 style="font-size: 5rem; width: 90%">Строиттельство ангаров арочного типа</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2>Почему выбирают нас:</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione voluptas nisi illo reiciendis eius repellat perspiciatis omnis odit neque ipsa animi distinctio amet, voluptate quia debitis ad perferendis exercitationem dolore.
                    </p>
                    <ul class="list-unstyled p-0 m-0">
                        <li class="border-danger border-5 border-start px-2 mb-2">
                            <h4>Какая то причина 1</h4>
                        </li>
                        <li class="border-danger border-5 border-start px-2 mb-2">
                            <h4>Какая то причина 1</h4>
                        </li>
                        <li class="border-danger border-5 border-start px-2 mb-2">
                            <h4>Какая то причина 1</h4>
                        </li>
                        <li class="border-danger border-5 border-start px-2 mb-2">
                            <h4>Какая то причина 1</h4>
                        </li>
                        <li class="border-danger border-5 border-start px-2 mb-2">
                            <h4>Какая то причина 1</h4>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 placeholder-glow">
                    <span class="img-fluid placeholder h-100 rounded w-100"></span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h3>Задачи и разновидностии ангаров</h3>
                </div>
            </div>
            <div class="row placeholder-glow">
                <div class="col-6 col-md-4 col-lg-2"><div class="angar-type placeholder rounded" style="width:100%; height: 100px"></div></div>
                <div class="col-6 col-md-4 col-lg-2"><div class="angar-type placeholder rounded" style="width:100%; height: 100px"></div></div>
                <div class="col-6 col-md-4 col-lg-2"><div class="angar-type placeholder rounded" style="width:100%; height: 100px"></div></div>
                <div class="col-6 col-md-4 col-lg-2"><div class="angar-type placeholder rounded" style="width:100%; height: 100px"></div></div>
                <div class="col-6 col-md-4 col-lg-2"><div class="angar-type placeholder rounded" style="width:100%; height: 100px"></div></div>
                <div class="col-6 col-md-4 col-lg-2"><div class="angar-type placeholder rounded" style="width:100%; height: 100px"></div></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 placeholder-glow">
                    <span class="img-fluid placeholder h-100 rounded w-100"></span>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <h3>Заголовок для ангаров</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dolorem quos ex modi totam repellat deserunt recusandae libero fuga excepturi suscipit ea dolorum, placeat nesciunt eaque magnam veniam laudantium itaque!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dolorem quos ex modi totam repellat deserunt recusandae libero fuga excepturi suscipit ea dolorum, placeat nesciunt eaque magnam veniam laudantium itaque!
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora minima aliquid repudiandae nihil facere cupiditate corporis odio amet modi eligendi, quas possimus cum atque. Possimus culpa id ullam in asperiores!
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection