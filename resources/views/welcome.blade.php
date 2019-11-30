@extends('layouts.app')

@section('title')

@endsection
@section('content')
    <section style="background: url({{ asset('img/bg_emmo.png') }}) no-repeat; background-size: cover;height: 1000px">
        @include('blocks.header')
        @include('blocks.middle')
    </section>
    <section style="background: url({{ asset('img/bg.png') }}) no-repeat; background-size: cover;height: 2000px;padding: 0;margin: 0">

    </section>
    <section style="background: url({{ asset('img/bg_footer.png') }}) no-repeat; background-size: cover;height: 1700px;">

    </section>
@endsection
