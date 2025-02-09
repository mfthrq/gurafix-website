<!DOCTYPE html>
<html lang="zxx">
    <x-header :title="'Detail Layanan | Gurafix'" />
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

        <x-navbar/>

        <!-- tournament area start -->
        <div class="tournament-area pd-top-120">
            <div class="container">
                <div class="section-title">
                    <h2 class="title move-line-3d" style="color: #ddf247;">Desain Identitas dan <span>Produk Fisik</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 fade-slide bottom" data-delay="0.2">
                        <div class="single-tournament-2">
                            <img class="bg-img" src="assets/img/tournament/bg-3.png" alt="img">
                            <div class="content-area">
                                <div class="top-area d-flex align-items-center align-self-center">
                                    <img class="me-3 main-img" src="assets/img/tournament/7.png" alt="img">
                                    <div class="details">
                                        <h3 class="mb-0">Standar</h3>
                                    </div>
                                </div>
                                <span class="line-shadow"></span>
                                <div class="bottom-area">
                                    <div class="row">
                                        <div class="col-6">
                                            <span>Biaya</span> <br>
                                            <span class="color-base">
                                                Rp25.000
                                            </span>
                                        </div>
                                        <div class="col-6">
                                            <span>TIME</span> <br>
                                            <span>
                                                <i class="fa fa-clock"></i>
                                                5 Hari Kerja
                                            </span>
                                        </div>
                                        <div class="mt-3">
                                            <ul>
                                                <li>Fitur paket 1</li>
                                                <li>Fitur paket 2</li>
                                                <li>Fitur paket 3</li>
                                                <li>Fitur paket 4</li>
                                            </ul>
                                        </div>
                                        <div class="mt-3">
                                            <a class="btn btn-gray" href="/detail-paket">
                                                Pilih Paket
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 fade-slide bottom" data-delay="0.3">
                        <div class="single-tournament-2">
                            <img class="bg-img" src="assets/img/tournament/bg-3.png" alt="img">
                            <div class="content-area">
                                <div class="top-area d-flex align-items-center align-self-center">
                                    <img class="me-3 main-img" src="assets/img/tournament/8.png" alt="img">
                                    <div class="details">
                                        <h3 class="mb-0">Medium</h3>
                                    </div>
                                </div>
                                <span class="line-shadow"></span>
                                <div class="bottom-area">
                                    <div class="row">
                                        <div class="col-6">
                                            <span>Biaya</span> <br>
                                            <span class="color-base">
                                                Rp25.000
                                            </span>
                                        </div>
                                        <div class="col-6">
                                            <span>TIME</span> <br>
                                            <span>
                                                <i class="fa fa-clock"></i>
                                                5 Hari Kerja
                                            </span>
                                        </div>
                                        <div class="mt-3">
                                            <ul>
                                                <li>Fitur paket 1</li>
                                                <li>Fitur paket 2</li>
                                                <li>Fitur paket 3</li>
                                                <li>Fitur paket 4</li>
                                            </ul>
                                        </div>
                                        <div class="mt-3">
                                            <a class="btn btn-gray" href="#">
                                                Pilih Paket
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 fade-slide bottom" data-delay="0.4">
                        <div class="single-tournament-2">
                            <img class="bg-img" src="assets/img/tournament/bg-3.png" alt="img">
                            <div class="content-area">
                                <div class="top-area d-flex align-items-center align-self-center">
                                    <img class="me-3 main-img" src="assets/img/tournament/9.png" alt="img">
                                    <div class="details">
                                        <h3 class="mb-0">Premium</h3>
                                    </div>
                                </div>
                                <span class="line-shadow"></span>
                                <div class="bottom-area">
                                    <div class="row">
                                        <div class="col-6">
                                            <span>Biaya</span> <br>
                                            <span class="color-base">
                                                Rp25.000
                                            </span>
                                        </div>
                                        <div class="col-6">
                                            <span>TIME</span> <br>
                                            <span>
                                                <i class="fa fa-clock"></i>
                                                5 Hari Kerja
                                            </span>
                                        </div>
                                        <div class="mt-3">
                                            <ul>
                                                <li>Fitur paket 1</li>
                                                <li>Fitur paket 2</li>
                                                <li>Fitur paket 3</li>
                                                <li>Fitur paket 4</li>
                                            </ul>
                                        </div>
                                        <div class="mt-3">
                                            <a class="btn btn-gray" href="#">
                                                Pilih Paket
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tournament area end -->

        <x-footer/>

        <!-- back to top area start -->
        <div class="back-to-top">
            <span class="back-top"><i class="fa fa-angle-up"></i></span>
        </div>
        <!-- back to top area end -->

        <x-script-plugins/>
        
    </body>
</html>