@extends('layouts.app')

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('continue') && \Illuminate\Support\Facades\Session::get('continue'))

        <div class="container" style="padding-top: 15%; padding-bottom: 10%;">
            <div class="row mb-5">
                <div class="col-12 text-white">
                    @include('cart.delivery')
                </div>
            </div>
            <div class="row text-white">
                <div class="col-lg-7 col-12">
                    <form class="text-left text-white border border-light p-5 form-bg" action="{{ route('cart.store') }}"
                          style="border-radius: 10px;background: rgba(34, 34, 34, 0.64);border: 1px solid #929292;">
                        <p class="h4 mb-4 text-white">Please fill out your shipping address</p>
                        <label class="text-white">Name</label>
                        <input type="text" id="" class="form-control mb-4 bg_input"
                               placeholder="First name">
                        <label class="text-white">Zip code</label>
                        <input type="text" id="" class="form-control mb-4 bg_input"
                               placeholder="Zip code">
                        <label class="text-white">Phone number</label>
                        <input type="phone" id="" class="form-control mb-4 bg_input"
                               placeholder="Phone number">
                        <label class="text-white">Email</label>
                        <input type="email" id="" class="form-control mb-4 bg_input"
                               placeholder="E-mail">
                        <button class="btn choose_btn " type="submit">Send</button>
                    </form>
                </div>

            </div>
            <div class="col-12 col-lg-5 mt-4 mt-lg-0 pt-3 text-white">
                <div style="">
                    @foreach($cartItems as $item)
                        <div class="row ">
                            <div class="col-12 col-md-6 col-lg-6 pr-0">
                                <img src="{{ asset('img/'.\App\Product::all()->find($item->attributes->prod_id)->product_image) }}" style="height: 150px; width: auto;" alt="">
                            </div>
                            <div class="col-12 col-md-6 pt-2">
                                <p class="font-weight-bold h6">Brand : {{ \App\Brand::find(\App\Product::find($item->attributes->prod_id)->brand_id)->name }}</p>
                                <p class="h4"> {{ $item->name }} </p>
                                <p class="text-red m-0 "><b >Size :</b> {{ \App\Size::find($item->attributes->sizeid)->full_size }} {{ \App\Size::find($item->attributes->sizeid)->serv_desc }} </p>
                                <p class="m-0"><b >Quantity :</b> {{ $item->quantity }} </p>
                                <p class="m-0"><b>Cost :</b> {{ $item->price }} $</p>
                                <p><b>Total :</b> {{ $item->price * $item->quantity }} $</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="row justify-content-end mt-5 py-5 text-white">
                <div class="col-12 col-sm-8 col-md-5 col-lg-4 d-flex p-3" style="background: rgba(0, 0, 0, 0.03);">
                    <div class="col-6 m-0 h6 font-weight-bold">
                        Gran Total:
                    </div>
                    <div class="col-6 m-0 h5 font-weight-bold">
                        {{ $total }} $
                    </div>
                </div>

                <div class="col-12 col-sm-8 col-md-5 col-lg-4 p-0 mt-1">
                    <a href="#" class="btn choose_btn text-light" onclick="event.preventDefault(); $('form').validate() ? $('form').submit() : '';">Make payment
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="container" style="padding-top: 15%; padding-bottom: 10%;">
            <div class="row">
                <div class="col-12 modal-body-cart">
                    @include('partials.cart', ['route' => true])
                </div>
            </div>
        </div>
    @endif
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/button-checkbox.css') }}">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/localization/messages_ru.js">
    </script>
    <script>
        $('#cbx').change(e => {
            let check = $(e.currentTarget);
            let isChecked = check.is(':checked');
            let deliveryGroup = $('#deliveryGroup');
            if (isChecked) {
                deliveryGroup.show(300);
            } else {
                deliveryGroup.hide(300);
            }
        });
        $('#sum').keyup(e => {
            let input = $(e.currentTarget);
            let total = $('#total').val();
            let diffInput = $('#diff');
            let diffError = $('#diffError');
            if (input.val() == '') {
                diffInput.val('');
                diffError.show(300);
            } else {
                if (parseInt(total) > parseInt(input.val())) {
                    diffError.show(300);
                    diffInput.val('');
                } else {
                    diffError.hide(300);
                    diffInput.val((parseInt(input.val()) - parseInt(total)) + ' $');
                }
            }
        });
    </script>
@endpush
