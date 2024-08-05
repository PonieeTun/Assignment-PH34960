@extends('layouts.client.main')
@section('content')
<!-- Single Product Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <ol class="breadcrumb justify-content-start mb-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-dark">Single Page</li>
        </ol>
        <div class="row g-4">
            <div class="col-lg-8">
    <div class="mb-4">
        <a href="#" class="h1 display-4 text-dark">{{ $posts->title }}</a>
    </div>
    <div class="position-relative rounded overflow-hidden mb-3">
        <img src="{{ $posts->img }}" class="img-fluid rounded w-100" alt="{{ $posts->title }}">
        <div class="position-absolute top-0 end-0 m-3 bg-primary text-white px-3 py-1 rounded">
            Business
        </div>  
    </div>
    <div class="d-flex justify-content-between mb-4">
        <a href="#" class="text-muted d-flex align-items-center"><i class="fa fa-clock me-2"></i> 06 minute read</a>
        <a href="#" class="text-muted d-flex align-items-center"><i class="fa fa-eye me-2"></i>
            @php
                $formattedViews = $posts->views >= 1000 ? number_format($posts->views / 1000, 1) . 'k' : $posts->views;
            @endphp
            {{ $formattedViews }}
        </a>
    </div>

    <div class="bg-light p-4 mb-4 rounded border-start border-4 border-primary">
        <h2 class="mb-2">{{ $posts->title }}</h2>
    </div>
    <p>{{ $posts->content }}</p>
    
    <div class="mb-4">
        <ul class="nav nav-pills border-bottom mb-3">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="#tab-1">Sports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#tab-2">Magazine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#tab-3">Politics</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show active">
                <div class="row g-4">
                    <div class="col-3">
                        <img src="{{ asset('client/img/footer-4.jpg') }}" class="img-fluid rounded" alt="Tab 1">
                    </div>
                    <div class="col-9">
                        <h4>Amelia Alex</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade">
                <div class="row g-4">
                    <div class="col-3">
                        <img src="{{ asset('client/img/footer-5.jpg') }}" class="img-fluid rounded" alt="Tab 2">
                    </div>
                    <div class="col-9">
                        <h4>Amelia Alex</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-pane fade">
                <div class="row g-4">
                    <div class="col-3">
                        <img src="{{ asset('client/img/footer-6.jpg') }}" class="img-fluid rounded" alt="Tab 3">
                    </div>
                    <div class="col-9">
                        <h4>Amelia Alex</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light rounded p-4 mb-4">
        <h4 class="mb-4">You Might Also Like</h4>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm">
                    <img src="{{ asset('client/img/chatGPT.jpg') }}" class="img-fluid rounded me-3" alt="Related Post 1">
                    <div>
                        <a href="#" class="h5 mb-2 d-block">Lorem Ipsum is simply dummy text...</a>
                        <p class="text-muted mb-0"><i class="fa fa-clock me-2"></i> 06 minute read</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center p-3 bg-white rounded shadow-sm">
                    <img src="{{ asset('client/img/chatGPT-1.jpg') }}" class="img-fluid rounded me-3" alt="Related Post 2">
                    <div>
                        <a href="#" class="h5 mb-2 d-block">Lorem Ipsum is simply dummy text...</a>
                        <p class="text-muted mb-0"><i class="fa fa-clock me-2"></i> 06 minute read</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light rounded p-4 my-4">
        <h4 class="mb-4">Comments</h4>
        <div class="p-4 bg-white rounded mb-4 shadow-sm">
            <div class="d-flex align-items-start mb-3">
                <img src="{{ asset('client/img/footer-4.jpg') }}" class="img-fluid rounded-circle me-3" alt="Commenter">
                <div>
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-0">James Boreego</h5>
                        <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                    </div>
                    <small class="text-muted d-block mb-2"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                </div>
            </div>
            <div class="d-flex align-items-start">
                <img src="{{ asset('client/img/footer-4.jpg') }}" class="img-fluid rounded-circle me-3" alt="Commenter">
                <div>
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-0">James Boreego</h5>
                        <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                    </div>
                    <small class="text-muted d-block mb-2"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light rounded p-4 my-4">
        <h4 class="mb-4">Leave A Comment</h4>
        <form action="#">
            <div class="row g-4">
                <div class="col-lg-6">
                    <input type="text" class="form-control py-3" placeholder="Full Name" required>
                </div>
                <div class="col-lg-6">
                    <input type="email" class="form-control py-3" placeholder="Email Address" required>
                </div>
                <div class="col-12">
                    <textarea class="form-control" cols="30" rows="7" placeholder="Write Your Comment Here" required></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary py-3 w-100" type="submit">Submit Now</button>
                </div>
            </div>
        </form>
    </div>
