@extends('layouts.app')
@section('content')
    <section class="bg-black pt-5">
        <div class="container pt-5">
            <p class="h3 text-white text-center pt-2"><br>Search tires<br></p>
            <div class="row">
                <div class="col-12">
                    {{--                    <div class="row row-cols-1 row-cols-md-4">--}}
                    <div class="row justify-content-center">
                        @if (!empty($products[0]))
                            @foreach($products as $key => $product)
                                <div class="media col-7">
                                    <div class="media-header pb-4">
                                        <img src="{{ asset('img/'.$product[0]->product_image) }}" class="img-fluid"
                                             alt="..." width="200" height="auto">
                                    </div>
                                    <a href="{{ route('product.show', $product[0]->id) }}">
                                        <div class="media-body pl-3">
                                            <h5 class="mt-0" style="color:white"><b>{{ $product[0]->name }}</b></h5>
                                            <img src="{{ asset('img/'.$product[0]->brand->image) }}"
                                                 class="pl-3 mb-2 mt-1 img-thumbnail" alt="...">
                                            <p class="mb-0" style="color:white">
                                                <b>Brand: </b> {{ $product[0]->brand->name }}</p>
                                            <p class="mb-0" style="color:white"><b>Tire
                                                    name: </b>{{ $product[0]->name }}</p>
                                            <p class="mb-0" style="color:white">
                                                <b>Category: </b>{{ \App\Category::find($product[0]->subcategory->category_id)->name }}
                                            </p>
                                            <p class="mb-0" style="color:white">
                                                <b>Subcategory: </b>{{ $product[0]->subcategory->name }}
                                            </p>
                                            <p class="mb-0" style="color:white">
                                                <b>Size: </b>{{ $size[0]->full_size }}
                                            </p>
                                            <a href="#" class="btn reg_btn btn-block text-fut-book but-hov text-white buy_book d-lg-block d-none w-50"
                                            data-id=" {{ $product[0]->id }}" data-size="{{ $size[0]->full_size.$size[0]->serv_desc }}"
                                            data-sizeid="{{ $size[0]->id }}" id="basket">Add to cart</a>
                                        </div>
                                    </a>
                                </div>

                                {{--                                    <div class="media-header">--}}
                                {{--                                        <img src="{{ asset('img/'.$product[0]->product_image) }}" class="img-fluid"--}}
                                {{--                                             alt="..." width="200" height="auto">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="media-body">--}}
                                {{--                                        <h5 class="mt-0" style="color: white">{{ $product[0]->brand->name }} </h5>--}}
                                {{--                                        <h6 class="mt-0" style="color: white">{{ $product[0]->name }} </h6>--}}
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
