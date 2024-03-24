<style>
    .btn-c {
        /* font-size: 40px; */
        width: 150px;

    }

    @media (max-width: 576px) {

        .btn-c {
            position: relative;
            right: 100px;
            width: 140px;
        }

        .descri {}



        /* Styles for screens smaller than 576px */
    }

    @media screen and (min-width: 601px) {
        div.example {
            font-size: 80px;
        }
    }

    @media screen and (max-width: 600px) {
        div.example {
            font-size: 30px;
        }
    }
</style>
@extends('layouts.app')
@section('title', 'Posts')

@section('content')



    <!-- All Posts -->
    <div class="container text-center pt-4  ">
        <h1 class="display-4 fw-bold ">All Posts</h1>
    </div>




    @if (Auth::check())
        <div class="mt-2">
            <a href="/blog/create" class="btn btn-success btn-c" style="margin-left: 112px">Create New Post</a>
        </div>
    @endif

    <hr class="mb-5" style="color: #374151">

    @if ($posts->isEmpty())
        <div class="container text-center">
            <h3 class="text-danger">No posts right now. Create a post.</h3>
        </div>
    @endif

    @if (session()->has('message-d'))
        <div class="container">
            <div class="alert alert-danger alert-container " role="alert">
                {{ session()->get('message-d') }}
            </div>
        </div>
    @endif
    @if (session()->has('message'))
        <div class="container">
            <div class="alert alert-success alert-container " role="alert">
                {{ session()->get('message') }}
            </div>
        </div>
    @endif

    @foreach ($posts as $post)
        <!-- Posts -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <a href="blog/{{ $post->slug }}">
                        <img src="/images/{{ $post->image_path }}" alt="" class="img-thumbnail "
                            style="">
                    </a>
                </div>
                <div class="col-md-6 mt-2 " style="position: relative; left:15px;">
                    <a href="blog/{{ $post->slug }}" style="text-decoration: none">
                        <h2 class=" fw-bold" style="color: #374151;font-size:40px;width: 95%">{{ $post->title }}</h2>
                    </a>
                    By: <span class=" " style="font-style: italic ;color: red;">{{ $post->user->name }}</span>
                    on <span class=" "
                        style="font-style: italic ;color: orange;">{{ date('d-m-Y', strtotime($post->updated_at)) }}</span>
                    <div class="exemple">
                        <p class="mt-4 mb-4 descri" style="color: #6B7280; width: 95%">
                            {{ Str::limit($post->description, 300) }}
                        </p>
                    </div>
                    <a href="blog/{{ $post->slug }}" class="btn  mt-3" style="background-color: #374150;color:white">READ
                        MORE</a>
                </div>
            </div>
        </div>

        <hr class="mt-5 mb-5" style="color: #374151">
    @endforeach


@endsection
