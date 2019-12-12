@extends('layouts.app')

@section('content')
    <section style="background-color: #060606">
        @include('blocks.header')
    </section>
    <div class="container">
        <div class="row justify-content-center">
            <form action="" method="post" enctype="multipart/form-data">
                <h5><br>Добавить продукт</h5>
                @csrf
                <div class="form-group">
                    <label for="postTitle">Заголовок поста</label>
                    <input name="title" class="form-control" id="postTitle" aria-describedby="emailHelp" placeholder="Ввести заголовок поста">
                </div>
                <div class="form-group">
                    <label for="postTitle">Описание поста</label>
                    <input name="title" class="form-control" id="postTitle" aria-describedby="emailHelp" placeholder="Ввести заголовок поста">
                </div>
                <div class="form-group">
                    <label for="textAreaForPost">Текст поста</label>
                    <textarea name="text" class="form-control" id="textAreaForPost" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="postTitle">Теги</label>
                    <input name="tag" class="form-control" id="postTag" placeholder="#тег">
                </div>

                <div class="form-group">
                    <label for="addFile">Загрузить фото к посту</label>
                    <input type="file" name="image" class="form-control-file" id="addFile">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
