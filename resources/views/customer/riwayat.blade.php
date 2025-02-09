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

    <x-navbar/>

    <!-- creator-details start -->
    <div class="creator-details-area pd-top-120">
        <div class="container">
            <div class="section-title">
                <h2 class="title" style="color: #ddf100;">Riwayat <span>Pemesanan</span></h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single-feature-inner style-2">
                        <div class="details">
                            <h4 class="text-white">Desain Media Sosial dan Digital</h4>
                            <div class="border-bottom-1 align-items-center pb-4 mb-4">
                                <div class="d-flex align-items-center mt-3">
                                    <div class="img border-radius-5 overflow-hidden me-3">
                                        <img src="assets/img/tournament/7.png" height="60px" alt="img">
                                    </div>
                                    <div class="info-d line-height-1">
                                        <h5 class="mb-0 text-white">Paket Premium</h5>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p>25 Januari 2025</p>
                                </div>
                                <div class="mt-3">
                                    <span class="badge bg-secondary badge-custom" style="font-size: 15px;">Diverifikasi</span>
                                    <span class="badge bg-warning text-dark badge-custom" style="font-size: 15px;">Progress</span>
                                    <span class="badge bg-primary badge-custom" style="font-size: 15px;">Revisi</span>
                                    <span class="badge bg-success badge-custom" style="font-size: 15px;">Selesai</span>
                                    <span class="badge bg-danger badge-custom" style="font-size: 15px;">Gagal</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="left">
                                    <p class="d-block mb-0" style="color: white">Total Biaya: <b>Rp50.000</b></p>
                                </div> 
                                <div class="right">
                                    <a class="btn btn-base" href="#">Link File <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- creator-details end -->

    <x-footer/>

    
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <x-script-plugins/>
    
</body>
</html>