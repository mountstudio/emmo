@extends('layouts.app')

@section('content')
    <section style="background-color: #060606">
        @include('blocks.header')
    </section>
    <div class="container">
        <div class="row justify-content-center">
            @include('product.categories')
        </div>
    </div>
@endsection
