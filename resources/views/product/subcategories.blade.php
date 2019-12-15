@foreach($subCategories as $subCategory)
    <div class="subcategoryList col-8 col-md-8">
        @if($subCategory->category->id == $category->id)
            <h4>{{ $subCategory->name }}</h4>
            @include('product.products')
        @endif
    </div>
@endforeach
