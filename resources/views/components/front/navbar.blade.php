<nav>
    <div class="container">
        <div class="row row-cols-2 row-cols-md-3 align-items-center">
            <div class="col col-md-2">
                <a href="{{ route('main.index') }}">
                    <div class="nav-logo">
                        <img src="{{$company->logo}}" alt="{{$company->name}}" class="img-fluid">
                    </div>
                </a>
            </div>
            <div class="col-md-8 d-none d-md-block">
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
            <div class="col col-md-2 d-none d-md-block">
                <div class="d-flex justify-content-end">
                    <vbutton class="btn btn-outline-light" target="modal">
                        Консультация
                    </vbutton>
                </div>
            </div>
            <div class="cols d-md-none d-flex justify-content-end">
                <vbutton target="mobile" class="btn">
                    <i class="fa fa-bars fa-2x text-light"></i>
                </vbutton>
            </div>
        </div>
    </div>
</nav>