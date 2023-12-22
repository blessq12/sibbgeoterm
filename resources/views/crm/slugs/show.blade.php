@extends('layouts.crm')

@section('title', 'Услугa ' . $slug->name )

@section('content')
    @if (session('success'))
        <div class="row mb-4">
            <div class="col-12">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        </div>    
    @endif
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col-8">
            <h5 class="mb-2">Основная информация</h5>
            @if ($slug->updated_at !== null)
                <p>Последние изменения: <span class="text-info">{{ $slug->updated_at->format('Y.m.d H:i') }}</span></p>
            @endif
            <form action="{{ route('crm.slugs.update', $slug->id) }}" method="post">
                @csrf @method('patch')
                <div class="form-group mb-4">
                    <label for="name">Название страницы</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $slug->name }}">
                </div>
                <div class="form-group mb-4">
                    <label for="desc">Описание страницы</label>
                    <textarea name="desc" id="desc" rows="5" class="form-control">{{ $slug->desc }}</textarea>
                </div>
                <div class="form-group mb-4">
                    <label for="status">Видимость страницы</label>
                    <select name="status" id="status" class="form-select">
                        <option value="1" selected>Страница видна</option>
                        <option value="0">Страница не видна</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">
                    Сохранить
                </button>
            </form>
        </div>
        <div class="col-4">
            <h5>Фотография</h5>
            <div class="row mb-4">
                <div class="col-12">
                    <form action="{{ route('crm.image.upload-slug-image') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input type="hidden" name="slug_id" value="{{ $slug->id }}">
                            <input type="file" class="form-control" id='image' name="image" required>
                            <button class="btn btn-primary" type="submit">Загрузить фотографию</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if (!$slug->images->isEmpty())
                        <img src="{{ $slug->thumb->first()->path }}" alt="" class="img-fluid w-50">
                    @else
                        <p>Нет загруженных фото для услуги</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection