@extends('layouts::auth')
@section('title', 'Регистрация')

@section('content')
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-4">
                    <h4>Регистрация</h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled p-0 m-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('auth.user-register') }}" method="POST" class="p-3 border border-primary rounded">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="email">Email адрес:</label>
                            <div class="input-group">
                                <input type="email" name="email" id="email" class="form-control" autocomplete="username" required value="{{ old('email') }}">
                                <span class="input-group-text">@</span>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="name">Имя:</label>
                            <div class="input-group">
                                <input type="text" name="name" id="name" class="form-control" autocomplete="name" required value="{{ old('name') }}">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="tel">Номер телефона:</label>
                            <div class="input-group">
                                <input type="text" name="tel" id="tel" class="form-control" autocomplete="tel" required data-maska="+7 (###) ###-##-##" value="{{ old('tel') }}">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Пароль:</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" required autocomplete="new-password">
                                <span class="input-group-text" onclick=" document.querySelector('#password').type == 'password' ? document.querySelector('#password').type = 'text' : document.querySelector('#password').type = 'password' ">
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Регистрация</button>
                        <a href="{{ route('auth.login') }}" class="btn btn-outline-primary">Авторизация</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const { Mask, MaskInput, vMaska } = Maska
        new MaskInput("[data-maska]")
    </script>
@endsection