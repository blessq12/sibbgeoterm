<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-logo">
                    <img src="{{ $company->logo }}" alt="{{ $company->name }}" class="img-fluid">
                    <span class="text-capitalize">{{ $company->name }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    Copyright {{ now()->year }}. All right reserved
                </div>
            </div>
        </div>
    </div>
</footer>