<div class="media position-relative">
    <div class="media-body text-center">
        <a class="" href="{{ route('brand.show', ['city' => request()->segment(1), 'brand' => $brand]) }}">
            <img class="img-fluid" src="{{ asset('img/'. $brand->image) }}" alt="{{ $brand->name }}">
        </a>
    </div>
</div>

