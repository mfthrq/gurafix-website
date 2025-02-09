<!DOCTYPE html>
<html>

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

    <!-- about area start -->
    <div class="about-area position-relative pd-top-110 pd-bottom-70">
        <div class="container">
            
            <div class="row">
                <div class="col-xl-7 col-lg-10 ps-xl-5 order-lg-last">
                    <div class="about-thumb-inner position-relative mb-4 text-lg-end fade-slide bottom" data-delay="0.5">
                        <img src="assets/img/gambar_cta_beranda.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-5 align-self-center order-lg-start">
                    <div class="about-content section-title mt-5 mt-xl-0 mb-0">
                        <h1 class="title move-line-3d" style="color: #004CE7;">
                            GURAFIX
                        </h1>
                        <p class="content fade-slide bottom" data-delay="0.2" style="color: #004ce7; text-align: justify;">GURAFIX adalah sebuah usaha kreatif yang berfokus pada penyediaan layanan desain grafis profesional dan media partner. Dengan semangat inovasi dan kreativitas tanpa batas, GURAFIX hadir sebagai solusi bagi berbagai kalangan, mulai dari Usaha Mikro, Kecil, dan Menengah (UMKM), konten kreator, hingga perusahaan yang ingin memperkuat identitas visual mereka dan meningkatkan brand awareness serta engagement di media sosial.</p>
                    </div>
                </div>
            </div>

            <div class="intro-box-wrap gap-3 mt-5">
                <div class="intro-box-inner text-center fade-slide bottom" data-delay="0.3">
                    <div class="icon">
                        <img src="assets/img/icon/1.png" alt="img">
                    </div>
                    <div class="content">
                        <h4 style="color: white;">Kreativitas</h4>
                    </div>
                </div>
                <div class="intro-box-inner text-center fade-slide bottom" data-delay="0.4">
                    <div class="icon">
                        <img src="assets/img/icon/2.png" alt="img">
                    </div>
                    <div class="content">
                        <h4 style="color: white;">Ekselensi</h4>
                    </div>
                </div>
                <div class="intro-box-inner text-center fade-slide bottom" data-delay="0.5">
                    <div class="icon">
                        <img src="assets/img/icon/3.png" alt="img">
                    </div>
                    <div class="content">
                        <h4 style="color: white;">Responsivitas</h4>
                    </div>
                </div>
                <div class="intro-box-inner text-center fade-slide bottom" data-delay="0.6">
                    <div class="icon">
                        <img src="assets/img/icon/4.png" alt="img">
                    </div>
                    <div class="content">
                        <h4 style="color: white;">Empati</h4>
                    </div>
                </div>
                <div class="intro-box-inner text-center fade-slide bottom" data-delay="0.7">
                    <div class="icon">
                        <img src="assets/img/icon/5.png" alt="img">
                    </div>
                    <div class="content">
                        <h4 style="color: white;">Nilai</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- team area start -->
    <div class="team-area pd-bottom-70">
        <div class="container">
            <div class="section-title">
                <h2 class="title move-line-3d" style="color: #DDF247;">TEAM <span>KAMI</span></h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-advisors-inner">
                        <div class="thumb text-center p-0">
                            <img src="assets/img/team/1-team.png" alt="img">
                        </div>
                        <div class="details">
                            <h5 class="name" style="color: #000000;">M. Fadiil Thoriq</h5>
                            <span class="designation" style="color: #004CE7;">Project Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-advisors-inner">
                        <div class="thumb text-center p-0">
                            <img src="assets/img/team/3-team.png" alt="img">
                        </div>
                        <div class="details">
                            <h5 class="name" style="color: #000000;">Najla Amelia Putri</h5>
                            <span class="designation" style="color: #004CE7;">System Analyst & Tester</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-advisors-inner">
                        <div class="thumb text-center p-0">
                            <img src="assets/img/team/4-team.png" alt="img">
                        </div>
                        <div class="details">
                            <h5 class="name" style="color: #000000;">M. Fathi Ramdhana</h5>
                            <span class="designation" style="color: #004CE7;">Programmer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-advisors-inner">
                        <div class="thumb text-center p-0">
                            <img src="assets/img/team/2-team.png" alt="img">
                        </div>
                        <div class="details">
                            <h5 class="name" style="color: #000000;">Desinta Nur Rahma</h5>
                            <span class="designation" style="color: #004CE7;">Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team area end --> 

    <x-footer/>

    <!-- back to top area start -->
    
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <x-script-plugins/>
    
</body>
</html>