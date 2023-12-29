<style>
    /* CSS Styles */

    .container {
  max-width: 800px;
  margin: 0 auto;
}


.text-center {
  text-align: center;
}

.p-3 {
  padding: 1rem;
}

.image-container {
  text-align: center;
}

.post-image {
  max-width: 100%;
  height: auto;
  display: block;
  margin: 0 auto;
  max-height: 400px;
}

.mt-4 {
  margin-top: 2rem;
}

.mb-4 {
  margin-bottom: 2rem;
}

.div-d {
  display: flex;
  justify-content: center;
  margin-top: 2rem;
}

.div-d .btn {
  margin-right: 1rem;
}

@media (max-width: 576px) {
  .div-d {
    flex-direction: column;
    align-items: center;
  }

  .div-d .btn {
    margin-right: 0;
    margin-bottom: 1rem;
  }
}
div.example {
  padding: 20px;
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
@section('title', $post->title)

@section('content')

    <!-- Title and date and user -->
    <div class="container text-center  mb-2 mt-3">
        <h1 class="display-3 fw-bold" style="color: #374150">{{$post->title}}</h1>
        <span style="font-size: 20px">
            By: <span class="text-italic" style="color: #374151;">{{$post->user->name}}</span>
            On <span class="text-muted" style="color: #374151;">{{date('d-m-Y', strtotime($post->updated_at))}}</span>
        </span>
    </div>


    @if (session()->has('message'))
    <div class="container">
      <div class="alert alert-info alert-container " role="alert"  >
        {{session()->get('message')}}
      </div>
    </div>
    @endif




  <!-- Posts image and description -->
  <div class="container">
    <div class="container ">
      <div class="image-container">
        <img src="/images/{{$post->image_path}}" class="post-image rounded" alt="Post Image" />
      </div>
      <div class="exemple">
        <p class="mt-4 mb-4 text-center" style="color: #6B7280;">{{$post->description}}</p>

      </div>

      @if (Auth::user()&& Auth::user()->id == $post->user_id)
      <div class="text-center div-d">
        <a href="{{$post->slug}}/edit" class="btn btn-edit bg-success text-white fw-bold">Edit</a>

        <form method="POST" action="/blog/{{$post->slug}}" class="fom-d">
          @csrf
          @method('delete')
          <button class="btn btn-edit bg-danger text-white fw-bold">Delete</button>
        </form>
      </div>
      @endif

    </div>
  </div>


@endsection
