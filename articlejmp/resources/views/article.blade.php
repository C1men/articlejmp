<!DOCTYPE html>
<html lang="en">

<head>
<title>{{__('main.menu.article')}} - Jaya Mulya Plastik</title>
@include('layout/head')
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


   

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
                    <a href="{{url ('/about')}}" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                        <div class="dropdown-menu m-0">
                            <a href="hdpe.html" class="dropdown-item">HDPE</a>
                            <a href="pp.html" class="dropdown-item">PP</a>
                            <a href="pet.html" class="dropdown-item">PET</a>
                        </div>
                    </div>
                    <a href="{{url ('/article')}}" class="nav-item nav-link active">Article</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Article</h1>
                    <a href="{{url ('/')}}" class="h5 text-white">Home</a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                    <a href="{{url ('/article')}}" class="h5 text-white">Article</a>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid position-relative p-0">
        @include('layout/headernew')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">{{__('main.menu.article')}} {{$category}}</h1>
                    <a href="{{url ('/')}}" class="h5 text-white">{{__('main.menu.home')}}</a>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                    <a href="{{url ('/article')}}" class="h5 text-white">{{__('main.menu.article')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->   


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        @if ($articles->count() > 0)
                            @foreach ($articles as $article)
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <a href="{{url('article', $article->slug)}}">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <img class="img-fluid img-article" src="{{asset('img/' .$article->cover)}}" alt="{{$article->alt}}">
                                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="{{url('article', $article->slug)}}">{{$article->kategori->nama_kategori}}</a>
                                        </div>
                                    </a>
                                        <!-- <div class="blog-img position-relative overflow-hidden">
                                            <img class="img-fluid" src="{{asset('img/' .$article->cover)}}" alt="{{$article->alt}}">
                                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="{{url('article', $article->slug)}}">{{$article->kategori->nama_kategori}}</a>
                                        </div> -->
                                        <div class="p-4" style="height: 20rem; max-height: 20rem">
                                            <div class="d-flex mb-3">
                                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{$article-> user -> name}}</small>
                                                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ date('d-m-Y', strtotime($article->created_at))}}</small>
                                            </div>
                                            <a href="{{url('article', $article->slug)}}">
                                            <h4 class="mb-3">{{$article->judul}}</h4>
                                            <p>{!! Str::limit($article->desc, 200)!!}</p>
                                            <a class="text-uppercase" href="{{url('article', $article->slug)}}">Read More <i class="bi bi-arrow-right"></i></a>
                                            </a>
                                        </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                        <div class="col text-center">
                            <h5>Artikel belum tersedia</h5>
                        </div>
                        @endif
                        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                            <nav aria-label="Page navigation">
                              <ul class="pagination pagination-lg m-0">
                              {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $articles->links() !!}
        </div>

                               
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Categories</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            @foreach ($kategori as $kategori)
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="/article?categoryID={{base64_encode($kategori->id)}}"><i class="bi bi-arrow-right me-2"></i>{{$kategori -> nama_kategori}}</a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Category End -->
    
                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Post</h3>
                        </div>
                        @foreach ($sidearticle as $sa)
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <a href="{{url('article', $sa->slug)}}">
                            <img class="img-fluid img-article-small" src="{{asset('img/' .$sa->cover)}}" alt="{{$sa->alt}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <a href="{{url('article', $sa->slug)}}" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0" style="width:100%">{{$sa->judul}}
                            </a>
                            </a>
                           
                        </div>
                        @endforeach
                    </div>
                    <!-- Recent Post End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

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
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('JMP Biru/img/pphijau3.jpg')}}" alt="PP Hijau" style="object-fit: cover;">
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


   @include ('layout/script')
</body>

</html>