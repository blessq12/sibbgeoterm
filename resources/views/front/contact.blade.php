@extends('layouts::front')

@section('title', 'Контакты')
@section('desc', 'Вся наша контактная на одной странице')

@section('content')
    <x-front.page-banner 
        title="Контактная информация"
        background="https://www.iphones.ru/wp-content/uploads/2017/07/laptop-1478822_960_720-1240x630.jpg"
    >
        <ul class="d-flex list-unstyled p-o m-0 align-items-center">
            <li>
                <i class="fa fa-user-o"></i>
            </li>
            <li class="mx-4">
                <i class="fa fa-pencil"></i>
            </li>
            <li>
                <i class="fa fa-envelope"></i>
            </li>
        </ul>
    </x-front.page-banner>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="border border-light p-4 mb-4">
                        <h5 class="mb-4 fs-3 section-title">Контакты</h5>
                        <ul>
                            <li class="d-flex align-items-center mb-4">
                                <i class="fa fa-phone p-3 border border-light" style="margin-right:12px"></i>
                                <a href="tel:{{ $company->tel }}" class="roadradio text-decoration-none fs-4">{{ $company->tel }}</a>
                            </li>
                            <li class="d-flex align-items-center mb-4">
                                <i class="fa fa-map-marker p-3 border border-light" style="margin-right:12px"></i>
                                <a href="{{ $company->navigator }}" class="roadradio text-decoration-none fs-4">{{ $company->address }}</a>
                            </li>
                            <li class="d-flex align-items-center mb-4">
                                <i class="fa fa-envelope p-3 border border-light" style="margin-right:12px"></i>
                                <a href="mailto:{{ $company->email }}" class="roadradio text-decoration-none fs-5">{{ $company->email }}</a>
                            </li>
                        </ul>
                        <hr class="mb-4">
                        <h5 class="mb-4 fs-3 section-title">мы на связи через</h5>
                        <div class="d-flex">
                            <i class="fa fa-whatsapp p-3 border border-light" style="margin-right: 12px"></i>
                            <i class="fa fa-telegram p-3 border border-light" style="margin-right: 12px"></i>
                        </div>
                    </div>
                    <div class="border border-light p-4 mb-4">
                        <h5 class="mb-4 fs-3 section-title">График работы</h5>
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span class="roadradio">Понедельник</span>
                                <span class="roadradio text-red">с 9:00 до 18:00</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="roadradio">Вторник</span>
                                <span class="roadradio text-red">с 9:00 до 18:00</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="roadradio">Среда</span>
                                <span class="roadradio text-red">с 9:00 до 18:00</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="roadradio">Четверг</span>
                                <span class="roadradio text-red">с 9:00 до 18:00</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="roadradio">Пятница</span>
                                <span class="roadradio text-red">с 9:00 до 18:00</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="roadradio">Суббота</span>
                                <span class="roadradio text-red">Выходной</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="roadradio">Воскресенье</span>
                                <span class="roadradio text-red">Выходной</span>
                            </li>
                        </ul>
                    </div>
                    <div class="border border-light p-4 mb-4">
                        <h5 class="mb-4 fs-3 section-title">Данные организации</h5>
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span class="roadradio">ИНН</span>
                                <span class="roadradio text-red"> {{ $company->legal->inn }}</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="roadradio">ОГРН</span>
                                <span class="roadradio text-red"> {{ $company->legal->ogrn }}</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span class="roadradio">КПП</span>
                                <span class="roadradio text-red"> {{ $company->legal->kpp }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row mb-4">
                        <div class="col-12 mb-4">
                            <h2 class="section-title mb-4">посетите наш офис в томске</h2>
                            <div class="rounded" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/sibgeoterm/65006678309/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Сибгеотерм</a><a href="https://yandex.ru/maps/67/tomsk/category/construction_company/184107633/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Строительная компания в Томске</a><a href="https://yandex.ru/maps/67/tomsk/category/construction_and_finishing_works/184107547/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Строительные и отделочные работы в Томске</a><iframe src="https://yandex.ru/map-widget/v1/?indoorLevel=1&ll=84.960378%2C56.458641&mode=search&oid=65006678309&ol=biz&z=16.65" width="100%" height="400" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section-title">Напишите нам</h2>
                            <p>МОжете воспользоваться формой для связи с нами, мы обрабатываем все письма</p>
                            <form action="?" class="my-4" method="post">
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">ФИО</label>
                                            <input type="text" name="name" id="name" class="form-control" required autocomplete="additional-name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="tel">Номер телефона</label>
                                            <input type="text" name="tel" id="tel" class="form-control" required autocomplete="tel">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="subject">Тема письма</label>
                                            <select name="subject" id="subject" class="form-select">
                                                <option value="">Выберите тему письма</option>
                                                <option value="Предложение">Идеи и предложения</option>
                                                <option value="жалоба">Жалоба</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="message">Сообщение</label>
                                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-outline-light">Отправить</button>
                                        <button type="reset" class="btn btn-outline-light mx-2">Очистить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection