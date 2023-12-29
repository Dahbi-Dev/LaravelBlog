@extends('layouts.app')
@section('title', 'Edit Post')

@section('content')

<!-- Add posts -->
<div class="container text-center   ">
    <h1 class="display-3 fw-bold  " style="color: #374150">Edit Post</h1>
</div>


    <!-- data create -->
    <div class="container mt-5">
        <form action="/blog/{{$post->slug}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row pb-4" >
                <label for="title" class="col-md-2 col-form-label"style=" color: #374150">Title</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" required >
                </div>
            </div>

            <div class="form-group row pb-4">
                <label for="content" class="col-md-2 col-form-label " style=" color: #374150">Description</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="content" name="description" rows="5" >{{$post->description}}</textarea>
                </div>
            </div>

            <div class="form-group row pb-4">
                <label for="image" class="col-md-2 col-form-label"style=" color: #374150">Image</label>
                <div class="col-md-10">
                    <input type="file" class="form-control-file" value="{{$post->images}}" id="image" name="image">
                </div>
            </div>

            <div class="form-group row pb-4">
                <div class="col-md-10 offset-md-2">
                    <button type="submit" class="btn " style="color: white; background:#374151;">Submit</button>
                </div>
            </div>
        </form>
    </div>


@endsection
