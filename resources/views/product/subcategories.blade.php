@foreach($subCategories as $subCategory)
    <div class="subcategoryList">
        @if($subCategory->category->id == $category->id)
            <h4>{{ $subCategory->name }}</h4>
            @include('product.products')
        @endif
    </div>
@endforeach
