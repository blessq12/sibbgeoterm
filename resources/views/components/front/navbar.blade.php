<nav>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-md-4 col-lg-4">
                <a href="{{ route('main.index') }}" rel="nofollow">
                    <div class="nav-logo">
                        <img src="{{$company->logo}}" alt="" class="img-fluid">
                        <span class="text-capitalize">{{ __('Строительная компания') }}</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4 d-none d-md-block text-center">
                <p class="mb-0">{{ $company->address }}</p>
                <p class="mb-0">{{ $company->email }}</p>
            </div>
            <div class="col-6 col-md-4 col-lg-4 d-flex justify-content-end">
                <ul class="nav-social mx-4">
                    <li>
                        <a href="{{ $company->waLink ? $company->waLink : 'javascript:void(0)' }}">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $company->tgLink ? $company->tgLink : 'javascript:void(0)' }}">
                            <i class="fa fa-telegram"></i>
                        </a>
                    </li>
                </ul>
                <div class="d-flex flex-column">
                    <button type="button" class="btn btn-outline-light btn-sm rounded border border-light">
                        Заказать звонок
                    </button>
                    <span>{{ $company->tel }}</span>
                </div>
            </div>
        </div>
    </div>
</nav>