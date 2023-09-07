<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 justify-content-end nav-custom">
    <div class="logo-area py-2">
        <a href="{{url ('/')}}" class="navbar-brand-new p-0">
            <h1 class="m-0"><img src="{{asset('JMP Biru/img/logo.jpg')}}" alt="logo Jaya Mulya Plastik"></h1>
        </a>
    </div>
    <div class="d-flex">
        @if (count(config('app.languages')) > 1)
        <div class="nav-item dropdown opsi-bahasa-mobile">
            <a href="#" class="nav-link dropdown-toggle dropdown-language" data-bs-toggle="dropdown" style="color: #fff;">{{ strtoupper(app()->getLocale()) }}</a>
            <div class="dropdown-menu m-0">
                @foreach (config('app.languages') as $langLocale => $langName)
                    <a href="{{ url()->current() }}?lang={{ $langLocale }}" class="dropdown-item">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                @endforeach
            </div>
        </div>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            {{-- opsi bahasa --}}
            @if (count(config('app.languages')) > 1)
            <div class="nav-item dropdown opsi-bahasa-web">
                <a href="#" class="nav-link dropdown-toggle dropdown-language" data-bs-toggle="dropdown" style="color: #fff;">{{ strtoupper(app()->getLocale()) }}</a>
                <div class="dropdown-menu m-0">
                    @foreach (config('app.languages') as $langLocale => $langName)
                        <a href="{{ url()->current() }}?lang={{ $langLocale }}" class="dropdown-item">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                    @endforeach
                </div>
            </div>
            @endif
            {{-- end opsi bahasa --}}
            <a href="{{url ('/')}}" class="nav-item nav-link {{ Route::is('welcome') ? 'active' : '' }}">{{__('main.menu.home')}}</a>
            <a href="{{url ('/about')}}" class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }}">{{__('main.menu.about')}}</a>
            <div class="nav-item dropdown">
                <a href="{{url ('/product')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('main.menu.product')}}</a>
                <div class="dropdown-menu m-0">
                    <a href="{{url ('/HDPE')}}" class="dropdown-item">HDPE</a>
                    <a href="{{url ('/PP')}}" class="dropdown-item">PP</a>
                    <a href="{{url ('/PET')}}" class="dropdown-item">PET</a>
                </div>
            </div>
            <a href="{{url ('/article')}}" class="nav-item nav-link {{ request()->routeIs('article.*') ? 'active' : '' }}">{{__('main.menu.article')}}</a>
            <a href="{{url ('/contact')}}" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">{{__('main.menu.contact')}}</a>
        </div>
    </div>
</nav>
