@foreach($products as $product)
    <div class="productList">
        @if($product->brand->id == $brand->id)
            <a href="{{ route('product.show', ['product' => $product]) }}">
                <h6>{{ $product->name }}</h6>
            </a>
        @endif
    </div>
@endforeach


