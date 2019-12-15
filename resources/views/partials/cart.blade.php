<div class="container">
    <p class="h1 pt-3 text-red">Shopping cart</p>
    <p class="text-white">Confirm your items, delivery & installation method, total cost, then proceed.</p>
    @if(count($cartItems))
        <div class="row d-none d-md-flex text-white">
            <div class="col-3 h5">
                Товар
            </div>
            <div class="col-2 h5">
                Размер
            </div>
            <div class="col-2 h5">
                Цена
            </div>
            <div class="col-2 h5">
                Кол-во
            </div>
            <div class="col-2 h5">
                Сумма
            </div>
        </div>

        @foreach($cartItems as $item)
            <div class="row border-top border-bottom py-3 align-items-center text-white">
                <div class="col-12 col-md-3 col-lg-3 order-0 d-flex align-items-center">
                    <img src="{{ asset('img/'.\App\Product::all()->find($item->attributes->prod_id)->product_image) }}"
                         style="height: 150px; width: auto;" alt="">
                    <p class="small m-0 ml-3 font-weight-bold">{{ \App\Brand::find(\App\Product::find($item->attributes->prod_id)->brand_id)->name }}
                        <br> {{ $item->name }}</p>
                </div>
                <div class="col-12 col-md-2">
                    <p class="m-0 text-center pt-1"><span
                            class="d-inline-block d-md-none"></span>{{ \App\Size::find($item->attributes->sizeid)->full_size }} {{ \App\Size::find($item->attributes->sizeid)->serv_desc }}
                    </p>
                </div>
                <div class="col-12 col-md-2 my-3 my-md-0 col-lg-2 order-2">
                    <p class=" m-0"><span class="d-inline-block d-md-none">Цена:&nbsp;</span>{{ $item->price }} $</p>
                </div>
                <div class="col-lg-2 col-md-2 col-3 my-3 my-md-0 order-3">
                    <div class="d-flex ml-auto ml-md-0 justify-content-between align-items-center"
                         style="width: 100px;">
                        <span
                            class="pointer text-dark cart-btn rounded-circle shadow p-2 remove_book d-flex justify-content-center align-items-center "
                            data-sizeid="{{ $item->attributes->sizeid }}" data-id="{{ $item->id }}"
                            style="background: white">-</span>
                        <span class="mx-2">{{ $item->quantity }}</span>
                        <span
                            class="pointer text-dark cart-btn rounded-circle shadow buy_book p-2 d-flex justify-content-center align-items-center"
                            data-sizeid="{{ $item->attributes->sizeid }}" data-id="{{ $item->id }}"
                            style="background: white">+</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-12 order-5 d-flex align-items-center">
                    <p class="m-0 text-left font-weight-bold"><span
                            class="d-inline-block d-md-none">Итого:&nbsp;</span>{{ $item->getPriceSum() }} $</p>
                </div>
                <div class="col-lg-1 col-3  col-md-1 align-self-md-center align-self-start order-1 order-md-last">
                    <span
                        class="pointer text-dark rounded-pill cart-btn shadow d-flex justify-content-center align-items-center p-2 delete_book"
                        style="background: white"
                        data-sizeid="{{ $item->attributes->sizeid }}" data-id="{{ $item->id }}">&times;</span>
                </div>
            </div>
        @endforeach

        <div class="row justify-content-end mt-5 py-5">
            <div class="col-12 col-sm-8 col-md-5 col-lg-4 d-flex p-3" style="background: rgba(0, 0, 0, 0.03);">
                <div class="col-6 m-0 h6 font-weight-bold text-white">
                    Итого
                </div>
                <div class="col-6 m-0 h5 font-weight-bold text-white">
                    {{ $total }} $
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-12 col-sm-8 col-md-5 col-lg-4 p-0 mt-1">
                <a href="{{ route('cart.checkout', ['token' => Session::has('token') ? Session::get('token') : uniqid(), 'continue' => true]) }}"
                   class="btn reg_btn border-0 w-100 text-light">
                    <div class="rounded text-center font-weight-bold h6 m-0 p-2">
                        Оформить заказ
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
                    <a href="" class="btn reg_btn">Shop tires</a>
                </p>
            </div>

        </div>

    @endif
</div>
