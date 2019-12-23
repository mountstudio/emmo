@extends('layouts.app')
@section('content')
    <section class="bg-black pt-5">
        <div class="container my-5 pt-5">
            <p class="h2 mb-0 text-white">{{ $post->title }}</p>
            <p class="text-white">{{ $post->created_at }}</p>
            <div class="row text-white text-left">
                <div class="col-8">
                    <img src="{{ asset('img/'.$post->blog_image) }}" class="card-img-top" style="width: auto; height: 350px;">
                    <p>{!! $post->text  !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
