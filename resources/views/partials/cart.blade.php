<div class="container">
    <p class="h1 pt-3 text-red">Shopping cart</p>
    <p class="text-white">Confirm your items, delivery & installation method, total cost, then proceed.</p>
    @if(count($cartItems))

        @foreach($cartItems as $item)
            <div class="row py-3 align-items-center text-white font-roboto">
                <div class="col-12 col-md-4 col-lg-4 order-0 p-0 px-md-2 order-md-0 d-flex">
                    <img src="{{ asset('img/'.\App\Product::all()->find($item->attributes->product_id)->product_image) }}"
                         style="height: 100px; width: auto;" alt="">
                    <p class="small m-0 ml-3">
                        <span
                            class="h5 font-weight-normal">{{ \App\Brand::find(\App\Product::find($item->attributes->product_id)->brand_id)->name }}</span>
                        <br> <span class="font-weight-bold h2">{{ $item->name }}</span>
                        <br> <span
                            class="font-weight-normal h6 text-danger">{{ \App\Size::find($item->attributes->sizeid)->full_size }}</span>
                        <br> <span
                            class="font-weight-normal h6">Serv. Desc: {{ \App\Size::find($item->attributes->sizeid)->serv_desc }}</span>
                    </p>
                </div>
                <div class="col-lg-2 col-md-2 col-6 my-0 my-md-0 order-4 order-md-2">
                    <div class="row mx-auto ml-md-0 justify-content-between align-items-center"
                         style="width: 100px;">
                        <div class="text-center col-12 mb-2">
                            Qty
                        </div>
                        <span
                            class="pointer text-dark cart-btn rounded-circle shadow p-2 remove_book d-flex justify-content-center align-items-center "
                            data-size_id="{{ $item->attributes->sizeid }}"
                            data-size="{{ $item->attributes->size }}"
                            data-id="{{ $item->attributes->product_id }}{{ $item->attributes->sizeid }}"
                            data-product_id="{{ $item->attributes->product_id }}"
                            style="background: white">-</span>
                        <span class="mx-2">{{ $item->quantity }}</span>
                        <span
                            class="pointer text-dark cart-btn rounded-circle shadow buy_book p-2 d-flex justify-content-center align-items-center"
                            data-size_id="{{ $item->attributes->sizeid }}"
                            data-size="{{ $item->attributes->size }}"
                            data-id="{{ $item->attributes->product_id }}{{ $item->attributes->sizeid }}"
                            data-product_id="{{ $item->attributes->product_id }}"
                            style="background: white">+</span>
                    </div>
                </div>
                <div class="col-6 col-md-2 my-3 my-md-0 col-lg-2 row m-0 order-2 order-md-3 text-center">
                    <div class="col-12 mb-2">Price Each</div>
                    <div class="font-weight-bold col-12">${{ $item->price }}</div>
                </div>
                <div class="col-lg-2 col-md-2 col-6 align-items-center order-3 order-md-4 m-0 row">
                    <div class="col-12 text-center mb-2">
                        Item(s) Total
                    </div>
                    <div class="col-12 text-center font-weight-bold">
                        ${{ $item->getPriceSum() }}
                    </div>
                </div>

                <div
                    class="col-lg-1 col-6 col-md-1 align-self-md-center align-self-center justify-content-center order-6 order-md-last">
                    <span
                        class="pointer text-white bg-danger mx-auto rounded-pill cart-btn shadow d-flex justify-content-center align-items-center p-2 delete_book"
                        style=""
                        data-size_id="{{ $item->attributes->sizeid }}"
                        data-size="{{ $item->attributes->size }}"
                        data-id="{{ $item->attributes->product_id }}{{ $item->attributes->sizeid }}"
                        data-product_id="{{ $item->attributes->product_id }}"
                    >&times;</span>
                </div>
            </div>
        @endforeach

        <div class="row justify-content-end mt-5 py-5">
            <div class="col-12 col-sm-8 col-md-5 col-lg-4 d-flex p-3" style="background: rgba(0, 0, 0, 0.03);">
                <div class="col-6 m-0 h6 font-weight-bold text-white">
                    Total
                </div>
                <div class="col-6 m-0 h5 font-weight-bold text-white">
                    ${{ $total }}
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-12 col-sm-8 col-md-5 col-lg-4 p-0 mt-1">
                <a href="{{ route('cart.checkout', ['token' => Session::has('token') ? Session::get('token') : uniqid(), 'continue' => true]) }}"
                   class="btn reg_btn border-0 w-100 text-light">
                    <div class="rounded text-center font-weight-bold h6 m-0 p-2">
                        Checkout
                    </div>
                </a>
            </div>
        </div>

    @else
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <p class="h3 text-muted pt-5">Your cart is empty</p>
                <img src="{{ asset('img/empty_tire.png') }}" alt="">
                <p class="pt-2">
                    <a href="{{ route('brand.index', ['city' => 'city']) }}" class="btn reg_btn text-white">Shop tires</a>
                </p>
            </div>

        </div>

    @endif
</div>
