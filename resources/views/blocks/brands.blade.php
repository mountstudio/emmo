<div class="container-fluid pt-3 pb-5"  style="background: rgba(255, 255, 255, 0.45);font-family: 'Open Sans',sans-serif;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <h2 class="text-white py-5 " style="text-transform: uppercase;">Our brands</h2>
            <div class="col-12">
                <div id="owl-brands" class="owl-carousel owl-theme ">
                    @foreach($brands as $brand)
                        <div class="item">
                            <a href="{{ route('brand.show', ['city' => 'city', 'brand' => $brand]) }}">
                                <img data-src="{{ asset('img/'. $brand->image) }}" src="" class="img-fluid lazy" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
{{--            <div class="py-3">--}}
{{--                <a href="{{ route('brand.index')  }}" class="text-white btn-all-brands ">All brands</a>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
    @push('scripts')
        <script>
            $('#owl-brands').owlCarousel({
                items: 8,
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
