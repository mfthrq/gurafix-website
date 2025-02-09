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

      <x-navbar/>

      <!-- layanan start -->
      <div class="creator-area pd-top-120">
          <div class="container">
              <div class="section-title text-center">
                  <h2 class="title" style="color: #ddf247">LAYANAN <span>KAMI</span></h2>
              </div>
              <div class="row">
                  <div class="col-lg-3 mb-lg-0 mb-5 fade-slide bottom" data-delay="0.8">
                      <div class="trusted-wallet-inner p-3 py-5">
                          <img class="bg-one w-100" src="assets/img/bg/5.png" alt="img" />
                          <div class="content-inner text-center">
                              <div class="icon">
                                  <img src="assets/img/wallet/1.png" alt="img">
                              </div>
                              <span class="mt-3">Layanan 1</span>
                              <h4>Desain Promosi dan Media Cetak</h4>
                              <a class="read-more link-layanan" href="/detail-layanan">Detail Layanan > </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 mb-lg-0 mb-5 fade-slide bottom" data-delay="0.8">
                      <div class="trusted-wallet-inner p-3 py-5">
                          <img class="bg-one w-100" src="assets/img/bg/5.png" alt="img" />
                          <div class="content-inner text-center">
                              <div class="icon">
                                  <img src="assets/img/wallet/1.png" alt="img">
                              </div>
                              <span class="mt-3">Layanan 2</span>
                              <h4>Desain Identitas dan Produk Fisik</h4>
                              <a class="read-more link-layanan" href="/detail-layanan">Detail Layanan > </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 mb-lg-0 mb-5 fade-slide bottom" data-delay="0.8">
                      <div class="trusted-wallet-inner p-3 py-5">
                          <img class="bg-one w-100" src="assets/img/bg/5.png" alt="img" />
                          <div class="content-inner text-center">
                              <div class="icon">
                                  <img src="assets/img/wallet/1.png" alt="img">
                              </div>
                              <span class="mt-3">Layanan 3</span>
                              <h4>Desain Buku dan <br> Majalah</h4>
                              <a class="read-more link-layanan" href="/detail-layanan">Detail Layanan > </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 mb-lg-0 mb-5 fade-slide bottom" data-delay="0.8">
                      <div class="trusted-wallet-inner p-3 py-5">
                          <img class="bg-one w-100" src="assets/img/bg/5.png" alt="img" />
                          <div class="content-inner text-center">
                              <div class="icon">
                                  <img src="assets/img/wallet/1.png" alt="img">
                              </div>
                              <span class="mt-3">Layanan 4</span>
                              <h4>Desain Media Sosial dan Digital</h4>
                              <a class="read-more link-layanan" href="/detail-layanan">Detail Layanan > </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- layanan end -->

      <x-footer/>

      <!-- back to top area start -->
      <div class="back-to-top">
          <span class="back-top"><i class="fa fa-angle-up"></i></span>
      </div>
      <!-- back to top area end -->

      <x-script-plugins/>
      
  </body>
</html>