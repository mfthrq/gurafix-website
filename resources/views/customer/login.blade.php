<!DOCTYPE html>
<html lang="zxx">
<x-header :title="'Login | Gurafix'" />

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

    <!-- product-cart start -->
    <div class="product-cart-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="pe-lg-4">
                        <div class="section-title text-center">
                            <div class="row">
                                <h2 class="title" style="color: #ddf247;">LOGIN<span> AKUN</span></h2>
                                <p class="mb-0 mt-3 color-base">Belum Punya Akun? <a href="/signup"
                                        style="color: #ddf247; font-weight: bold;">Daftar Sekarang</a></p>
                            </div>
                        </div>
                        @if ($errors->has('loginError'))
                            <div class="alert alert-danger">{{ $errors->first('loginError') }}</div>
                        @endif
                        <form action="{{ route('customer.login.submit') }}" class="login-form-inner" method="POST">
                            @csrf
                            <div class="single-input-inner style-border">
                                <input type="email" placeholder="Masukkan Email Anda" id="email" name="email">
                                <span><img src="assets/img/icon/17.png" alt="img"></span>
                            </div>
                            <div class="single-input-inner style-border">
                                <input type="password" placeholder="Masukkan Kata Sandi" id="password" name="password">
                                <span><img src="assets/img/icon/18.png" alt="img"></span>
                            </div>
                            <button type="submit" class="btn btn-base tt-uppercase w-100">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-cart end -->

    <x-footer />

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <x-script-plugins />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    iconColor: '#004CE7',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#004CE7',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif
</body>

</html>
