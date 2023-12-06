<nav>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-3">
                <a href="{{ route('main.index') }}">
                    <div class="nav-logo">
                        <img src="{{$company->logo}}" alt="{{$company->name}}" class="img-fluid">
                        <div class="d-block">
                            <h4>{{ $company->name }}</h4>
                            <p>Строительная компания</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 ">
                @php
                    $links = [
                        (object) ['name' => 'Строительство', 'route' => 'main.construct.index'],
                        (object) ['name' => 'Услуги', 'route' => 'main.slug.index'],
                        (object) ['name' => 'О нас', 'route' => 'main.about'],
                        (object) ['name' => 'Контакты', 'route' => 'main.contact'],

                    ];
                @endphp
                <ul class="nav justify-content-center">
                    @foreach ($links as $link)    
                        <li class="nav-item">
                            <a href="{{ route($link->route) }}" class="nav-link {{ Request::segment(1) == explode('.', $link->route)[1] ? 'active' : '' }} ">
                                {{ $link->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-6 col-lg-3">
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-outline-light">
                        Задать вопрос
                        <i class="fa fa-question px-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>