@extends('layouts::crm')

@section('title', 'Пользователи')

@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Действия</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th> {{ $user->email }} </th>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->tel }} </td>
                            <td>
                                @if ($user->active)
                                    
                                    <form action="{{ route('crm.users.active', $user->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn text-success btn-sm d-flex align-items-center">
                                            <div class="text-success">Активно</div>
                                            <i class="fa fa-lock mx-2"></i>
                                        </button>
                                    </form>   
                                @else
                                <form action="{{ route('crm.users.active', $user->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn text-danger btn-sm d-flex align-items-center">
                                        <div class="text-danger">Неактивно</div>
                                        <i class="fa fa-lock mx-2"></i>
                                    </button>
                                </form>
                                @endif
                            </td>
                            <td class="d-flex">
                                <a href="{{ route('crm.users.show', $user->id) }}" class="btn btn-outline-info btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <form action="{{ route('crm.users.destroy', $user->id) }}" method="post">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm mx-1">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
@endsection