@extends('layouts.app')

@section('content')
    <section style="background-color: #060606;">
        @include('blocks.header')
    </section>
    <div class="container">
        <form class="border container p-4 bg-white z-depth-1" action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6 form-group ">
                    <!-- Material input -->
                    <div class="md-form">
                        <p style="color: #ff2f2c">{{ $errors->has('title') ? $errors->first('title') : ' ' }}</p>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Заголовок поста">
                    </div>
                </div>
                <div class="col-6 form-group">
                    <!-- Material input -->
                    <div class="md-form">
                        <p style="color: #ff2f2c">{{ $errors->has('description') ? $errors->first('description') : ' ' }}</p>
                        <textarea class="form-control" name="description" id="descriptionForPost" placeholder="Краткое описание поста" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-6 form-group">
                    <p style="color: #ff2f2c">{{ $errors->has('blog_image') ? $errors->first('blog_image') : ' ' }}</p>
                    <label for="addFile">Выберите фото</label>
                    <input type="file" name="blog_image" class="form-control " id="addFile">
                </div>
                <div class="col-12 form-group">
                    <!-- Material input -->
                    <div class="md-form">
                        <p style="color: #ff2f2c">{{ $errors->has('text') ? $errors->first('text') : ' ' }}</p>
                        <textarea name="text" id="content_id" cols="30" rows="10" class="form-control richTextBox"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" title="Создать" class="btn btn-success">Создать пост</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="{{ asset('js/editor.js') }}"></script>
@endpush
