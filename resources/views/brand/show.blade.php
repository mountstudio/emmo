<div class="media position-relative">
    <div class="media-body text-center">
        <a class="" href="{{ route('brand.show', ['brand' => $brand, 'city' => request()->get('city')]) }}">
            <img class="img-fluid" src="{{ asset('img/'. $brand->image) }}" alt="{{ $brand->name }}">
        </a>
    </div>
</div>

