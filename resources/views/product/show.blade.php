@extends('layouts.app')

@section('content')
    <section style="background-color: #060606">
        @include('blocks.header')
    </section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="form-group">
                        <label for="product">Название продукта</label>
                        <input class="form-control" id="product" value="{{ $product->name }}" disabled="true">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset('img/'.$product->product_image) }}" class="img-fluid">
                    </div>
                    <div class="form-group">
                        {!! $product->description !!}
                    </div>
                    <div class="form-group">
{{--                        {!! $product->specs !!}--}}
                    </div>
                    <a href="#"
                       class="btn btn-dark btn-block text-fut-book but-hov text-white buy_book d-lg-block d-none"
                       data-id="{{ $product->id }}" id="basket">В корзину
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
