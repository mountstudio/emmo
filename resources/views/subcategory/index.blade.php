@extends('layouts.app')

@section('content')
    <section style="background-color: white;padding-top: 100px;">
        <div class="container">
            <div class="row justify-content-center">
                @include('subcategory.subcategories')
            </div>
        </div>
    </section>
@endsection