</div>

            <div class="col-lg-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="p-3 rounded border">
                            <div class="input-group w-100 mx-auto d-flex mb-4">
                                <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="btn btn-primary input-group-text p-3"><i class="fa fa-search text-white"></i></span>
                            </div>
                            <h4 class="mb-4">Popular Categories</h4>
                            <div class="row g-2">
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Life Style
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Fashion
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Relationship
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Art & Culture
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3">
                                        Self Development
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#" class="link-hover btn btn-light w-100 rounded text-uppercase text-dark py-3 mb-4">
                                        travel & tourism
                                    </a>
                                </div>
                            </div>
                            <h4 class="my-4">Stay Connected</h4>
                            <div class="row g-4">
                                <div class="col-12">
                                    <a href="#" class="w-100 rounded btn btn-primary d-flex align-items-center p-3 mb-2">
                                        <i class="fab fa-facebook-f btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">13,977 Fans</span>
                                    </a>
                                    <a href="#" class="w-100 rounded btn btn-danger d-flex align-items-center p-3 mb-2">
                                        <i class="fab fa-twitter btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">21,798 Follower</span>
                                    </a>
                                    <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-2">
                                        <i class="fab fa-youtube btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">7,999 Subscriber</span>
                                    </a>
                                    <a href="#" class="w-100 rounded btn btn-dark d-flex align-items-center p-3 mb-2">
                                        <i class="fab fa-instagram btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">19,764 Follower</span>
                                    </a>
                                    <a href="#" class="w-100 rounded btn btn-secondary d-flex align-items-center p-3 mb-2">
                                        <i class="bi-cloud btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">31,999 Subscriber</span>
                                    </a>
                                    <a href="#" class="w-100 rounded btn btn-warning d-flex align-items-center p-3 mb-4">
                                        <i class="fab fa-dribbble btn btn-light btn-square rounded-circle me-3"></i>
                                        <span class="text-white">37,999 Subscriber</span>
                                    </a>
                                </div>
                            </div>
                            <h4 class="my-4">Popular News</h4>
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="{{asset("client/img/features-sports-1.jpg")}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">Sports</p>
                                                <a href="#" class="h6">
                                                    Get the best speak market, news.
                                                </a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="{{asset("client/img/features-technology.jpg")}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">Technology</p>
                                                <a href="#" class="h6">
                                                    Get the best speak market, news.
                                                </a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="{{asset("client/img/features-fashion.jpg")}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">Fashion</p>
                                                <a href="#" class="h6">
                                                    Get the best speak market, news.
                                                </a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row g-4 align-items-center features-item">
                                        <div class="col-4">
                                            <div class="rounded-circle position-relative">
                                                <div class="overflow-hidden rounded-circle">
                                                    <img src="{{asset("client/img/features-life-style.jpg")}}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                </div>
                                                <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="features-content d-flex flex-column">
                                                <p class="text-uppercase mb-2">Life Style</p>
                                                <a href="#" class="h6">
                                                    Get the best speak market, news.
                                                </a>
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <a href="#" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View More</a>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-bottom my-3 pb-3">
                                        <h4 class="mb-0">Trending Tags</h4>
                                    </div>
                                    <ul class="nav nav-pills d-inline-flex text-center mb-4">
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Lifestyle</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Sports</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Politics</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Magazine</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Game</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Movie</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">Travel</span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3">
                                            <a class="d-flex py-2 bg-light rounded-pill me-2" href="#">
                                                <span class="text-dark link-hover" style="width: 90px;">World</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-12">
                                    <div class="position-relative banner-2">
                                        <img src="{{asset("client/img/banner-2.jpg")}}" class="img-fluid w-100 rounded" alt="">
                                        <div class="text-center banner-content-2">
                                            <h6 class="mb-2">The Most Populer</h6>
                                            <p class="text-white mb-2">News & Magazine WP Theme</p>
                                            <a href="#" class="btn btn-primary text-white px-4">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Product End -->

@endsection