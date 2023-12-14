<div class="bg-image position-relative slug-header d-flex align-items-end" style="background: url({{ $image }})">
    <div class="overlay"></div>
    <div class="container position-relative" style="z-index: 1">
        @if (!$slot->isEmpty())
            <div class="cutout">
                {{ $slot }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <h1>{{ $slug->name }}</h1>
                <p>{{ $slug->desc }}</p>
            </div>
        </div>

    </div>
</div>