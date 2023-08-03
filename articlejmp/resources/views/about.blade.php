<!DOCTYPE html>
<html lang="en">

@include('layout/head')

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{url ('/')}}" class="navbar-brand p-0">
                <h1 class="m-0"><img src="{{asset('JMP Biru/img/logo.jpg')}}" alt=""></h1>
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
                    <a href="blog.html" class="nav-item nav-link">Blog</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About</h1>
                    <a href="index.html" class="h5 text-white">Home</a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#071952}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                    <a href="about.html" class="h5 text-white">About</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">The Best Plastic Shredding Factory With More Than 20 Years of Experience</h1>
                    </div>
                    <p class="mb-4">Jaya Mulya Plastik juga ikut membantu ekosistem daur ulang plastik di Indonesia dengan menjadi bagian dari ekonomi sirkular agar dapat terus berkembang dan berdampak positif bagi kelestarian lingkungan dengan cara bekerja sama bersama pengepul plastik dan perusahaan plastik di sekitar wilayah perusahaan Jaya Mulya Plastik.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Quality</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Quantity</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Clean & Dry</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Business Inquiries</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/jmp3.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

   <!-- Features Start -->
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <h1 class="mb-0">We Are Here to Recycle plastic for better World</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Quality</h4>
                        <p class="mb-0"> Memastikan produk yang dihasilkan berkualitas melalui pemeriksaan kualitas yang ketat</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Quantity</h4>
                        <p class="mb-0">Memiliki kapasitas produksi besar, memastikan produk yang dihasilkan berkualitas dan memastikan kuantitas permintaan pelanggan terpenuhi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="https://mediaproxy.salon.com/width/1200/https://media.salon.com/2023/05/worker_at_recycling_center_1160899361.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Professional</h4>
                        <p class="mb-0">Berpengalaman selama lebih dari 20 tahun sehingga terjamin kualitasnya</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>Clean & Dry</h4>
                        <p class="mb-0">Hasil produksi yang terjamin bersih dan kering</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->



    

     <!-- Footer Start -->
    @include('layout/footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('layout/script')
</body>

</html>