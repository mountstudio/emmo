<div class="container">
    <div class="row">
        <div class="col-12  pt-5">
            <div id="owl-text" class="owl-carousel owl-theme">
                <div class="item text-white">
                    <h1 class="display-3 text-white text_for_welcome m-0">Summer Tyres</h1>
                    <p class="text-white text_for_welcome">limited time free shipping</p>
                    <hr class="middle_hr">
                    <div class="row d-flex col-5">
                        <p><span class="text-white text_for_welcome pr-4">from</span><span class="text_for_price h1">$99.99</span></p>
                    </div>
                </div>
                <div class="item text-white">
                    <h1 class="display-3 text-white text_for_welcome m-0">Summer Tyres</h1>
                    <p class="text-white text_for_welcome">limited time free shipping</p>
                    <hr class="middle_hr">
                    <div class="d-flex">
                        <p><span class="text-white text_for_welcome pr-4">from</span><span class="text_for_price h1">$99.99</span></p>
                    </div>
                </div>
                <div class="item text-white">
                    <h1 class="display-3 text-white text_for_welcome m-0">Summer Tyres</h1>
                    <p class="text-white text_for_welcome">limited time free shipping</p>
                    <hr class="middle_hr">
                    <div class="d-flex">
                        <p><span class="text-white text_for_welcome pr-4">from</span><span class="text_for_price h1">$99.99</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <p class="text-white h2 m-0">Find your tire</p>
            <p class="text-white">The fastest way to the perfect tire</p>
            <input class="w-75" type="text" placeholder="Car model" style="border:0px;padding:5px;border-radius: 10px;width: 55%;background: linear-gradient(90deg, #FFFFFF 11.76%, #8F8F8F 99.11%);">
        </div>
    </div>
</div>
@push('styles')
    <link rel="stylesheet"
          href="{{ asset('https://raw.githubusercontent.com/daneden/animate.css/master/animate.css') }}">
@endpush
@push('scripts')
    <script>
        $('#owl-text').owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            mouseDrag: false,
            touchDrag: true,
            autoplay: true,
            nav: true,
            navigation: true,
            dots: false,
            autoplayTimeout: 5000,
        });
    </script>
@endpush
