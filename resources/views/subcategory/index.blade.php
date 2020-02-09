@extends('layouts.app')

@section('content')
    <section class="pb-5" style="background-color: white;padding-top: 120px;">
        <div class="container">
            <div class="row justify-content-center">
                @include('subcategory.subcategories')
            </div>
        </div>
    </section>
@endsection
