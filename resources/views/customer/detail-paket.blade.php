<!DOCTYPE html>
<html lang="zxx">
  <x-header :title="'Detail Paket | Gurafix'" />
  <body>
      <!-- cursor -->
      <div class="cursor"></div>
      <div class="cursor-follower"></div>
      <!-- cursor End -->
      
      <x-navbar/>

      <!-- create items start -->
      <div class="creator-details-area pd-top-120">
          <div class="container">
              <div class="row">
                  <div class="col-xl-3 col-lg-4">
                      <div class="creator-widget creator-category-widget">
                          <div class="single-feature-inner style-2">
                              <div class="details">
                                  <div class="d-flex justify-content-between border-bottom-1 align-items-center pb-4 mb-4">
                                      <div class="left d-flex justify-content-between align-items-center">
                                          <div class="img overflow-hidden me-2">
                                              <img class="me-2 main-img" src="assets/img/tournament/7.png" alt="img">
                                          </div>
                                          <div class="info-d">
                                              <h4 class="mb-0 text-white">Paket Standar</h4>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-6">
                                          <span>Biaya</span> <br>
                                          <span class="color-base">
                                              Rp25.000
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
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-9 col-lg-8">
                      <form class="create-items-form">
                          {{-- <input class="item-field" type="text" placeholder="Nama" value="Fathi Ramdhana" style="color:white;" disabled>
                          <input class="item-field" type="number" placeholder="No Telp" value="0892849339" style="color:white;" disabled>
                          <input class="item-field" type="text" placeholder="Email" value="fathi@gmail.com" style="color:white;" disabled> --}}
                          <input class="item-field" type="text" placeholder="Rekomendasi Warna" style="color: white;">
                          <div class="image-upload d-md-flex justify-content-between align-items-center mt-2">
                              <p class="mb-md-0">
                                  <img class="me-2" src="assets/img/icon/13.png" alt="img">
                                  Refrensi Desain (Format: PNG, JPG, GIF, WEBP Max 10Mb)
                              </p>
                              <label class="upload-file">
                                  <input type="file">
                                  Upload File
                              </label>
                          </div>
                          <textarea class="item-field" placeholder="Catatan" style="color: white;"></textarea>
                          <a class="btn btn-base mt-4" href="#">Submit Now</a>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- create items end -->

      <x-footer/>

      <!-- back to top area start -->
      <div class="back-to-top">
          <span class="back-top"><i class="fa fa-angle-up"></i></span>
      </div>
      <!-- back to top area end -->

      <x-script-plugins/>
      
  </body>
</html>