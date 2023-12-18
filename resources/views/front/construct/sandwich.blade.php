@extends('layouts.front')

@section('title', 'Строительство и проектирование складских и промышленных зданий')
@section('desc' , 'Описания для сендвич панелей')


@section('content')
    <x-front.page-banner
        background='https://fsc-group.ru/bitrix/templates/tis/img/FSCbanner_cold.jpg'
        title='Строительство и проектирование складских и промышленных зданий'
    >
    <button type="button" class="btn btn-outline-light btn-lg">Задать вопрос</button>
    </x-front.page-banner>

    @php
        $advantages = [
            (object)['name' => 'Проектирование'],
            (object)['name' => 'Возведение крупномасштабных объектов, складов, ангаров, хранилищ для сельского хозяйства, монолитных конструкций'],
            (object)['name' => 'Монтаж и установка канализационных, отопительных и слаботочных систем, водообеспечение, электросетей'],
            (object)['name' => 'Составление смет'],
            (object)['name' => 'Генеральный подряд'],
            (object)['name' => 'Технический заказчик'],
            (object)['name' => 'Работы по проектированию и строительству складских, производственных, логистических и коммерческих объектов'],
            (object)['name' => 'Воплощение в жизнь и дальнейшая эксплуатация коммерческих сооружений'],
        ]
    @endphp

    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                @foreach ($advantages as $advan)    
                    <div class="col mb-4">
                        <div class=" p-3 border rounded border-light h-100">
                            {{ $advan->name }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>        
    </section>
@endsection
