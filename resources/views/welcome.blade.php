@extends('layouts.app')

@section('title')

@endsection
@section('content')
    <section style="background: url({{ asset('img/bg_emmo.png') }}) no-repeat; background-size: cover;height: 500px">
        @include('blocks.header')
    </section>
@endsection
