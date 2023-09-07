<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{url ('/')}}" class="navbar-brand p-0">
                <h1 class="m-0"><img src="{{asset('JMP Biru/img/logo.jpg')}}" alt="logo Jaya Mulya Plastik"></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{url ('/')}}" class="nav-item nav-link active">Beranda</a>
                    <a href="{{url ('/about')}}" class="nav-item nav-link ">Tentang Kami</a>
                    <div class="nav-item dropdown">
                        <a href="{{url ('/product')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{url ('/HDPE')}}" class="dropdown-item">HDPE</a>
                            <a href="pp.html" class="dropdown-item">PP</a>
                            <a href="pet.html" class="dropdown-item">PET</a>
                        </div>
                    </div>
                    <a href="{{url ('/article')}}" class="nav-item nav-link">Artikel</a>
                    <a href="{{url ('/contact')}}" class="nav-item nav-link">Kontak</a>
                </div>
            </div>
        </nav>