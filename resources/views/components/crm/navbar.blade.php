<nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <a href="{{ route('main.index') }}">
                    <div class="nav-logo">
                        <img src="{{ $company->logo }}" alt="" class="img-fluid">
                    </div>
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-center">
                Привет, {{ Auth::user()->name }}
                <div class="dropdown">
                    <button class="btn text-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-user-o"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Редактировать</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item text-danger" href="{{ route('auth.user-logout') }}">Выход</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>