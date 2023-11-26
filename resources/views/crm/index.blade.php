@extends('layouts::crm')

@section('title', 'Дашборд')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h2>Авторизован</h2>
                @can('admin')
                    <h2>Администратор</h2>
                @endcan
            </div>
        </div>
    </div>
@endsection
