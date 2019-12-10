@foreach($products as $product)
    <div class="productList">
        @if($product->subcategory->id == $subCategory->id)
            <a href="{{ route('product.show', ['product' => $product]) }}">
                <img src="{{ asset('img/'. $product->product_image) }}" width="100" height="100">
                    <h6>{{ $product->name }}</h6>
            </a>
        @endif
    </div>
@endforeach



