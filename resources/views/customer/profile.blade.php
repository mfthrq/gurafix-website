<!DOCTYPE html>
<html lang="zxx">
    <x-header :title="'Tentang Kami | Gurafix'" />

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

        <!-- team-details area start -->
        <div class="team-details-area pd-top-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="team-details-page-content">
                            <div class="thumb mb-4">
                                <img class="w-100" src="assets/img/team/team-d-1.png" alt="img">
                            </div>
                            <div class="grid info-meta d-flex flex-column flex-lg-row justify-content-between align-self-center">
                                <!-- Kolom untuk Nama -->
                                <div class="col-12 col-md-8">
                                    <h3 class="tt-capitalize" style="color: #004CE7;">
                                        <img src="assets/img/team/info1.png" alt="img"> Fadiil Thoriq
                                    </h3>
                                </div>
                                <!-- Kolom untuk Tombol -->
                                <div class="col-12 col-md-4 d-flex flex-md-row justify-content-between">
                                    <a class="btn btn-base d-flex justify-content-center align-items-center w-100 mb-2" style="background-color: #ddf247; margin-right: 10px;" href="/riwayat">Riwayat</a>
                                    <a class="btn btn-base" href="#">Edit Data</a>
                                </div>
                            </div>

                            <div class="price-meta">
                                <h4 style="color: black;">Total Pemesanan: <span style="color: #004CE7;">20</span></h4>
                                <!-- Baris pertama (3 kolom di tengah) -->
                                <div class="row text-center gap-2 px-2">
                                    <div class="col p-2">
                                        <div style="background-color: #ddf247; border-radius: 10px;" class="mb-2">
                                            <span style="color: black; font-size: 15px;">Diverifikasi</span><br>
                                        </div>
                                        <div style="background-color: #004CE7; border-radius: 10px;">
                                            <span style="color: white;">10000 </span>
                                        </div>
                                    </div>
                                    <div class="col p-2">
                                        <div style="background-color: #ddf247; border-radius: 10px;" class="mb-2">
                                            <span style="color: black; font-size: 15px;">Progress</span><br>
                                        </div>
                                        <div style="background-color: #004CE7; border-radius: 10px;">
                                            <span style="color: white;">10000 </span>
                                        </div>
                                    </div>
                                    <div class="col p-2">
                                        <div style="background-color: #ddf247; border-radius: 10px;" class="mb-2">
                                            <span style="color: black; font-size: 15px;">Revisi</span><br>
                                        </div>
                                        <div style="background-color: #004CE7; border-radius: 10px;">
                                            <span style="color: white;">10000 </span>
                                        </div>
                                    </div>
                                    <div class="col p-2">
                                        <div style="background-color: #ddf247; border-radius: 10px;" class="mb-2">
                                            <span style="color: black; font-size: 15px;">Selesai</span><br>
                                        </div>
                                        <div style="background-color: #004CE7; border-radius: 10px;">
                                            <span style="color: white;">10000 </span>
                                        </div>
                                    </div>
                                    <div class="col p-2">
                                        <div style="background-color: #ddf247; border-radius: 10px;" class="mb-2">
                                            <span style="color: black; font-size: 15px;">Gagal</span><br>
                                        </div>
                                        <div style="background-color: #004CE7; border-radius: 10px;">
                                            <span style="color: white;">10000 </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Input -->
                                <form class="login-form-inner mt-4">
                                    <div class="single-input-inner style-border">
                                        <input value="Fathi Ramdhana" type="text" disabled >
                                    </div>
                                    <div class="single-input-inner style-border">
                                        <input value="12/11/2003" type="text" disabled >
                                    </div>
                                    <div class="single-input-inner style-border">
                                        <input value="Bogor" type="text"disabled >
                                    </div>
                                    <div class="single-input-inner style-border">
                                        <input value="08123456789" type="number" disabled > 
                                    </div>
                                </form> 
                            </div>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team-details area end -->

        <x-footer/>

        <!-- back to top area start -->
        <div class="back-to-top">
            <span class="back-top"><i class="fa fa-angle-up"></i></span>
        </div>
        <!-- back to top area end -->

        <x-script-plugins/>
        
    </body>
</html>