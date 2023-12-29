@extends('layouts.app')
@section('title', 'Home')

@section('content')

    <!-- Hero -->
    <div class="hero d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text text-center">
                        <h1 class="fw-bold" style="font-size: 50px">Welcome to my Blog</h1>
                        <hr class="mx-auto">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-lg btn-light" href="/blog">Start Reading</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- how to be an expert -->
    <div class="container mx-auto " style="margin-top:65px ;">
        <div class="row">
            <div class="col-lg-6">
                <img src="https://picsum.photos/id/239/960/620" alt="" class="img-fluid"
                    style="border-radius: 10px" />
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold display-4 text-uppercase mt-3 lh-sm" style="color: #374151; width: 100%;">HOW TO BE AN
                    EXPERT IN 2023</h2>
                <p class="fw-bold lh-base" style="color: #374150; font-size: 23px;   width: 100%;">
                    You can find a list of all programming languages here.
                </p>
                <p class="text-secondary lh-base" style="width: 100%;">
                    Get the same random image every time based on a seed, by adding to the start of the URL. You may combine
                    any of the options above. For example, to get a specific image that is grayscale and blurred.
                </p>
                <a class="btn btn-dark btn-lg mt-1"
                    style="background-color: #374151; text-transform: uppercase; width: fit-content;" href="/blog">Read
                    More</a>
            </div>
        </div>
    </div>

    <!-- Blog Categories -->

    <div class="mt-5" style="background-color: #374151;">
        <div class="container mx-auto py-4">
            <h2 class="h4 text-white text-center mb-5">Blog Categories</h2>
            <div class="row justify-content-between">
                <div class="col-sm-3 mb-3">
                    <div class="fw-bold text-white text-center"
                        style="font-size: 25px;font-family: 'Montserrat', sans-serif;">UX Design</div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="fw-bold text-white text-center"
                        style="font-size: 25px;font-family: 'Montserrat', sans-serif;">Programming</div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="fw-bold text-white text-center"
                        style="font-size: 25px;font-family: 'Montserrat', sans-serif;">Graphic</div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="fw-bold text-white text-center"
                        style="font-size: 25px;font-family: 'Montserrat', sans-serif;">Front-End</div>
                </div>
            </div>
        </div>
    </div>




    <div class="container mx-auto text-center py-5 mt-5">
        <h2 class="fw-bold display-4 py-3">Recent Posts</h2>
        <p class="lead text-secondary lh-base">
            PHP is a general-purpose scripting language geared toward web development.
            It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.
            The PHP reference implementation is now produced by The PHP Group.
            PHP is a server scripting language and a powerful tool for making dynamic and interactive web pages.
            PHP is a widely-used, free, and efficient alternative to other scripting languages.
        </p>

        <div class="row mt-5 mb-5 p-4 " style="">
            <div class="col-md-6 col-sm-12 p-5  rounded" style="background-color: #b35900;">
                <ul class="list-inline">
                    <li class="list-inline-item   p-2 rounded mb-2 list-link" style=""><a href="/"
                            class="a-link">PHP</a></li>
                    <li class="list-inline-item   p-2 rounded mb-2 list-link" style=""><a href="/"
                            class="a-link">Programming</a></li>
                    <li class="list-inline-item   p-2 rounded mb-2 list-link" style=""><a href="/"
                            class="a-link">Languages</a></li>
                    <li class="list-inline-item   p-2 rounded mb-2 list-link" style=""><a href="/"
                            class="a-link">Backend</a></li>
                </ul>

                <h3 class="text-sm mt-4" style="text-align: start; font-size:17px; color:white;">PHP is a general-purpose
                    scripting language geared toward web development. It was originally created by Danish-Canadian
                    programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced
                    by The PHP Group. PHP is a server scripting language and a powerful tool for making dynamic and
                    interactive web pages. PHP is a widely-used, free, and efficient alternative to other scripting
                    languages.</h3>
                <a href="/blog" class="btn m-4  read ">
                    READ MORE
                </a>
            </div>

            <div class="col-md-6 col-sm-12 p-0 ">
                <div class="d-flex align-items-center justify-content-center  " style="height: 100%;">
                    <img class="img-fluid rounded-sm" src="https://picsum.photos/id/242/960/620" alt="">
                </div>
            </div>
        </div>



    @endsection
