<!DOCTYPE html>
<html lang="zxx">
<x-header :title="'Detail Paket | Gurafix'" />

<body>
    <!-- cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <!-- cursor End -->

    <x-navbar />

    <!-- create items start -->
    <div class="creator-details-area pd-top-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="creator-widget creator-category-widget">
                        <div class="single-feature-inner style-2" style="padding: 20px;">
                            <div class="details">
                                <div class="d-flex justify-content-between border-bottom-1 align-items-center pb-4 mb-4">
                                    <div class="left d-flex justify-content-between align-items-center">
                                        <div class="img overflow-hidden me-2">
                                            <img class="me-2 main-img"
                                                src="{{ asset('assets_admin/gambar_paket/' . $paket->gambar_paket) }}"
                                                alt="img">
                                        </div>
                                        <div class="info-d">
                                            <h4 class="mb-0 text-white">Paket {{ $paket->nama }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <span style="color: #DDF247;">Layanan:</span> <br>
                                        <span style="color: white;">
                                            {{ $paket->layanan->nama }}
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <span style="color: #DDF247;">Biaya:</span> <br>
                                        <span style="color: white;">
                                            Rp{{ $paket->harga }}
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <span style="color: #DDF247;">Fitur:</span> <br>
                                        <ul style="list-style: none;">
                                            @foreach (explode(',', $paket->fitur) as $fitur)
                                                <li style="color: white;">
                                                    <span style="margin-right: 5px;">&#8226;</span> {{ trim($fitur) }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <form class="create-items-form">
                        <h4 style="color: white;">Form Brief Desain</h4>
                        <div class="image-upload d-md-flex justify-content-between align-items-center mt-2">
                            <p class="mb-md-0">
                                <img class="me-2" src="{{ asset('assets/img/icon/13.png') }}" alt="img">
                                Refrensi Desain (Format: PNG, JPG, GIF, WEBP Max 10Mb)
                            </p>
                            <label class="upload-file">
                                <input type="file" required>
                                Upload File
                            </label>
                        </div>
                        <textarea class="item-field" placeholder="Masukkan brief desain" style="color: white;" required></textarea>
                        <a class="btn btn-base mt-4" href="#">Pesan</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- create items end -->

    <x-footer />

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <x-script-plugins />

</body>

</html>
