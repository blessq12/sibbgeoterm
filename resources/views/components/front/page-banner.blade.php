<div class="page-banner bg-image" style="background: url({{ $background }})">
    <div class="overlay"></div>
        <div class="container position-relative h-100 py-5">
            @if (!$slot->isEmpty())
            <div class="cutout">
                {{ $slot }}
            </div>
            @endif
            <div class="row align-items-end h-100">
                <div class="col-12">
                    <div class="header">
                        <h1> {{ $title }} </h1>
                    </div>
                </div>
        </div>
    </div>
</div>