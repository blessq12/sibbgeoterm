@extends('layouts::auth')
@section('title', 'Авторизация')

@section('content')
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-4">
                    <h4>Авторизация</h4>
                    @if (session('created'))
                        <div class="alert alert-success">
                            {{ session('created') }}
                        </div>
                    @endif
                    @if (session('active'))
                        <div class="alert alert-warning">
                            {{session('active')}}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled p-0 m-0">
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('auth.user-login') }}" method="POST" class="border border-primary rounded p-3">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <div class="input-group">
                                <input type="email" name="email" id="email" class="form-control" autocomplete="username" required>
                                <span class="input-group-text">@</span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Пароль:</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" required autocomplete="current-password">
                                <span class="input-group-text" onclick=" document.querySelector('#password').type == 'password' ? document.querySelector('#password').type = 'text' : document.querySelector('#password').type = 'password' ">
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Авторизоваться
                        </button>
                        <a href="{{ route('auth.register') }}" class="btn btn-outline-primary">
                            Регистрация
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection