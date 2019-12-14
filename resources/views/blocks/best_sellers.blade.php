<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <div class="row row-cols-1 row-cols-md-4">
                @foreach($products as $product)
                    <div class="col mb-4">
                        <div class="card border-0 h-100">
                            <img src="{{ asset('img/kartinka.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body px-0">
                                <h3 class="card-title text-white h5 font-weight-bold" style="min-height:45px; ">{{ $product->name }}</h3>
                                <p class="card-text">
                                    <span class="text-for-price-1 pr-3">${{ round(\App\Product_size::find($product->id)->price, 2) }}</span>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-white buy_btn">Buy now</a>
                                    <a href="" class="text-white add-in-cart_btn">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
