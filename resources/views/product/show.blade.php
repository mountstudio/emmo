@extends('layouts.app')
@push('seo')
    <title>{{ $product->brand->name . ' ' .$product->name }} {{ request()->has('city') ? ' in ' . request('city') : '' }} | Emmo Tires</title>
    <meta name="title" content="{{ $product->name .' in brand ' .$product->brand->nam }} {{ request()->has('city') ? ' in ' . request('city') : '' }} | Emmo Tires">
    <meta name="description" content="{{ strip_tags($product->description) }}">
    <meta property="og:title" content="{{ $product->brand->name . ' ' .$product->name }} {{ request()->has('city') ? ' in ' . request('city') : '' }} | Emmo Tires">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="{{ asset('img/'.$product->product_image) }}">
    <meta property="og:description" content="{{ strip_tags($product->description) }}">
@endpush
@section('content')

   <section class="" >
       <div class="container  " style="padding-top: 150px;">
           <div class="row justify-content-center text-white">
               <div class="col-12 col-md-6 text-center">
                   <img src="{{ asset('img/'.$product->product_image) }}" class="img-thumbnail">
               </div>
               <div class="col-12 col-md-6 text-left">
                   <img src="{{ asset('img/'.$brand->image) }}" class="mt-5 mb-3 img-thumbnail" alt="">
                   <p class="h1">{{ $brand->name }}</p>
                   <h4>{{ $product->name }}</h4>
                   <a href="{{ route('subcategory.show', $product->subcategory) }}">
                       <h6>{{ \App\Subcategory::find($product->subcategory_id)->name }}</h6>
                   </a>
                   <div>
                       <p class="h5">Does this tire fit your vehicle?</p>
                       <p>Tires are designed specifically for different vehicles and wheel sizes. Tell us about your
                           vehicle or the specific size you want so we can help find the right tires for you.</p>
                   </div>
                   <div id="for-add-cart-btn">

                   </div>
               </div>
               <div class="col-12 pt-5">
                   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                       <li class="nav-item">
                           <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                              aria-controls="pills-home" aria-selected="true">Description</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                              aria-controls="pills-profile" aria-selected="false">Sizes</a>
                       </li>
                   </ul>
                   <div class="tab-content" id="nav-tabContent">
                       <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                           {!! $product->description !!}
                       </div>
                       <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                           <div id="selectSizes">

                           </div>
                           <h5>All sizes</h5>
                           <div class="row">
                           @for($i=0; $i < count($sizes); $i++)
                                   <div id="selected-size"></div>
                                   @if($i == 0)
                                       <div class="col-12 col-md-4 col-lg-3">
                                           <h5>{{ $sizes[$i]->number_size }}</h5>
                                           <div class="sizes-group list-unstyled">
                                               <a href="#" class="size-object" data-size="{{ $sizes[$i] }}">
                                                   <span class="sizes">{{ $sizes[$i]->full_size }}</span>
                                                   <span class="servDesc">{{ $sizes[$i]->serv_desc  }}</span>
                                               </a>
                                           </div>
                                       </div>
                                   @else
                                       <div class=" col-12 col-md-4 col-lg-3">
                                           @if($sizes[$i-1]->number_size != $sizes[$i]->number_size)
                                               <h5>{{ $sizes[$i]->number_size }}</h5>
                                           @endif
                                           <div class="sizes-group list-unstyled">
                                               <a href="#" class="size-object" data-size="{{ $sizes[$i] }}">
                                                   <span class="sizes">{{ $sizes[$i]->full_size }}</span>
                                                   <span class="servDesc">{{ $sizes[$i]->serv_desc  }}</span>
                                               </a>
                                           </div>
                                       </div>
                                   @endif
                           @endfor
                           </div>

                       </div>
                       <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                           {!! $product->specs !!}
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
    <section class="mt-5 text-white">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2>Sames as this product</h2>
                </div>
            </div>
            <div class="row">
                @foreach($sames as $product)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="card border-0 h-100">
                            <img src="{{ asset('img/'.optional($product)->product_image) }}" class="card-img-top" alt="...">
                            <div class="card-body px-0">
                                <h3 class="card-title text-white h5 font-weight-bold mb-0" style="min-height: 45px;">
                                    <a href="{{ route('product.show', ['city' => request()->segment(1), 'brand' => $product->brand, 'product' => $product]) }}">{{ $product->name }}</a></h3>
                                <p class="text-white mb-0 mt-0"><b>Brand: </b><a href="{{ route('brand.show', ['city' => request()->segment(1), 'brand' => $product->brand]) }}">{{ $product->brand->name }}</a></p>
                                <p class="text-white mb-0 mt-0"><b>Category: </b>{{ $product->subcategory->category->name }}</p>
                                <p class="text-white mb-0 mt-0x" style="min-height: 42px;"><b>Subcategory: </b> <a href="{{ route('subcategory.show', $product->subcategory->id) }}">{{ $product->subcategory->name }}</a></p>
                                <p class="card-text text-white">
{{--                                    <span class="pr-4 h5 font-weight-bold"><b>Price: </b>{{ round(\App\Product_size::find($product->id)->price, 2) }}$</span>--}}
                                    <span class="">{{ $product->created_at->format('Y-m-d') }}</span>
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
    </section>
@endsection

@push('scripts')
    <script>
        $('.size-object').on('click', function (e) {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let size = btn.data('size');

            $('div#selectSizes').empty();
            $('div#selectSizes').append('<h5>Selected size</h5>');
            $('div#selectSizes').append('<p><span>' + size.full_size + ' ' + size.serv_desc + '</span><br></p>');

            $('div#for-add-cart-btn').empty();

            const alert = $('<div class="alert fixed-bottom alert-success alert-dismissible fade show" role="alert">\n' +
                '  <strong>You have selected ' + size.full_size +' '+ size.serv_desc + '</strong>\n' +
                '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                '    <span aria-hidden="true">&times;</span>\n' +
                '  </button>\n' +
                '</div>')

            const element = $('                <a href="#"' +
                '                   class="btn reg_btn btn-block text-fut-book but-hov text-white buy_book w-50"' +
                '                   data-id="{{ $product->id }}' + size.id + '" data-product_id="{{ $product->id }}" data-size="' + size.full_size +' '+ size.serv_desc + '"' +
                '                   data-size_id="' + size.id + '"' +
                '                   id="basket">Add to cart' +
                '                </a>');

            $('body').append(alert);
            $('div#for-add-cart-btn').append(element);
            registerCartBuyButtons(element);
        });

    </script>
@endpush




