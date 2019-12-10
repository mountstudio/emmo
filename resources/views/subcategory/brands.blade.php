@foreach($brands as $brand)
    <div class="subcategoryList">
            <h4>{{ $brand->name }}</h4>
            @include('subcategory.products')
    </div>
@endforeach
