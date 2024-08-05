<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Navbar start -->
<div class="container-fluid sticky-top px-0">
    <div class="container-fluid topbar bg-dark d-none d-lg-block">
        <div class="container px-0">
            <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
                <!-- Nội dung khác của topbar (nếu có) -->
                
                <!-- Đưa các nút Đăng ký và Đăng nhập sang góc bên phải -->
                <div class="d-flex align-items-center ms-auto">
                    @if (Auth::user())
                    {{Auth::user()->name}}
                   <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="btn btn-danger me-2">Log out</button>
                   </form>
                    @else
                    <a href="{{route('login')}}"><button class="btn btn-primary me-2">Log in</button></a>
                    <!-- Button Đăng ký -->
                    <a href="{{route('register')}}"><button class="btn btn-secondary">Register</button></a>
                    @endif
                </div>
            </div>
        </div>
    
        
    </div>
    <div class="container-fluid bg-light">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl">
                <a href="index.html" class="navbar-brand mt-3">
                    <p class="text-primary display-6 mb-2" style="line-height: 0;">Newsers</p>
                    <small class="text-body fw-normal" style="letter-spacing: 12px;">Nespaper</small>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                    <div class="navbar-nav mx-auto border-top">
                        <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                        <a href="detail-page.html" class="nav-item nav-link">Detail Page</a>
                        <a href="404.html" class="nav-item nav-link">404 Page</a>
                        <div class="nav-item dropdown">
                            @php
                            $category = DB::table('categories')->get();

                            @endphp
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                @foreach ($category as $item)
                                <a href="{{url('/categories/'.$item->slug)}}" class="dropdown-item">{{$item->name}}</a>
                                @endforeach
                                <!-- <a href="#" class="dropdown-item">Dropdown 2</a>
                                        <a href="#" class="dropdown-item">Dropdown 3</a>
                                        <a href="#" class="dropdown-item">Dropdown 4</a> -->
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <div class="d-flex flex-nowrap border-top pt-3 pt-xl-0">
                        <div class="d-flex">
                            <img src="{{asset("client/img/weather-icon.png")}}" class="img-fluid w-100 me-2" alt="">
                            <div class="d-flex align-items-center">
                                <strong class="fs-4 text-secondary">31°C</strong>
                                <div class="d-flex flex-column ms-2" style="width: 150px;">
                                    <span class="text-body">NEW YORK,</span>
                                    <small>Mon. 10 jun 2024</small>
                                </div>
                            </div>
                        </div>
                        <button class="btn-search btn border border-primary btn-md-square rounded-circle bg-white my-auto" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->