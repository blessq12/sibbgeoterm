<nav>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="{{ route('main.index') }}">
                    <div class="nav-logo">
                        <img src="{{ $company->logo }}" alt="" class="img-fluid">
                    </div>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="user">
                    <p class="mb-0">{{ Auth::user()->name }}</p>
                    <i class="fa fa-user-o"></i>
                </div>
            </div>
        </div>
    </div>
</nav>