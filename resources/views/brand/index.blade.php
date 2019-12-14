@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px;">

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
