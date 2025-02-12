<!DOCTYPE html>
<html>
<x-header :title="'Daftar | Gurafix'" />

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
                                <h2 class="title" style="color: #ddf247;">DAFTAR <span>AKUN</span></h2>
                                <p class="mb-0 mt-3 color-base">Sudah Punya Akun? <a href="/login"
                                        style="color: #ddf247; font-weight: bold;">Login</a></p>
                            </div>
                        </div>
                        <form class="login-form-inner" action="{{ route('signup.store') }}" method="POST">
                            @csrf
                            <div class="single-input-inner style-border">
                                <input type="text" placeholder="Email" id="email" name="email">
                            </div>
                            <div class="single-input-inner style-border">
                                <input type="username" placeholder="Nama Pengguna" id="nama" name="nama">
                            </div>
                            <div class="single-input-inner style-border">
                                <input type="date" placeholder="Tanggal Lahir" id="tanggal_lahir"
                                    name="tanggal_lahir">
                            </div>
                            <div class="single-input-inner style-border">
                                <select id="domisili" name="domisili"
                                    style="width: 100%; padding: 0 18px; border-radius: 10px; height: 75px; background-color: #1a2430; color: white; font-size: 15px;">
                                    <option value="">-- Pilih Domisili --</option>
                                </select>
                            </div>
                            <div class="single-input-inner style-border">
                                <input type="tel" placeholder="Nomor Telepon" id="no_telp" name="no_telp"
                                    required>
                            </div>
                            <div class="single-input-inner style-border">
                                <input type="password" placeholder="Kata Sandi" id="password" name="password">
                                <span><img src="assets/img/icon/18.png" alt="img"></span>
                            </div>
                            <button type="submit" class="btn btn-base tt-uppercase w-100">Daftar</button>
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

    <script>
        fetch('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json')
            .then(response => response.json())
            .then(data => {
                const select = document.getElementById('domisili');
                data.forEach(provinsi => {
                    let option = document.createElement('option');
                    option.value = provinsi.name; // Menggunakan nama provinsi sebagai value
                    option.textContent = provinsi.name;
                    select.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching data:', error));

        document.getElementById('domisili').addEventListener('change', function() {
            let selectedOption = this.options[this.selectedIndex];
            console.log('Provinsi Terpilih:', selectedOption.value);
        });
    </script>
</body>

</html>
