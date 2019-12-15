@foreach($categories as $category)
    <div class="categoryList col-12 col-md-6">
        <h2>{{ $category->name }}</h2>
        @include('product.subcategories')
    </div>
@endforeach
