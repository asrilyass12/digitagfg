            @extends('layouts.master')
            @section('content')
                <!-- End Hero -->
                <section id="hero">
                            <div class="container px-lg-5">
                                <div class="row align-items-end">
                                    <div class="col-lg-6 text-center text-lg-start">
                                        <h1 class="text-white text-center mb-4 animated slideInDown">نادي أبطال الديجيتال <br><p class="text-secondary" style="font-size: 30px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> علال الفاسي</p></h1>
                                        <p class="text-white pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                                        <div class="d-grid gap-2 col-4 mx-auto">
                                        <a href="register2.html" class="btn btn-secondary py-sm-1 px-sm-5 rounded-3 animated slideInLeft">نخارط معانا</a>
                                    </div>
                                    </div>
                                    <div class="col-lg-6 my-4 text-center text-lg-start">
                                        <img class="img-fluid animated zoomIn" src="img/أبطال الديجيتال.png" alt="">
                                    </div>
                                </div>
                            </div>
                    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
                    <defs>
                        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </defs>
                    <g class="wave1">
                        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
                    </g>
                    <g class="wave2">
                        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
                    </g>
                    <g class="wave3">
                        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
                    </g>
                    </svg>
                </div>
                    </section>
                <!-- Navbar & Hero End -->
            
                <!-- ////////////////////////////////////////////////// -->
            
            <div class="d-flex  flex-wrap justify-content-center">
                @foreach ($posts as $post)
                <div class="card mx-3" style="width: 18rem;">
                    <img src="{{asset('storage/'.$post->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}}</h5>
                        <p class="card-text">{{$post->excerpt}}</p>
                    </div>
                </div>
                @endforeach
            </div>
                <!-- ////////////////////////////////////////////////// -->
            @endsection