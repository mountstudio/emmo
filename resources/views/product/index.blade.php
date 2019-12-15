@extends('layouts.app')

@section('content')
    <section class="bg-white">
        <div class="container " style="padding: 150px 0;">
            <div class="row justify-content-center">
                <h1>{{ $brand->name }}</h1>
            </div>
            <div class="row justify-content-center">
                @include('product.categories')
            </div>
        </div>
    </section>
@endsection
