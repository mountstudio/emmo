<div class="container">
    <div class="row">
        <div class="col-12 col-md-7 pt-3">
            <div id="owl-text" class="owl-carousel owl-theme">
                <div class="item text-white">
                    <h1 class="display-3 text-white text_for_welcome m-0">Summer Tyres</h1>
                    <p class="text-white text_for_welcome h5"> limited time free shipping</p>
                    <hr class="middle_hr">
                    <div class="row d-flex col-5">
                        <p><span class="text-white text_for_welcome pr-4 h5">from</span><span class="text_for_price h1">$99.99</span>
                        </p>
                    </div>
                </div>
                <div class="item text-white">
                    <h1 class="display-3 text-white text_for_welcome m-0">Summer Tyres</h1>
                    <p class="text-white text_for_welcome h5">limited time free shipping</p>
                    <hr class="middle_hr">
                    <div class="d-flex">
                        <p><span class="text-white text_for_welcome pr-4 h5">from</span><span class="text_for_price h1">$99.99</span>
                        </p>
                    </div>
                </div>
                <div class="item text-white">
                    <h1 class="display-3 text-white text_for_welcome m-0">Summer Tyres</h1>
                    <p class="text-white text_for_welcome h5">limited time free shipping</p>
                    <hr class="middle_hr">
                    <div class="d-flex">
                        <p><span class="text-white text_for_welcome pr-4 h5">from</span><span class="text_for_price h1">$99.99</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 pt-3 text-white">
            <form class="text-left border border-light p-5 form-bg" action="#!">
                <p class="h4 mb-3">Search by tires brand</p>
                <label>Brand</label>
                <select class="browser-default custom-select mb-4 text-white arrow-for-select">
                    <option value="" disabled>Choose option</option>
                    <option value="1" selected>Good year</option>
                    <option value="2">Yokohama</option>
                    <option value="3">Michlene</option>
                    <option value="4">222</option>
                </select>
                <div class="form-row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Price from</label>
                            <input type="number" min="1" max="1000000" id="" class="form-control mb-4 arrow-for-select text-white">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Price to</label>
                            <input type="number" min="1" max="1000000" id="" class="form-control mb-4 arrow-for-select text-white">
                        </div>
                    </div>
                </div>
                <label>Tire size</label>
                <div class="form-row">
                    <div class="col-12 col-md-4">
                        <select class="browser-default custom-select mb-4 arrow-for-select text-white">
                            <option value="" disabled>Choose option</option>
                            <option value="1" selected>225</option>
                            <option value="2">224</option>
                            <option value="3">223</option>
                            <option value="4">222</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <select class="browser-default custom-select mb-4 arrow-for-select text-white">
                            <option value="" disabled>Choose option</option>
                            <option value="1" selected>45</option>
                            <option value="2">44</option>
                            <option value="3">43</option>
                            <option value="4">42</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <select class="browser-default custom-select mb-4 arrow-for-select text-white">
                            <option value="" disabled>Choose option</option>
                            <option value="1" selected>17</option>
                            <option value="2">16</option>
                            <option value="3">15</option>
                            <option value="4">14</option>
                        </select>
                    </div>
                </div>
                <div>
                    <a href="" class="text-white btn-search">Search</a>
                </div>
            </form>
            <div class="pt-4">
                <form class="text-left border border-light p-5 form-bg text-white" action="#!">
                    <p class="h4 mb-4">Leave a request</p>
                    <label>Tire size</label>
                    <div class="form-row">
                        <div class="col-12 col-md-4">
                            <select class="browser-default text-white custom-select mb-4 arrow-for-select">
                                <option value="" disabled>Choose option</option>
                                <option value="1" selected>225</option>
                                <option value="2">224</option>
                                <option value="3">223</option>
                                <option value="4">222</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <select class="browser-default text-white custom-select mb-4 arrow-for-select">
                                <option value="" disabled>Choose option</option>
                                <option value="1" selected>45</option>
                                <option value="2">44</option>
                                <option value="3">43</option>
                                <option value="4">42</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <select class="browser-default text-white custom-select mb-4 arrow-for-select">
                                <option value="" disabled>Choose option</option>
                                <option value="1" selected>17</option>
                                <option value="2">16</option>
                                <option value="3">15</option>
                                <option value="4">14</option>
                            </select>
                        </div>
                    </div>
                    <label>Zip code</label>
                    <input type="number" id="" min="1" max="1000000" class="form-control mb-4 arrow-for-select text-white" >
                    <label>Telephone number</label>
                    <input type="phone" id=""  class="form-control mb-4 arrow-for-select text-white" >
                    <div>
                        <a href="" class="text-white btn-leave">Leave</a>
                    </div>
                </form>
            </div>
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
