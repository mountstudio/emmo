@foreach($brands as $brand)
    <div class="col-12 col-md-3 py-5 text-white">
        @include('brand.show')
    </div>
@endforeach
