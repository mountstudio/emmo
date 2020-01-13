@extends('layouts.app')

@section('title')

@endsection
@section('content')
    <div class="bg-black">
        <section class="bg-black pb-5"
                 style="background: url({{ asset('img/bg_emmo.jpg') }}) no-repeat; background-size: cover; padding-top: 150px;">
            @include('blocks.middle')
        </section>
        <section style="padding: 30px;filter: blur(10px);margin-top: -36px;margin-bottom: -15px;background: black;">
        </section>
        <section class="bg-black py-5 lazy" data-src="{{ asset('img/bg.png') }}">
            @include('blocks.our_advantages')
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
