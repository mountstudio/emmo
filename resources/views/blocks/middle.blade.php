<div class="container">
    <div class="">
        <div class="">
            <div id="owl-text" class="owl-carousel owl-theme">
                <div class="item text-white">
                    <p class="h1 text-white">Summer Tyres</p>
                    <p class="text-white">limited time free shipping</p>
                    <p class="text-white">from $99.99</p>
                </div>
                <div class="item text-white">
                    <p class="h1 text-white">Summer Tyres</p>
                    <p class="text-white">limited time free shipping</p>
                    <p class="text-white">from $99.99</p>
                </div>
                <div class="item text-white">
                    <p class="h1 text-white">Summer Tyres</p>
                    <p class="text-white">limited time free shipping</p>
                    <p class="text-white">from $99.99</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <p class="text-white">Find your tire</p>
        <p class="text-white">The fastest way to the perfect tire</p>
    </div>
</div>
@push('styles')
    <link rel="stylesheet" href="{{ asset('https://raw.githubusercontent.com/daneden/animate.css/master/animate.css') }}">
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
            autoplayTimeout: 5000,
            dots: true,
        });
    </script>
@endpush
