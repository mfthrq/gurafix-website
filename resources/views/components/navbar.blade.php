<nav class="navbar navbar-area navbar-area-2 navbar-border navbar-expand-lg">
    <div class="container nav-container px-lg-0">
        <div class="responsive-mobile-menu">
            <button class="menu toggle-btn d-block d-lg-none" data-target="#xdyat" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-left"></span>
                <span class="icon-right"></span>
            </button>
        </div>

        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logo_gurafix_no_bg.png') }}" width="50px" alt="img" />
            </a>
        </div>

        <div class="collapse navbar-collapse" id="xdyat_main_menu">
            <ul class="navbar-nav menu-open ps-lg-5 text-end">
                <li>
                    <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">Tentang Kami</a>
                </li>
                <li>
                    <a href="{{ route('service') }}" class="{{ Request::is('service') ? 'active' : '' }}">Layanan</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact Us</a>
                </li>
            </ul>
        </div>

        <div class="nav-right-part nav-right-part-desktop d-lg-inline-flex align-item-center">
            <div class="btn-box d-inline-block">
                <a class="btn btn-main style-small" href="{{ route('login') }}">
                    <span>Login</span>
                </a>
            </div>
        </div>
    </div>
</nav>
