@extends('layouts.app')

@section('title')

@endsection
@section('content')
    <h1 class="d-none">Emmo Tires</h1>
    <div class="bg-black">
        <section class="bg-black pb-5"
                 style="background: url({{ asset('img/bg_emmo.jpg') }}) no-repeat; background-size: cover; padding-top: 150px;">
            @include('blocks.middle')
        </section>
        <section style="padding: 30px;filter: blur(10px);margin-top: -36px;margin-bottom: -15px;background: black;">
        </section>
        <section class="bg-black py-5 lazy" style="background-size: cover;" data-src="{{ asset('img/bg.png') }}">
{{--            @include('blocks.our_advantages')--}}


            <section class="my-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                            <div class="card shadow-none">
                                <img src="{{ asset('icons/tires.png') }}" style="width: 100px;" class="text-center mx-auto card-img-top" alt="">
                                <div class="card-body text-white text-center">
                                    <p>A large selection of <a href="{{ route('brand.index', ['city' => 'city']) }}" class="text-danger" title="Tires in emmo tires">tires</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                            <div class="card shadow-none">
                                <img src="{{ asset('icons/free-shipping.png') }}" style="width: 100px;" class="text-center mx-auto card-img-top" alt="">
                                <div class="card-body text-white text-center">
                                    <p><span class="text-danger">Free</span> shipping</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                            <div class="card shadow-none">
                                <img src="{{ asset('icons/business-and-finance.png') }}" style="width: 100px;" class="text-center mx-auto card-img-top" alt="">
                                <div class="card-body text-white text-center">
                                    <p>You will have <span class="text-danger">financial benefit</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            @include('blocks.nav_cards')
            {{--@include('blocks.best_sellers')--}}
{{--            @include('blocks.alime')--}}

        </section>
        <section class="bg-black pb-5"
                 style="background: url({{ asset('img/bg_footer_5.png') }}) no-repeat; background-size: cover;margin-top: -35px;">
            @include('blocks.brands')
            @include('blocks.articles')

        </section>
    </div>
@endsection
