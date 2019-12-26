@extends('layouts.app')

@push('seo')
    <title>Brands in Emmo Tires {{ request()->has('city') ? 'in ' . request()->get('city') : '' }}</title>
    <meta name="title" content="Brands in Emmo Tires {{ request()->has('city') ? 'in ' . request()->get('city') : '' }}">
    <meta name="description" content="Brands in Emmo Tires {{ request()->has('city') ? 'in ' . request()->get('city') : '' }}">
    <meta property="og:title" content="Brands in Emmo Tires {{ request()->has('city') ? 'in ' . request()->get('city') : '' }}">
    <meta property="og:description" content="Brands in Emmo Tires {{ request()->has('city') ? 'in ' . request()->get('city') : '' }}">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:type" content="website">
    <link rel="canonical" href="{{ request()->fullUrl() }}">
@endpush

@section('content')
    <div class="container" style="padding-top: 70px;">

    </div>
    <section  style="background: white;">
        <div class="container">
            <p class="h1 text-center text-uppercase pt-5">Our brands</p>
            <div class="row justify-content-center" style="">
                @include('brand.list')
            </div>
        </div>

    </section>
@endsection


@extends('layouts.app')
@section('content')
    <section class="bg-black">

        <div class="bg_for_goodyear">

        </div>
        <div class="container">
            <div class="row justify-content-center pt-3">
                <img class="" src="{{ asset('img/goodyear-tire-1-logo 1.png') }}" alt="">
            </div>
            <div class="row text-white pt-3">
                <p>Tire Rack offers Goodyear Eagle performance, Assurance passenger, Wrangler light truck and Ultra Grip
                    winter tires, as well as many other tire lines used as Original Equipment on new vehicles.
                </p>
                <p>As America's best known tire manufacturer, Goodyear also ranks among the world's largest. Through its
                    Innovation Centers in Akron, Ohio and Colmar-Berg, Luxembourg, Goodyear strives to develop
                    state-of-the-art products that raise technology and performance standards.</p>
                <p>Everything Goodyear learns making tires to face the grueling conditions of racing inspire what they roll
                    into your tires. Goodyear is the sole supplier to the top three series in NASCAR, as well as
                    participates in NHRA drag racing and SCCA road racing.</p>
            </div>
            <div class="row">
                <div class="d-flex justify-content-between">
                    <a href="" class="text-white " style="padding:9px 32px;text-transform: uppercase;background: linear-gradient(90deg, #911617 2.37%, #911617 100%);border-radius: 5px;">Products</a>
                    <a href="" class="text-white " style="padding:9px 32px;text-transform: uppercase;background: linear-gradient(90deg, #FD595A 2.37%, #911617 100%);border-radius: 5px;">New</a>
                    <a href="" class="text-white " style="padding:9px 32px;text-transform: uppercase;background: linear-gradient(90deg, #FD595A 2.37%, #911617 100%);border-radius: 5px;">Special offers</a>
                </div>
            </div>
            <div class="row">
                <p class="h4 pt-3" style="color: #FD595A">PASSENGER TIRES</p>
            </div>
        </div>
    </section>
@endsection
