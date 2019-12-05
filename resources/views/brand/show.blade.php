<div class="media position-relative">
    <div class="media-body">
        <ul>
            <a href="{{ route('brand.show', ['brand' => $brand]) }}">
                <img src="{{ asset('img/'. $brand->image) }}" alt="{{ $brand->name }}">
            </a>
        </ul>
    </div>
</div>

