@dd($sizes)
@extends('layouts.app')
@section('content')
    <section style="background-color: #060606">
        @include('blocks.header')
    </section>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <img src="{{ asset('img/'.$product->product_image) }}" class="img-thumbnail">
            </div>
            <div class="col-6 text-left">
                <img src="{{ asset('img/'.$brand->image) }}" class="mt-5 mb-3 img-thumbnail" alt="">
                <h3>{{ $brand->name }}</h3>
                <h4>{{ $product->name }}</h4>
{{--                <a href="{{ route('') }}">--}}
                    <h6>{{ \App\Subcategory::find($product->subcategory_id)->name }}</h6>
{{--                </a>--}}
                <div id="for-add-cart-btn">

                </div>
            </div>
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                           role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                           role="tab" aria-controls="nav-profile" aria-selected="false">Specs</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                           role="tab" aria-controls="nav-contact" aria-selected="false">Sizes</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        {!! $product->description !!}
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        {!! $product->specs !!}
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
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
            $('div#selectSizes').append('<p><span>' + size.full_size + '    ' + size.serv_desc + '</span><br></p>');

            $('div#for-add-cart-btn').empty();
            const element = $('                <a href="#"' +
                '                   class="btn btn-dark btn-block text-fut-book but-hov text-white buy_book d-lg-block d-none w-50"' +
                '                   data-id=" {{ $product->id }}" data-size="'+ size.id +'"'+
                '                   id="basket">Add to cart' +
                '                </a>');

            $('div#for-add-cart-btn').append(element);
            registerCartBuyButtons(element);
        });

    </script>
@endpush




