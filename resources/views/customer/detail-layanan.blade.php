<!DOCTYPE html>
<html lang="zxx">
<x-header :title="'Detail Layanan | Gurafix'" />

<body>
    <!-- cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <!-- cursor End -->

    <div class="body-overlay" id="body-overlay"></div>

    <x-navbar />

    <!-- tournament area start -->
    <div class="tournament-area pd-top-120">
        <div class="container">
            <div class="section-title">
                <h2 class="title move-line-3d" style="color: #ddf247;">{{ $layanan->nama }}</h2>
            </div>
            <div class="row">
                @forelse ($pakets as $paket)
                    <div class="col-lg-4 fade-slide bottom" data-delay="0.2">
                        <div class="single-tournament-2">
                            <img class="bg-img" src="{{ asset('assets/img/tournament/bg-3.png') }}" alt="img">
                            <div class="content-area">
                                <div class="top-area d-flex align-items-center align-self-center">
                                    <img class="me-3 main-img"
                                        src="{{ asset('assets_admin/gambar_paket/' . $paket->gambar_paket) }}"
                                        alt="img" />
                                    <div class="details">
                                        <h3 class="mb-0">{{ $paket->nama }}</h3>
                                    </div>
                                </div>
                                <span class="line-shadow"></span>
                                <div class="bottom-area">
                                    <div class="row">
                                        <div class="col-6">
                                            <span>Harga</span> <br>
                                            <span class="color-base">
                                                Rp{{ number_format($paket->harga, 0, ',', '.') }}
                                            </span>
                                        </div>
                                        <div class="col-6">
                                            <span>Druasi</span> <br>
                                            <span>
                                                <i class="fa fa-clock"></i>
                                                {{ $paket->durasi_pengerjaan }} Hari Kerja
                                            </span>
                                        </div>
                                        <div class="mt-3">
                                            <ul>
                                                @foreach (explode(',', $paket->fitur) as $fitur)
                                                    <li>{{ trim($fitur) }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="mt-3">
                                            <a class="btn btn-gray" href="{{ route('paket.detail', $paket->id) }}">
                                                Pilih Paket
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <!-- tournament area end -->

    <x-footer />

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <x-script-plugins />
</body>

</html>
