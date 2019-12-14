@extends('layouts.app')

@section('content')
    <section style="background-color: #060606;">
        @include('blocks.header')
    </section>
    <div class="container">
        <form class="border container p-4 bg-white z-depth-1" action="{{ route('dashboard.brand.store') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group ">
                    <!-- Material input -->
                    <div class="md-form">
                        <p style="color: #ff2f2c">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</p>
                        <p style="color: #ff2f2c">{{ !empty($brandError) ? $brandError: ' ' }}</p>
                        <input type="text" id="title" name="name" class="form-control" placeholder="Brand name">
                    </div>
                </div>
                <div class="form-group">
                    <!-- Material input -->
                    <div class="md-form">
                        <p style="color: #ff2f2c">{{ $errors->has('description') ? $errors->first('description') : ' ' }}</p>
                        <textarea class="form-control" name="description" id="descriptionForPost" placeholder="Brand description" rows="2"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <p style="color: #ff2f2c">{{ $errors->has('image') ? $errors->first('image') : ' ' }}</p>
                    <label for="addFile">Add brand logo</label>
                    <input type="file" name="image" class="form-control " id="addFile">
                </div>
            <button type="submit" title="Создать" class="btn btn-success">Add brand</button>
        </form>
    </div>
@endsection


