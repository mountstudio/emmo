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
                <p style="color: #ff2f2c">{{ $errors->has('brand') ? $errors->first('brand') : ' ' }}</p>
                <label for="brand_id">Brand</label>
                <select name="brand" id="brand_id">
                    <option value="{{ null }}">Choice brand...</option>
                    @foreach(\App\Brand::all() as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <p style="color: #ff2f2c">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</p>
                <label for="postTitle">Tire name</label>
                <input name="name" class="form-control" id="tireName" placeholder="Tire name">
            </div>
            <div class="form-group">
                <label for="sizeR">Sizes</label>
                <p style="color: #ff2f2c">{{ $errors->has('sizeR') ? $errors->first('sizeR') : ' ' }}</p>
                <input name="sizeR" class="form-control" id="sizeR" placeholder="example: 15">
                <p style="color: #ff2f2c">{{ $errors->has('full_size') ? $errors->first('full_size') : ' ' }}</p>
                <input name="full_size" class="form-control" id="full_size" placeholder="example: 255/65R15">
                <p style="color: #ff2f2c">{{ $errors->has('serv_desc') ? $errors->first('serv_desc') : ' ' }}</p>
                <input name="serv_desc" class="form-control" id="serv_desc" placeholder="example: 106V">
            </div>
            <div class="form-group">
                <p style="color: #ff2f2c">{{ $errors->has('description') ? $errors->first('description') : ' ' }}</p>
                <label for="descriptionForPost">Description</label>
                <textarea name="description" class="form-control" id="descriptionForPost" rows="3"></textarea>
            </div>
            <div class="form-group" id="selectSubcategory">
                <div class="categories">
                    <p style="color: #ff2f2c">{{ $errors->has('category') ? $errors->first('category') : ' ' }}</p>
                    <label for="category">Category</label>
                    <select name="category" id="category_id">
                        <option value="{{ null }}">Choose category...</option>
                        @foreach(\App\Category::all() as $category)
                            <option data-category="{{ $category }}"
                                    value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="subcategories">
                    <p style="color: #ff2f2c">{{ $errors->has('subcategory') ? $errors->first('subcategory') : ' ' }}</p>

                </div>
            </div>
            <div class="form-group">
                <p style="color: #ff2f2c">{{ $errors->has('product_image') ? $errors->first('product_image') : ' ' }}</p>
                <label for="addFile">Upload image tire</label>
                <input type="file" name="product_image" class="form-control-file" id="addFile">
            </div>
            <button type="submit" class="btn btn-primary">Add tire</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        $('#category_id').change(function (e) {
            let check = $(e.currentTarget);
            let categoryID = check.val();
            $('div.subcategories').empty();
            $('div.subcategories').append('<label for="subcategory">Subcategories</label>' +
                '                    <select name="subcategory" id="subcategory">' +
                '                        <option value="{{ null }}">Choice subcategory...</option>' +
                '                        @foreach(\App\Subcategory::all()->where('category_id', 2) as $subcategory)' +
                '                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>' +
                '                        @endforeach' +
                '                    </select>');
        });
    </script>
@endpush

