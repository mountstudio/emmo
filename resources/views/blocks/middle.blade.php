<div class="main-container">
    <div class="row">
{{--        <div class="col-12 col-md-7 pt-3">--}}
{{--            <div id="owl-text" class="owl-carousel owl-theme">--}}
{{--                <div class="item text-white">--}}
{{--                    <h1 class="display-3 text-white text_for_welcome m-0">Summer Tyres</h1>--}}
{{--                    <p class="text-white text_for_welcome h5"> limited time free shipping</p>--}}
{{--                    <hr class="middle_hr">--}}
{{--                    <div class=" d-flex col-5">--}}
{{--                        <p><span class="text-white text_for_welcome pr-4 h5">from</span><span class="text_for_price h1">$99.99</span>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item text-white">--}}
{{--                    <h1 class="display-3 text-white text_for_welcome m-0">Summer Tyres</h1>--}}
{{--                    <p class="text-white text_for_welcome h5"> limited time free shipping</p>--}}
{{--                    <hr class="middle_hr">--}}
{{--                    <div class=" d-flex col-5">--}}
{{--                        <p><span class="text-white text_for_welcome pr-4 h5">from</span><span class="text_for_price h1">$99.99</span>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="item text-white">--}}
{{--                    <h1 class="display-3 text-white text_for_welcome m-0">Summer Tyres</h1>--}}
{{--                    <p class="text-white text_for_welcome h5"> limited time free shipping</p>--}}
{{--                    <hr class="middle_hr">--}}
{{--                    <div class=" d-flex col-5">--}}
{{--                        <p><span class="text-white text_for_welcome pr-4 h5">from</span><span class="text_for_price h1">$99.99</span>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="col-12 col-md-6 pt-3 text-white">
            <form action="{{ route('search.product') }}" class="text-left border border-light p-5 form-bg">
                <p class="h4 mb-3">Search by tires brand</p>
                <label>Brand</label>
                <select name="brand_id" class="browser-default custom-select mb-4 text-white arrow-for-select">
                    <option value="Choose option">Choose option</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
                <div class="form-row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Price from</label>
                            <input type="number" min="1" max="1000000" name="priceFrom" class="form-control mb-4 arrow-for-select text-white">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Price to</label>
                            <input type="number" min="1" max="1000000" name="priceTo" class="form-control mb-4 arrow-for-select text-white">
                        </div>
                    </div>
                </div>
                <label>Tire size</label>
                <div class="form-row">
                    <div class="col-12 col-md-4">
                        <select name="width" class="browser-default custom-select mb-4 arrow-for-select text-white">
                            <option value="" disabled>Choose option</option>
                            @foreach($width as $w)
                                <option value="{{ $w }}">{{ $w }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <select name="profile" class="browser-default custom-select mb-4 arrow-for-select text-white">
                            <option value="" disabled>Choose option</option>
                            @foreach($profile as $p)
                                <option value="{{ $p }}">{{ $p }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <select name="diameter" class="browser-default custom-select mb-4 arrow-for-select text-white">
                            <option value="" disabled>Choose option</option>
                            @foreach($diameter as $d)
                                <option value="{{ $d }}">{{ $d }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <button type="submit" class="text-white btn-emmo">Search</button>
{{--                    <a href="" class="text-white btn-search">Search</a>--}}
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 pt-3 text-white">
            <form class="text-left border border-light p-5 form-bg text-white" action="{{ route('bid.store') }}">
                <p class="h4 mb-3">Find me a tire</p>
                <label>Tire size</label>
                <div class="form-row">
                    <div class="col-12 col-md-4">
                        <select name="width" class="browser-default text-white custom-select mb-4 arrow-for-select">
                            <option value="" disabled>Choose option</option>
                            @foreach($width as $w)
                                <option value="{{ $w }}">{{ $w }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <select name="profile" class="browser-default text-white custom-select mb-4 arrow-for-select">
                            <option value="" disabled>Choose option</option>
                            @foreach($profile as $p)
                                <option value="{{ $p }}">{{ $p }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <select  name="diameter" class="browser-default text-white custom-select mb-4 arrow-for-select">
                            <option value="" disabled>Choose option</option>
                            @foreach($diameter as $d)
                                <option value="{{ $d }}">{{ $d }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <label>Zip code</label>
                <input type="number" name="zip_code" min="1" max="1000000" class="form-control mb-4 arrow-for-select text-white" required>
                <label>Telephone number</label>
                <input type="number" name="phone_number" class="form-control mb-4 arrow-for-select text-white" required>
                <div>
                    <button type="submit"  class="text-white btn-emmo">Find!</button>
                </div>
            </form>
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
