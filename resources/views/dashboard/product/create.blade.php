@extends('layouts.app')
@section('content')
    <section style="background-color: #060606;">
        @include('blocks.header')
    </section>
    <div class="container">
        <h2><br></h2>
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="brand_id">Brand</label>
                <select name="brand" id="brand_id">
                    <option value="{{ null }}">Choice brand...</option>
                    @foreach(\App\Brand::all() as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="postTitle">Tire name</label>
                <input name="name" class="form-control" id="tireName" placeholder="tire name">
            </div>
            <div class="form-group">
                <label for="descriptionForPost">Description</label>
                <textarea name="description" class="form-control" id="descriptionForPost" rows="3"></textarea>
            </div>
            <div class="form-group">
                <select name="category" id="category_id">
                    <option value="{{ null }}">Choice category...</option>
                    @foreach(\App\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="addFile">Upload image tire</label>
                <input type="file" name="image" class="form-control-file" id="addFile">
            </div>
            <button type="submit" class="btn btn-primary">Add tire</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="{{ asset('js/editor.js') }}"></script>
@endpush

