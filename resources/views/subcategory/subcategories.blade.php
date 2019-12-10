@foreach($subCategories as $subCategory)
    <div class="subcategoryList col-6">
        <h2>{{ $subCategory->name }}</h2>
        @include('subcategory.brands')
    </div>
@endforeach
