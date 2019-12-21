@extends('layouts.app')
@section('content')
    <section class="bg-black pt-5">
        <div class="container pt-5">
            <h1 class="text-white text-center py-2 mb-4"><br>Search tires<br></h1>
            <div class="row justify-content-center">
                @if (count($products))
                    @foreach($products as $key => $product)
                        <div class="media col-12 col-md-6 col-lg-3 mb-5 row mx-0">
                            <div class="media-header pb-4 col-12">
                                <img src="{{ asset('img/'.$product->product_image) }}" class="img-fluid"
                                     alt="..." height="auto">
                            </div>
                            <div class="col-12">
                                <div class="media-body pl-3 ">
                                    <a href="{{ route('product.show', $product->id) }}"><h3 class="mt-0" style="color:white"><b>{{ $product->name }}</b></h3></a>
                                    <img src="{{ asset('img/'.$product->brand->image) }}"
                                         class="pl-3 mb-2 mt-1 img-thumbnail img-fluid w-50" alt="...">
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
                                        <b>Price: </b>${{ \App\Product_size::where('product_id', $product->id)->where('size_id', $size->id)->get()[0]->price }}
                                    </p>
                                    <a href="#"
                                       class="btn reg_btn btn-block text-fut-book but-hov text-white buy_book d-lg-block d-none"
                                       data-id=" {{ $product->id }}" data-size="{{ $size->full_size.$size->serv_desc }}"
                                       data-sizeid="{{ $size->id }}" id="basket">Add to cart</a>
                                </div>
                            </div>
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
        </div>
    </section>

@endsection
