<div class="container-fluid pt-3 pb-5"  style="background: rgba(255, 255, 255, 0.45);font-family: 'Open Sans',sans-serif;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <h1 class="text-white py-5 " style="text-transform: uppercase;">Our brands</h1>
            <div class="col-12">
                <div id="owl-brands" class="owl-carousel owl-theme ">
                    <div class="item">
                        <img src="{{ asset('img/Yokohama-logo.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/dunlop.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/mastergraft.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/coopertires.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/good-year.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/michelin.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="py-3">
                <a href="" class="text-white btn-all-brands ">All brands</a>
            </div>
        </div>
    </div>
</div>
    @push('scripts')
        <script>
            $('#owl-brands').owlCarousel({
                items: 3,
                loop: true,
                margin: 10,
                mouseDrag: false,
                touchDrag: true,
                autoplay: true,
                dots: true,
                nav: true,
                navigation: true,
                autoplayTimeout: 5000,
            });
        </script>
        <script>
            $('.owl-stage').addClass('d-flex align-items-center');
        </script>
@endpush
