<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link  bg-none text-grey active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                       aria-controls="pills-home" aria-selected="true">Popular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-right border-left rounded-0 bg-none text-grey" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                       aria-controls="pills-profile" aria-selected="false">New Arrivals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  bg-none text-grey" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                       aria-controls="pills-contact" aria-selected="false">Best Sellers</a>
                </li>
            </ul>
        </div>
        <div class="tab-content col-12" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="col-12">
                    <div class="row row-cols-1 row-cols-md-4">
                        @foreach($productsPopular as $product)
                            <div class="col mb-4" data-aos="fade-right">
                                <div class="card border-0 h-100">
                                    <img data-src="{{ asset('img/'.$product->product_image) }}" src="" class="lazy card-img-top" alt="...">
                                    <div class="card-body px-0">
                                        <h3 class="card-title text-white h5 font-weight-bold mb-0" style="min-height: 45px;">
                                            <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a></h3>
                                        <p class="text-white mb-0 mt-0"><b>Brand: </b><a href="{{ route('brand.show', $product->brand->id) }}">{{ $product->brand->name }}</a></p>
                                        <p class="text-white mb-0 mt-0"><b>Category: </b>{{ $product->subcategory->category->name }}</p>
                                        <p class="text-white mb-0 mt-0x"><b>Subcategory: </b> <a href="{{ route('subcategory.show', $product->subcategory->id) }}">{{ $product->subcategory->name }}</a></p>
                                        <p class="card-text text-white">
                                                <span class="pr-3 h5 font-weight-bold"><b>Price: </b>{{ round(\App\Product_size::where('product_id', $product->id)->get()[0]->price, 2) }}$</span>
{{--                                            <span class="pr-3 h5 font-weight-bold"><b>Price: </b>{{ round(\App\Product_size::find($product->id)->price, 2) }}$</span>--}}
                                        </p>
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <a href="" class="text-white buy_btn">Buy now</a>--}}
{{--                                            <a href="" class="text-white add-in-cart_btn" data-id="{{ $product->id }}">Add to cart</a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="col-12">
                    <div class="row row-cols-1 row-cols-md-4">
{{--                        @foreach($productsNew as $product)--}}
{{--                            @dd(\App\Product::find($product->product_id)->product_image)--}}
{{--                            <div class="col mb-4" data-aos="fade-right">--}}
{{--                                <div class="card border-0 h-100">--}}
{{--                                    <img src="{{ asset('img/'.\App\Product::find($product->product_id)->product_image) }}" class="card-img-top" alt="...">--}}
{{--                                    <div class="card-body px-0">--}}
{{--                                        <h3 class="card-title text-white h5 font-weight-bold mb-0" style="min-height: 45px;">--}}
{{--                                            <a href="{{ route('product.show', $product->product_id) }}">{{ \App\Product::find($product->product_id)->name }}</a></h3>--}}
{{--                                        <p class="text-white mb-0 mt-0"><b>Brand: </b><a href="{{ route('brand.show', \App\Product::find($product->product_id)->brand->id) }}">{{ \App\Product::find($product->product_id)->brand->name }}</a></p>--}}
{{--                                        <p class="text-white mb-0 mt-0"><b>Category: </b>{{ \App\Product::find($product->product_id)->subcategory->category->name }}</p>--}}
{{--                                        <p class="text-white mb-0 mt-0x"><b>Subcategory: </b> <a href="{{ route('subcategory.show', \App\Product::find($product->product_id)->subcategory->id) }}">{{ \App\Product::find($product->product_id)->subcategory->name }}</a></p>--}}
{{--                                        <p class="card-text text-white">--}}
{{--                                            <span class="pr-3 h5 font-weight-bold"><b>Price: </b>{{ round($product->price, 2) }}$</span>--}}
{{--                                            <span>{{ substr($product->created_at, 0, 10) }}</span>--}}
{{--                                        </p>--}}
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <a href="" class="text-white buy_btn">Buy now</a>--}}
{{--                                            <a href="" class="text-white add-in-cart_btn" data-id="{{ $product->id }}">Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
                        @foreach ($productsNew as $product)
                            <div class="col mb-4" data-aos="fade-down">
                                <div class="card border-0 h-100">
{{--                                    <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">--}}
                                    <img src="{{ asset('img/'.$product->product_image) }}" class="card-img-top" alt="...">
                                    <div class="card-body px-0">
                                        <h3 class="card-title text-white h5 font-weight-bold mb-0" style="min-height: 45px;">
                                            <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a></h3>
                                        <p class="text-white mb-0 mt-0"><b>Brand: </b><a href="{{ route('brand.show', $product->brand->id) }}">{{ $product->brand->name }}</a></p>
                                        <p class="text-white mb-0 mt-0"><b>Category: </b>{{ $product->subcategory->category->name }}</p>
                                        <p class="text-white mb-0 mt-0x"><b>Subcategory: </b> <a href="{{ route('subcategory.show', $product->subcategory->id) }}">{{ $product->subcategory->name }}</a></p>
                                        <p class="card-text text-white">
{{--                                            <span class="pr-3 h5 font-weight-bold"><b>Price: </b>{{ round(\App\Product_size::where('product_id', $product->id)->get()->first()->price, 2) }}$</span>--}}
                                            <span class="pr-3 h5 font-weight-bold"><b>Price: </b>{{ round(\App\Product_size::find($product->id)->price, 2) }}$</span>
                                        </p>
                                        <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span
                                                class="text-for-price-2">$32.67</span>
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <a href="" class="text-white buy_btn">Buy now</a>
                                            <a href="" class="text-white add-in-cart_btn">Add in a cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

{{--                        <div class="col mb-4" data-aos="fade-down">--}}
{{--                            <div class="card border-0 h-100">--}}
{{--                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">--}}
{{--                                <div class="card-body px-0">--}}
{{--                                    <h5 class="card-title text-for-desc">Some description here</h5>--}}
{{--                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span--}}
{{--                                            class="text-for-price-2">$32.67</span>--}}
{{--                                    </p>--}}
{{--                                    <div class="d-flex justify-content-between">--}}
{{--                                        <a href="" class="text-white buy_btn">Buy now</a>--}}
{{--                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col mb-4" data-aos="fade-left">--}}
{{--                            <div class="card border-0 h-100">--}}
{{--                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">--}}
{{--                                <div class="card-body px-0">--}}
{{--                                    <h5 class="card-title text-for-desc">Some description here</h5>--}}
{{--                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span--}}
{{--                                            class="text-for-price-2">$32.67</span>--}}
{{--                                    </p>--}}
{{--                                    <div class="d-flex justify-content-between">--}}
{{--                                        <a href="" class="text-white buy_btn">Buy now</a>--}}
{{--                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col mb-4" data-aos="fade-right">--}}
{{--                            <div class="card border-0 h-100">--}}
{{--                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">--}}
{{--                                <div class="card-body px-0">--}}
{{--                                    <h5 class="card-title text-for-desc">Some description here</h5>--}}
{{--                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span--}}
{{--                                            class="text-for-price-2">$32.67</span>--}}
{{--                                    </p>--}}
{{--                                    <div class="d-flex justify-content-between">--}}
{{--                                        <a href="" class="text-white buy_btn">Buy now</a>--}}
{{--                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col mb-4" data-aos="fade-up">--}}
{{--                            <div class="card border-0 h-100">--}}
{{--                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">--}}
{{--                                <div class="card-body px-0">--}}
{{--                                    <h5 class="card-title text-for-desc">Some description here</h5>--}}
{{--                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span--}}
{{--                                            class="text-for-price-2">$32.67</span>--}}
{{--                                    </p>--}}
{{--                                    <div class="d-flex justify-content-between">--}}
{{--                                        <a href="" class="text-white buy_btn">Buy now</a>--}}
{{--                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col mb-4" data-aos="fade-up">--}}
{{--                            <div class="card border-0 h-100">--}}
{{--                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">--}}
{{--                                <div class="card-body px-0">--}}
{{--                                    <h5 class="card-title text-for-desc">Some description here</h5>--}}
{{--                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span--}}
{{--                                            class="text-for-price-2">$32.67</span>--}}
{{--                                    </p>--}}
{{--                                    <div class="d-flex justify-content-between">--}}
{{--                                        <a href="" class="text-white buy_btn">Buy now</a>--}}
{{--                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col mb-4" data-aos="fade-left">--}}
{{--                            <div class="card border-0 h-100">--}}
{{--                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">--}}
{{--                                <div class="card-body px-0">--}}
{{--                                    <h5 class="card-title text-for-desc">Some description here</h5>--}}
{{--                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span--}}
{{--                                            class="text-for-price-2">$32.67</span>--}}
{{--                                    </p>--}}
{{--                                    <div class="d-flex justify-content-between">--}}
{{--                                        <a href="" class="text-white buy_btn">Buy now</a>--}}
{{--                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="col-12">
                    <div class="row row-cols-1 row-cols-md-4">
                        <div class="col mb-4" data-aos="fade-right">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title text-for-desc">Some description here</h5>
                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span
                                            class="text-for-price-2">$32.67</span>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="" class="text-white buy_btn">Buy now</a>
                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" data-aos="fade-down">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title text-for-desc">Some description here</h5>
                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span
                                            class="text-for-price-2">$32.67</span>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="" class="text-white buy_btn">Buy now</a>
                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" data-aos="fade-down">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title text-for-desc">Some description here</h5>
                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span
                                            class="text-for-price-2">$32.67</span>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="" class="text-white buy_btn">Buy now</a>
                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" data-aos="fade-left">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title text-for-desc">Some description here</h5>
                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span
                                            class="text-for-price-2">$32.67</span>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="" class="text-white buy_btn">Buy now</a>
                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" data-aos="fade-right">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title text-for-desc">Some description here</h5>
                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span
                                            class="text-for-price-2">$32.67</span>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="" class="text-white buy_btn">Buy now</a>
                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" data-aos="fade-up">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title text-for-desc">Some description here</h5>
                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span
                                            class="text-for-price-2">$32.67</span>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="" class="text-white buy_btn">Buy now</a>
                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" data-aos="fade-up">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title text-for-desc">Some description here</h5>
                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span
                                            class="text-for-price-2">$32.67</span>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="" class="text-white buy_btn">Buy now</a>
                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4" data-aos="fade-left">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body px-0">
                                    <h5 class="card-title text-for-desc">Some description here</h5>
                                    <p class="card-text"><span class="text-for-price-1 pr-3">$27.51</span><span
                                            class="text-for-price-2">$32.67</span>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="" class="text-white buy_btn">Buy now</a>
                                        <a href="" class="text-white add-in-cart_btn">Add in a cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        AOS.init();
        AOS.refresh();
    </script>
@endpush
