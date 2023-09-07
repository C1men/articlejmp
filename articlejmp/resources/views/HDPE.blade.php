<!DOCTYPE html>
<html lang="en">
<head>
<title>{{__('main.menu.produk1')}} - Jaya Mulya Plastik</title>
@include('layout/head')
</head>

<body>
    <!-- Navbar Start -->
    {{-- <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{url ('/')}}" class="navbar-brand p-0">
                <h1 class="m-0"><img src="{{asset('JMP Biru/img/logo.jpg')}}" alt="logo Jaya Mulya Plastik"></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{url ('/')}}" class="nav-item nav-link">Home</a>
                    <a href="{{url ('/about')}}" class="nav-item nav-link active">About</a>
                    <div class="nav-item dropdown">
                        <a href="{{url ('/product')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                        <div class="dropdown-menu m-0">
                            <a href="hdpe.html" class="dropdown-item">HDPE</a>
                            <a href="pp.html" class="dropdown-item">PP</a>
                            <a href="pet.html" class="dropdown-item">PET</a>
                        </div>
                    </div>
                    <a href="{{url ('/article')}}" class="nav-item nav-link">Article</a>
                    <a href="{{url ('/contact')}}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About</h1>
                    <a href="{{url ('/')}}" class="h5 text-white">Home</a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#071952}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                    <a href="{{url ('/about')}}" class="h5 text-white">About</a>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid position-relative p-0">
        @include('layout/headernew')
        
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{__('main.menu.produk1')}}</h1>
                    <a href="{{url ('/')}}" class="h5 text-white">{{__('main.menu.home')}}</a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#071952}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                    <a href="{{url ('/about')}}" class="h5 text-white">{{__('main.menu.produk1')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                <h5 class="fw-bold text-primary text-uppercase">{{__('main.menu.subproduk')}}</h5>
                <h1 class="mb-0">HIGH DENSITY POLYETHYLENE <br>(HDPE)<br></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-green rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset ('JMP Biru/img/blwnatural3.jpg')}}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h2 class="text-primary">HDPE NATURAL</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-green rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset ('JMP Biru/img/blwtembok2.jpg')}}" alt="HDPE Tembok">
                        </div>
                        <div class="text-center py-4">
                            <h2 class="text-primary">HDPE TEMBOK</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-green rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset ('JMP Biru/img/blwmerah1.jpg')}}" alt="HDPE merah">
                        </div>
                        <div class="text-center py-4">
                            <h2 class="text-primary">HDPE MERAH</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-green rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset ('JMP Biru/img/blwbiru3.jpg')}}" alt="HDPE Biru">
                        </div>
                        <div class="text-center py-4">
                            <h2 class="text-primary">HDPE BIRU</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-green rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset ('JMP Biru/img/blwhijau1.jpg')}}" alt="HDPE Hijau">
                        </div>
                        <div class="text-center py-4">
                            <h2 class="text-primary">HDPE HIJAU</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-green rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset ('JMP Biru/img/blwhitam4.jpg')}}" alt="HDPE Hitam">
                        </div>
                        <div class="text-center py-4">
                            <h2 class="text-primary">HDPE HITAM</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-green rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset ('JMP Biru/img/hdpemesran2.jpg')}}" alt="HDPE Mesran">
                        </div>
                        <div class="text-center py-4">
                            <h2 class="text-primary">HDPE MESRAN</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-green rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset ('JMP Biru/img/decolit.jpg')}}" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h2 class="text-primary">DECOLIT</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
            <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{__('main.menu.subbis')}}</h5>
                        <h1 class="mb-0">{{__('main.menu.descbis')}}</h1>
                    </div>
                   
                    <p class="mb-4 " style="text-align: justify">{{__('main.menu.descbis1')}}</p>
                    <a href="https://wa.me/+6282230303029">
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white fa-lg"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{__('main.menu.contactus')}}</h5>
                            <h4 class="text-primary mb-0">{{__('main.menu.notelp')}}</h4>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('JMP Biru/img/hero1.jpg')}}" alt="plastik" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>


     <!-- Footer Start -->
     @include('layout/footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('layout/script')
</body>