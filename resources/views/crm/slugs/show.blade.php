@extends('layouts.crm')

@section('title', 'Услугa ' . $slug->name )

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{ route('crm.slugs.image-upload') }}" method="post" enctype="multipart/form-data">
                    @csrf   @method('patch')
                    <div class="form-group">
                        <label for="image">Изображение</label>
                        <div class="input-group">
                            <input type="file" name="image" id="image" class="form-control">
                            <span class="input-group-text">
                                <i class="fa fa-upload"></i>
                            </span>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">send</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                @if (session('image'))
                    <img src="{{ session('image') }}" alt="" class="img-fluid">
                @endif
            </div>
        </div>
    </div>
    
@endsection