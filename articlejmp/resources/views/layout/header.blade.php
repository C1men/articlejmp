<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{url ('/')}}" class="navbar-brand p-0">
                <h1 class="m-0"><img src="{{asset('JMP Biru/img/logo.jpg')}}" alt=""></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{url ('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{url ('/about')}}" class="nav-item nav-link ">About</a>
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