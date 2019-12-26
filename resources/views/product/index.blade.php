@extends('layouts.app')

@push('seo')
    <title>{{ $brand->name }} in Emmo Tires {{ request()->has('city') ? 'in ' . request('city') : '' }}</title>
    <meta name="title" content="{{ $brand->name }} in Emmo Tires {{ request()->has('city') ? 'in ' . request('city') : '' }}">
    <meta name="description" content="{{ $brand->name }} in Emmo Tires {{ request()->has('city') ? 'in ' . request('city') : '' }}">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $brand->name }} in Emmo Tires {{ request()->has('city') ? 'in ' . request('city') : '' }}">
    <meta property="og:description" content="{{ $brand->name }} in Emmo Tires {{ request()->has('city') ? 'in ' . request('city') : '' }}">
@endpush

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
