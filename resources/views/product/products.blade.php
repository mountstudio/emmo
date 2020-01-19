@foreach($products as $product)
    <div class="productList col-10 col-md-8">
        @if($product->subcategory->id == $subCategory->id)
            <a href="{{ route('product.show', ['city' => request()->segment(1), 'brand' => $product->brand, 'product' => $product]) }}">
{{--                <img src="{{ asset('img/'. $product->product_image) }}" width="100" height="100">--}}
                    <h6>{{ $product->name }}</h6>
            </a>
        @endif
    </div>
@endforeach



