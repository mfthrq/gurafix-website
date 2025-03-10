<!DOCTYPE html>
<html>

<x-header :title="'Beranda | Gurafix'" />

<body>

    <!-- cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <!-- cursor End -->

    <div class="body-overlay" id="body-overlay"></div>

    <x-navbar />

    <!-- CTA start -->
    <div class="banner-area banner-area-3" style="background-color: #004ce7">
        <div class="container position-relative">
            <div class="banner-content text-center">
                <div class="thumb fade-slide bottom" data-delay="0.2"
                    style="
              translate: none;
              rotate: none;
              scale: none;
              transform: translate(0px, 0px);
              opacity: 1;
            ">
                    <img src="assets/img/gambar_cta_beranda.png" width="450px" alt="img" />
                </div>
                <h1 class="title split_chars">
                    <div style="position: relative; display: inline-block; color: white">
                        <div class="title-beranda">G</div>
                        <div class="title-beranda">U</div>
                        <div class="title-beranda">R</div>
                        <div class="title-beranda">A</div>
                        <div class="title-beranda">F</div>
                        <div class="title-beranda">I</div>
                        <div class="title-beranda">X</div>
                    </div>
                </h1>
                <h3 class="mt-5 split_chars text-white">
                    #YourCreative<span style="color: #ddf247">Partner</span>
                </h3>
                <div class="btn-box d-block fade-slide bottom" data-delay="0.4"
                    style="
              translate: none;
              rotate: none;
              scale: none;
              transform: translate(0px, 0px);
              opacity: 1;
            ">
                    <a class="btn btn-main style-small" href="/layanan">
                        <span style="color: white">Pesan Sekarang</span>
                    </a>
                </div>
            </div>
            <!-- lefts-image -->
            <img class="animate-img-1 animate-img top_image_bounce" src="assets/img/banner-3/animate-1.png"
                alt="img" width="50px" />
            <img class="animate-img-3 animate-img spin_image shapeBlinker_img" src="assets/img/banner-3/animate-3.png"
                alt="img" width="50px" />
            <img class="animate-img-4 animate-img" src="assets/img/banner-3/animate-4.png" alt="img"
                width="50px" />
            <!-- right-image -->
            <img class="animate-img-6 animate-img spin_image" src="assets/img/banner-3/animate-3.png" alt="img"
                width="50px" />
            <img class="animate-img-7 animate-img spin_image" src="assets/img/banner-3/animate-3.png" alt="img"
                width="50px" />
            <img class="animate-img-8 animate-img shapeBlinker_img" src="assets/img/banner-3/animate-4.png"
                alt="img" width="50px" />
        </div>
    </div>
    <!-- CTA end -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#004CE7" fill-opacity="1"
            d="M0,32L0,288L120,288L120,96L240,96L240,160L360,160L360,256L480,256L480,160L600,160L600,32L720,32L720,32L840,32L840,128L960,128L960,64L1080,64L1080,224L1200,224L1200,224L1320,224L1320,288L1440,288L1440,0L1320,0L1320,0L1200,0L1200,0L1080,0L1080,0L960,0L960,0L840,0L840,0L720,0L720,0L600,0L600,0L480,0L480,0L360,0L360,0L240,0L240,0L120,0L120,0L0,0L0,0Z">
        </path>
    </svg>

    <!-- about area start -->
    <div class="about-area position-relative pd-bottom-70" style="background-color: white">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-10 pe-xl-5 d-flex justify-content-center align-items-center">
                    <div class="about-thumb-inner mb-4 fade-slide right" data-delay="0.2">
                        <img src="assets/img/logo_gurafix_no_bg.png" class="img-fluid" width="400" alt="img" />
                    </div>
                </div>
                <div class="col-xl-6 align-self-center">
                    <div class="about-content section-title mt-5 mt-xl-0 mb-0">
                        <h1 class="title move-line-3d" style="color: #004ce7">GURAFIX</h1>
                        <h4 class="split_chars" style="color: #004ce7">
                            #YourCreative<span style="color: #ddf247;">Partner</span>
                        </h4>
                        <p class="content fade-slide bottom" style="margin: 0; text-align: justify; color: #004ce7"
                            data-delay="0.3">
                            GURAFIX adalah sebuah usaha yang berfokus pada penyediaan jasa
                            desain grafis. Usaha ini hadir sebagai solusi bagi UMKM, konten
                            kreator, dan bisnis lainnya yang ingin memperkuat identitas
                            visual mereka serta meningkatkan brand awareness dan engagement
                            di media sosial.
                        </p>
                        <div class="btn-box d-inline-block fade-slide bottom" style="margin: 0; padding: 0"
                            data-delay="0.7">
                            <a class="btn btn-main style-small" href="/tentang">
                                <span>Lebih Lengkap</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- gallery-area start -->
    <div class="gallery-area-2">
        <div class="row">
            <div class="col-lg-2 col-sm-6 px-2">
                <div class="thumb">
                    <a><img class="w-100" src="assets/img/portofolio/1.png" alt="img"></a>
                </div>
                <div class="thumb">
                    <a><img class="w-100" src="assets/img/portofolio/2.png" alt="img"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 px-2">
                <div class="thumb">
                    <a><img class="w-100" src="assets/img/portofolio/2-1.png" alt="img"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 px-2">
                <div class="thumb">
                    <a><img class="w-100" src="assets/img/portofolio/3.png" alt="img"></a>
                </div>
                <div class="thumb">
                    <a><img class="w-100" src="assets/img/portofolio/4.png" alt="img"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 px-2">
                <div class="thumb">
                    <a><img class="w-100" src="assets/img/portofolio/2-3.png" alt="img"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 px-2">
                <div class="thumb">
                    <a><img class="w-100" src="assets/img/portofolio/5.png" alt="img"></a>
                </div>
                <div class="thumb">
                    <a><img class="w-100" src="assets/img/portofolio/6.png" alt="img"></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 px-2">
                <div class="thumb">
                    <a><img class="w-100" src="assets/img/portofolio/3-3.png" alt="img"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery-area end -->

    <!-- layanan start -->
    <div class="creator-area pd-top-60 pd-bottom-100 bg-cover">
        <div class="container">
            <div class="section-title">
                <h2 class="title move-line-3d" style="color: #ddf247">
                    LAYANAN <span>FAVORIT</span>
                </h2>
            </div>
            <div class="row mt-5">
                @forelse ($layanans as $index => $layanan)
                <div class="col-lg-6 mb-lg-0 mb-5 mt-2 fade-slide bottom" data-delay="0.8">
                    <div class="trusted-wallet-inner p-3 py-5" style="height: 400px;">
                        <img class="bg-one w-100" src="assets/img/bg/5.png" alt="img" />
                        <div class="content-inner text-center">
                            <div class="icon">
                                <img src="{{ asset('assets_admin/gambar_layanan/' . $layanan->gambar_layanan) }}"
                                    alt="img" width="150px" />
                            </div>
                            <span class="mt-3">Layanan {{ $index + 1 }}</span>
                            <h3>{{ $layanan->nama }}</h3>
                            <a class="read-more link-layanan"
                                href="{{ route('layanan.detail', $layanan->id) }}">Detail Layanan > </a>
                        </div>
                    </div>
                </div>
                @empty
                <p>tidak ada layanan</p>
                @endforelse
                <div class="btn-box d-inline-block fade-slide bottom mt-4" data-delay="0.7">
                    <a class="btn btn-main style-small" href="/layanan">
                        <span>
                            <span>Lebih Banyak</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- layanan end -->

    <!-- Testimoni area start -->
    <div class="testimonial-area">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="title" style="color: #ddf247">
                            Feedback <span>Pelanggan</span>
                        </h2>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-4">
                        <div class="array-button slider-control-round text-lg-end">
                            <button class="array1-prev" tabindex="0" aria-label="Previous slide"
                                aria-controls="swiper-wrapper-542360044bd9be21">
                                <svg class="svg-inline--fa fa-angle-left fa-w-8" aria-hidden="true" focusable="false"
                                    data-prefix="fa" data-icon="angle-left" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z">
                                    </path>
                                </svg>
                            </button>
                            <button class="array1-next" tabindex="0" aria-label="Next slide"
                                aria-controls="swiper-wrapper-542360044bd9be21">
                                <svg class="svg-inline--fa fa-angle-right fa-w-8" aria-hidden="true"
                                    focusable="false" data-prefix="fa" data-icon="angle-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="swiper mySwiper2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-542360044bd9be21" aria-live="off"
                    style="
              transform: translate3d(-3378px, 0px, 0px);
              transition-duration: 0ms;
            ">

                    <div class="swiper-slide" data-swiper-slide-index="0" role="group" aria-label="1 / 4"
                        style="width: 1116px; margin-right: 10px">
                        <div class="feedback-inner">
                            <img src="assets/img/testimonial/1.png" alt="img" />
                            <p>
                                Gurafix benar-benar partner kreatif yang bisa diandalkan. Mulai dari poster acara sampai
                                banner outdoor, semuanya dikerjakan dengan detail dan profesional.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group"
                        aria-label="2 / 4" style="width: 1116px; margin-right: 10px">
                        <div class="feedback-inner">
                            <img src="assets/img/testimonial/1.png" alt="img" />
                            <p>
                                Desain packaging yang dibuat Gurafix bikin produk kami terlihat lebih premium. Sangat
                                puas dengan hasil kerjanya! Pastinya akan repeat order.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group"
                        aria-label="3 / 4" style="width: 1116px; margin-right: 10px">
                        <div class="feedback-inner">
                            <img src="assets/img/testimonial/1.png" alt="img" />
                            <p>
                                Hasil desain logo dari Gurafix sangat keren dan profesional.
                                Sesuai dengan konsep yang kami inginkan. Komunikasinya juga
                                ramah dan cepat! Highly recommended!
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="3" role="group"
                        aria-label="4 / 4" style="width: 1116px; margin-right: 10px">
                        <div class="feedback-inner">
                            <img src="assets/img/testimonial/1.png" alt="img" />
                            <p>
                                Desain konten media sosial dari Gurafix sangat membantu
                                meningkatkan engagement brand kami. Visualnya fresh dan
                                eye-catching. Terima kasih Gurafix!
                            </p>
                        </div>
                    </div>

                </div>

                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>

            </div>
            <div
                class="swiper mySwiper feedback-list-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-thumbs">

                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
    <!-- Testimoni area end -->

    <x-footer />

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <x-script-plugins />

</body>

</html>
