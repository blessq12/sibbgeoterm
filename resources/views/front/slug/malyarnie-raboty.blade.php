@extends('front.slug.single-slug')

@section('slug-content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>
                        {{ $slug->name }}
                    </h1>
                </div>
            </div>
        </div>
    </section>
@endsection