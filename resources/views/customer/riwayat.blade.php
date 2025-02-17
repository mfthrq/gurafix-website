<!DOCTYPE html>
<html lang="zxx">
<x-header :title="'Riwayat Pemesanan | Gurafix'" />

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

    <!-- creator-details start -->
    <div class="creator-details-area pd-top-120">
        <div class="container">
            <div class="section-title">
                <h2 class="title" style="color: #ddf100;">Riwayat <span>Pemesanan</span></h2>
            </div>
            <div class="row">
                @forelse ($pemesanans->sortByDesc('created_at') as $pemesanan)
                    <div class="col-xl-4 col-md-6">
                        <div class="single-feature-inner style-2">
                            <div class="details">
                                <h5 class="text-white">{{ $pemesanan->layanan->nama }}</h4>
                                    <div class="border-bottom-1 align-items-center pb-4 mb-4">
                                        <div class="d-flex align-items-center mt-3">
                                            <div class="img border-radius-5 overflow-hidden me-3">
                                                <img src="{{ asset('assets_admin/gambar_paket/' . $pemesanan->paket->gambar_paket) }}"
                                                    height="60px" alt="img">
                                            </div>
                                            <div class="info-d line-height-1">
                                                <h5 class="mb-0 text-white">Paket {{ $pemesanan->paket->nama }}</h5>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <p style="color: white;"><b>Tanggal Pemesanan</b> <br>
                                                {{ $pemesanan->tanggal_pemesanan ?? 'Tanggal Pemesanan' }}
                                            </p>
                                            <p style="color: white;"><b>Durasi Pengerjaan</b> <br>
                                                {{ $pemesanan->paket->durasi_pengerjaan ?? 'Durasi Pengerjaan' }} Hari
                                            </p>
                                        </div>
                                        <div class="mt-3">
                                            @switch($pemesanan->status)
                                                @case('Menunggu Pembayaran')
                                                    <span class="badge bg-secondary badge-custom"
                                                        style="font-size: 15px;">Menunggu Pembayaran</span>
                                                @break

                                                @case('Pembayaran Berhasil')
                                                    <span class="badge bg-success badge-custom"
                                                        style="font-size: 15px;">Pembayaran Berhasil</span>
                                                @break

                                                @case('Progress')
                                                    <span class="badge bg-warning badge-custom"
                                                        style="font-size: 15px; color: black;">Progress</span>
                                                @break

                                                @case('Revisi')
                                                    <span class="badge bg-warning badge-custom"
                                                        style="font-size: 15px; color: black;">Revisi</span>
                                                @break

                                                @case('Gagal')
                                                    <span class="badge bg-danger badge-custom"
                                                        style="font-size: 15px;">Gagal</span>
                                                @break

                                                @case('Selesai')
                                                    <span class="badge bg-success badge-custom"
                                                        style="font-size: 15px;">Selesai</span>
                                                @break

                                                @default
                                                    <span class="badge bg-secondary badge-custom"
                                                        style="font-size: 15px;">Status Tidak Diketahui</span>
                                            @endswitch
                                        </div>
                                        <div class="mt-3">
                                            <p class="d-block mb-0" style="color: white">
                                                Total Biaya:
                                                <b>Rp{{ number_format($pemesanan->paket->harga, 0, ',', '.') }}</b>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="justify-content-between align-items-center">
                                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.5rem;">
                                            @if ($pemesanan->status == 'Menunggu Pembayaran')
                                                <div>
                                                    <a class="btn btn-base"
                                                        style="background-color: #ddf100; width: 100%;" href="#">
                                                        Bayar
                                                    </a>
                                                </div>
                                            @else
                                                <div>
                                                    <a class="btn btn-base" style="width: 100%;"
                                                        href="{{ $pemesanan->link_desain ?? '#' }}">
                                                        Link File <i class="fa fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            @endif
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
        <!-- creator-details end -->

        <x-footer />


        <!-- back to top area start -->
        <div class="back-to-top">
            <span class="back-top"><i class="fa fa-angle-up"></i></span>
        </div>
        <!-- back to top area end -->

        <x-script-plugins />

    </body>

    </html>
