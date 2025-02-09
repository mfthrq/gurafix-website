<!DOCTYPE html>
<html>

  <x-header :title="'Kontak | Gurafix'" />

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

      <!-- contact area start -->
      <div class="contact-area pd-top-120">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="section-title pe-xl-5 pe-lg-4">
                          <h2 class="title" style="color: #ddf247;">Kontak <span style="color: #0075CD;">Kami</span></h2>
                          <div class="contact-form pt-3">
                              <div class="single-input-inner style-border">
                                  <input type="text" placeholder="Name">
                              </div>
                              <div class="single-input-inner style-border">
                                  <input type="text" placeholder="Email">
                              </div>
                              <div class="single-input-inner style-border">
                                  <textarea placeholder="Message"></textarea>
                              </div>
                              <button class="btn btn-base border-radius-0 w-100 mt-2">Kirim</button>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 mt-lg-0 mt-4">
                      <div class="contact-map-area">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.463902302242!2d106.8049921623995!3d-6.589115700000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d2e602b501%3A0x25a12f0f97fac4ee!2sSekolah%20Vokasi%20Institut%20Pertanian%20Bogor!5e0!3m2!1sid!2sid!4v1738654628209!5m2!1sid!2sid" width="600" style="border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <x-footer/>

      <!-- back to top area start -->
      <div class="back-to-top">
          <span class="back-top"><i class="fa fa-angle-up"></i></span>
      </div>
      <!-- back to top area end -->
      
      <x-script-plugins/>
      
  </body>

</html>