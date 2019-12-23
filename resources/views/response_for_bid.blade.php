@extends('layouts.app')
@section('content')
    <section class="bg-black pt-5">
        <div class="container my-5 pt-5">
            <p class="h2 mb-2 text-white">Information about your bid:</p>

            <div class="row text-white text-left">
                <div class="col-12 col-md-6">
                    <p class="pb-0 mt-0 mb-0"><b>Width: </b>{{ $bid->width }}</p>
                    <p class="pb-0 mt-0 mb-0"><b>Profile: </b>{{ $bid->profile }}</p>
                    <p class="pb-0 mb-0 mt-0"><b>Diameter: </b>{{ $bid->diameter }}</p>
                    <p class="m-0 mt-0 mb-0"><b> Zip code: </b>{{ $bid->zip_code }}</p>
                    <p><b>Phone number: </b>{{ $bid->phone_number }}</p>
                    <p>Your bid has been accepted, we will contact you by phone to clarify your order.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
