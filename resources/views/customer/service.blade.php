<!DOCTYPE html>
<html>

<x-header :title="'Layanan | Gurafix'" />

<body>
    <!-- cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <!-- cursor End -->

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->

    <div class="body-overlay" id="body-overlay"></div>

    <x-navbar />

    <!-- layanan start -->
    <div class="creator-area pd-top-120">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title" style="color: #ddf247">LAYANAN <span>KAMI</span></h2>
            </div>
            <div class="row">
                @forelse ($layanans as $index => $layanan)
                    <div class="col-lg-3 mb-lg-0 mb-5 mt-2 fade-slide bottom" data-delay="0.8">
                        <div class="trusted-wallet-inner p-3 py-5" style="height: 400px;">
                            <img class="bg-one w-100" src="assets/img/bg/5.png" alt="img" />
                            <div class="content-inner text-center">
                                <div class="icon">
                                    <img src="{{ asset('assets_admin/gambar_layanan/' . $layanan->gambar_layanan) }}" alt="img" />
                                </div>
                                <span class="mt-3">Layanan {{ $index + 1 }}</span>
                                <h4>{{ $layanan->nama }}</h3>
                                <a class="read-more link-layanan" href="{{ route('layanan.detail', $layanan->id) }}">Detail Layanan > </a>
                            </div>
                        </div>
                    </div>
                @empty
                <p>tidak ada layanan</p>
                @endforelse
            </div>
        </div>
    </div>
    <!-- layanan end -->

    <x-footer />

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <x-script-plugins />


</body>

</html>
