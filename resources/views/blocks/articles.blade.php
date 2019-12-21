<div class="container py-5">
    <div class="row">
        <div class="col-12">
                <div class="row row-cols-1 row-cols-md-3">
                    @foreach($blogs as $blog)
                        <div class="col mb-4">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('img/'.$blog->blog_image) }}" class="card-img-top" alt="..." style="width: auto; height: 300px; ">
                                <div class="card-body px-0">
                                    <h5 class="card-title text-white">{{ $blog->title }}</h5>
                                    <p class="card-text text-white">{{ $blog->description }}</p>
                                </div>
                                <div>
                                    <a href="" class="text-white choose_btn">More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>

