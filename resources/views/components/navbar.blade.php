<nav class="navbar navbar-area navbar-area-2 navbar-border navbar-expand-lg">
    <div class="container nav-container px-lg-0">
        <div class="responsive-mobile-menu">
            <button class="menu toggle-btn d-block d-lg-none" data-target="#xdyat" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="icon-left"></span>
                <span class="icon-right"></span>
            </button>
        </div>

        <div class="logo">
            <a href="{{ route('beranda') }}">
                <img src="{{ asset('assets/img/logo_gurafix_no_bg.png') }}" width="50px" alt="img" />
            </a>
        </div>

        <div class="collapse navbar-collapse" id="xdyat_main_menu">
            <ul class="navbar-nav menu-open ps-lg-5 text-end">
                <li>
                    <a href="{{ route('beranda') }}" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('tentang') }}" class="{{ Request::is('tentang') ? 'active' : '' }}">Tentang Kami</a>
                </li>
                <li>
                    <a href="{{ route('layanan') }}" class="{{ Request::is('layanan') ? 'active' : '' }}">Layanan</a>
                </li>
                <li>
                    <a href="{{ route('kontak') }}" class="{{ Request::is('kontak') ? 'active' : '' }}">Kontak</a>
                </li>
                
                @if(Auth::check() && Auth::user()->id_role == 2)
                    <li>
                        <a href="{{ route('chat') }}"  style="color: white; background-color: #004CE7; padding: 15px; border-radius: 20px;" >Chat</a>
                    </li>
                    <li>
                        <a href="{{ route('profile') }}"  style="color: white; background-color: #004CE7; padding: 15px; border-radius: 20px;">Profile</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('customer.login') }}" style="color: white; background-color: #004CE7; padding: 15px; border-radius: 20px;">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
