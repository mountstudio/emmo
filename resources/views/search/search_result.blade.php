@extends('layouts.app')
@section('content')
    <section class="bg-black pt-5">
        <div class="container pt-5">
            <p class="h3 text-white text-center pt-2"><br>Search tires<br></p>
            <div class="row">
                <div class="col-12">
                    {{--                    <div class="row row-cols-1 row-cols-md-4">--}}
                    <div class="row justify-content-center">
                        @if (count($products))
                            @foreach($products as $key => $product)
                                <div class="media col-7 mt-4">
                                    <div class="media-header pb-4">
                                        <img src="{{ asset('img/'.$product->product_image) }}" class="img-fluid"
                                             alt="..." width="200" height="auto">
                                    </div>
                                    <a href="{{ route('product.show', $product->id) }}">
                                        <div class="media-body pl-3 ">
                                            <h5 class="mt-0" style="color:white"><b>{{ $product->name }}</b></h5>
                                            <img src="{{ asset('img/'.$product->brand->image) }}"
                                                 class="pl-3 mb-2 mt-1 img-thumbnail" alt="...">
                                            <p class="mb-0" style="color:white">
                                                <b>Brand: </b> {{ $product->brand->name }}</p>
                                            <p class="mb-0" style="color:white"><b>Tire
                                                    name: </b>{{ $product->name }}</p>
                                            <p class="mb-0" style="color:white">
                                                <b>Category: </b>{{ \App\Category::find($product->subcategory->category_id)->name }}
                                            </p>
                                            <p class="mb-0" style="color:white">
                                                <b>Subcategory: </b>{{ $product->subcategory->name }}
                                            </p>
                                            <p class="mb-0" style="color:white">
                                                <b>Size: </b>{{ $size->full_size }}
                                            </p>
                                            <p class="mb-0" style="color:white">
                                                <b>Price: </b>{{ \App\Product_size::where('product_id', $product->id)->where('size_id', $size->id)->get()[0]->price }}
                                            </p>
                                            <a href="#" class="btn reg_btn btn-block text-fut-book but-hov text-white buy_book d-lg-block d-none w-50"
                                            data-id=" {{ $product->id }}" data-size="{{ $size->full_size.$size->serv_desc }}"
                                            data-sizeid="{{ $size->id }}" id="basket">Add to cart</a>
                                        </div>
                                    </a>
                                </div>

                                {{--                                    <div class="media-header">--}}
                                {{--                                        <img src="{{ asset('img/'.$product->product_image) }}" class="img-fluid"--}}
                                {{--                                             alt="..." width="200" height="auto">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="media-body">--}}
                                {{--                                        <h5 class="mt-0" style="color: white">{{ $product->brand->name }} </h5>--}}
                                {{--                                        <h6 class="mt-0" style="color: white">{{ $product->name }} </h6>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="media-footer">--}}

                                {{--                                    </div>--}}
                            @endforeach
                        @else
                            <h5> Не было найдено покышек {{ $brand != 'Choose option' ? $brand : '' }} нужного вам
                                размера </h5>
                        @endif
                    </div>
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

@endsection
