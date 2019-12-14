@foreach($brands as $brand)
    <div class="subcategoryList">
            <h5>{{ $brand->name }}</h5>
            @include('subcategory.products')
    </div>
@endforeach
