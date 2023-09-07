<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{__('main.menu.contact')}} - Jaya Mulya Plastik</title>
    @include('layout/head')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
   
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <!-- Navbar End -->

    <div class="container-fluid position-relative p-0">
        @include('layout/headernew')
        
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{__('main.menu.contact')}}</h1>
                    <a href="{{url ('/')}}" class="h5 text-white">{{__('main.menu.home')}}</a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#071952}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                    <a href="{{url ('/contact')}}" class="h5 text-white">{{__('main.menu.contact')}}</a>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
        <div class="section-title position-relative text-center pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">{{__('main.menu.subbis')}}</h5>
                        <h1 class="mb-0">{{__('main.menu.descbis')}}</h1>
                    </div>
            <div class="row g-4 mb-5">
                <div class="col-lg-4 mb-5">
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.1s">
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
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white fa-lg"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{__('main.menu.contactus1')}}</h5>
                            <a href="https://goo.gl/maps/LdYg8AnKfWuppPpS7">Jaya Mulya Plastik - Sidoarjo</a>
                            <br>
                            <a href="https://goo.gl/maps/LdYg8AnKfWuppPpS7">Jaya Mulya Plastik - Pati</a>
                            <br>
                            <a href="https://goo.gl/maps/LdYg8AnKfWuppPpS7">Jaya Mulya Plastik - Kediri</a>
                            <br>
                            <a href="https://goo.gl/maps/LdYg8AnKfWuppPpS7">Jaya Mulya Plastik - Jember</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white fa-lg" ></i>
                        </div>
                        <div class="ps-4" style="width: 15rem">
                            <h5 class="mb-2">{{__('main.menu.contactus2')}}</h5>
                            <a href="mailto:jayamulyaplastik.business@gmail.com">
                                <h4 class="text-primary mb-0 email-company" style="font-size: 21px;">jayamulyaplastik.business.com</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-5">
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fab fa-instagram fw-normal text-white" style='font-size:36px'></i>
                        </div>
                        <div class="ps-4" style="width: 15rem">
                            <h5 class="mb-2">{{__('main.menu.contactus3')}}</h5>
                            <a href="https://www.instagram.com/jayamulyaplastik/">
                                <h4 class="text-primary mb-0 email-company" style="font-size: 21px;">jayamulyaplastik</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-5">
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <svg style="color: #ffffff"xmlns="http://www.w3.org/2000/svg" height="2.3em" viewBox="0 0 448 550"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#fcfcfc}</style><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
                        </div>
                        <div class="ps-4" style="width: 15rem">
                            <h5 class="mb-2">{{__('main.menu.contactus4')}}</h5>
                            <a href="https://www.tiktok.com/@jayamulyaplastik">
                                <h4 class="text-primary mb-0 email-company" style="font-size: 21px;">jayamulyaplastik</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-5">
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fab fa-facebook fw-normal text-white" style='font-size:36px'></i>
                        </div>
                        <div class="ps-4" style="width: 15rem">
                            <h5 class="mb-2">{{__('main.menu.contactus5')}}</h5>
                            <a href="https://www.facebook.com/profile.php?id=100094839246072">
                                <h4 class="text-primary mb-0 email-company" style="font-size: 21px;">Jaya Mulya Plastik</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-5">
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fab fa-linkedin-in fw-normal text-white" style='font-size:36px'></i>
                        </div>
                        <div class="ps-4" style="width: 15rem">
                            <h5 class="mb-2">{{__('main.menu.contactus6')}}</h5>
                            <a href="https://www.linkedin.com/in/jayamulyaplastik/">
                                <h4 class="text-primary mb-0 email-company" style="font-size: 21px;">Jaya Mulya Plastik</h4>
                            </a>
                        </div>
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


    <!-- JavaScript Libraries -->
    @include('layout/script')

    <!-- Template Javascript -->
</body>

</html>