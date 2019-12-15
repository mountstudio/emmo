@extends('layouts.app')
@section('content')

    <div class="container my-5 pt-5">
        <div class="row justify-content-center text-white">
            <div class="col-12 col-md-6 text-center">
                <img src="{{ asset('img/'.$product->product_image) }}" class="img-thumbnail">
            </div>
<<<<<<< Updated upstream
            <div class="col-6 text-left">
                <img src="{{ asset('img/'.$brand->image) }}" class="mt-5 mb-3 img-fluid" alt="">
                <h3>{{ $brand->name }}</h3>
                <h4>{{ $product->name }}</h4>
                <a href="{{ route('subcategory.show', ['id' => $product->subcategory_id]) }}">
                    <h6>{{ \App\Subcategory::find($product->subcategory_id)->name }}</h6>
                </a>
=======
            <div class="col-12 col-md-6 text-left">
                <img src="{{ asset('img/'.$brand->image) }}" class="mt-5 mb-3 img-thumbnail" alt="">
                <p class="h1">{{ $brand->name }}</p>
                <h4>{{ $product->name }}</h4>
{{--                                <a href="{{ route('subcategory.show', ['id' => $product->subcategory_id]) }}">--}}
                <h6>{{ \App\Subcategory::find($product->subcategory_id)->name }}</h6>
{{--                                </a>--}}
                <div>
                    <p class="h5">Does this tire fit your vehicle?</p>
                    <p>Tires are designed specifically for different vehicles and wheel sizes. Tell us about your
                        vehicle or the specific size you want so we can help find the right tires for you.</p>
                </div>
>>>>>>> Stashed changes
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
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                           aria-controls="pills-contact" aria-selected="false">Specs</a>
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
                        @for($i=0; $i < count($sizes); $i++)
                            <ul class="column">
                                <div id="selected-size"></div>
                                @if($i == 0)
                                    <h5>{{ $sizes[$i]->number_size }}</h5>
                                    <li class="sizes-group list-unstyled">
                                        <a href="#" class="size-object" data-size="{{ $sizes[$i] }}">
                                            <span class="sizes">{{ $sizes[$i]->full_size }}</span>
                                            <span class="servDesc">{{ $sizes[$i]->serv_desc  }}</span>
                                        </a>
                                    </li>
                                @else
                                    @if($sizes[$i-1]->number_size != $sizes[$i]->number_size)
                                        <h5>{{ $sizes[$i]->number_size }}</h5>
                                    @endif
                                    <li class="sizes-group list-unstyled">
                                        <a href="#" class="size-object" data-size="{{ $sizes[$i] }}">
                                            <span class="sizes">{{ $sizes[$i]->full_size }}</span>
                                            <span class="servDesc">{{ $sizes[$i]->serv_desc  }}</span>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        @endfor
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        {!! $product->specs !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            const element = $('                <a href="#"' +
                '                   class="btn btn-dark btn-block text-fut-book but-hov text-white buy_book d-lg-block d-none w-50"' +
                '                   data-id=" {{ $product->id }}" data-size="' + size.full_size +' '+ size.serv_desc + '"' +
                '                   data-sizeid="' + size.id + '"' +
                '                   id="basket">Add to cart' +
                '                </a>');

            $('div#for-add-cart-btn').append(element);
            registerCartBuyButtons(element);
        });

    </script>
@endpush




