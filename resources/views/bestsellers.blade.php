@extends('layouts.app')
@section('content')
    <section class="bg-black pt-5">
        <div class="container pt-5">
            <p class="h1 text-white text-center pt-2">Bestsellers</p>
            <div class="row">
                <div class="col-12">
                    <div class="row row-cols-1 row-cols-md-4">

                        @foreach($products as $key => $product)
                            <div class="col mb-4">
                                <div class="card border-0 h-100">
                                    <img src="{{ asset('img/'.$product->product_image) }}" class="card-img-top"
                                         alt="...">
                                    <div class="card-body px-0">
                                        <p class="card-title h5 text-for-brand">{{ $product->brand->name }}</p>
                                        <h3 class="card-title text-for-desc">{{ $product->name }}</h3>
                                        <p class="card-text text-white">
                                            $<span class="h5 font-weight-bold pr-3">{{ \App\Product_size::all()->firstWhere('product_id', $product->id)->price }}</span>
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <a href="" class="text-white buy_btn">Buy now</a>
                                            <a href="" class="text-white add-in-cart_btn">Add in a cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @foreach($allProducts as $product)
                                <div class="col mb-4">
                                    <div class="card border-0 h-100">
                                        <img src="{{ asset('img/'.$product->product_image) }}" class="card-img-top"
                                             alt="...">
                                        <div class="card-body px-0">
                                            <p class="card-title h5 text-for-brand">{{ $product->brand->name }}</p>
                                            <h3 class="card-title text-for-desc">{{ $product->name }}</h3>
                                            <p class="card-text text-white">
                                                $<span class="h5 font-weight-bold pr-3">{{ \App\Product_size::all()->firstWhere('product_id', $product->id)->price }}</span>
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <a href="" class="text-white buy_btn">Buy now</a>
                                                <a href="" class="text-white add-in-cart_btn">Add in a cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
                <nav aria-label="Page navigation example ">
                    <ul class="pagination pg-red ">
                        <li class="page-item ">
                            <a class="page-link" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link">1</a></li>
                        <li class="page-item active">
                            <a class="page-link">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item ">
                            <a class="page-link">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script>
        $('li').click(function () {
            $(this).addClass('active').siblings().removeClass('active');
        });
    </script>
@endpush
