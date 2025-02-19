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
                        <form id="signupForm" class="login-form-inner" action="{{ route('signup.store') }}" method="POST">
                            @csrf
                            <div class="single-input-inner style-border">
                                <input type="email" placeholder="Email" id="email" name="email">
                            </div>
                            <div class="single-input-inner style-border">
                                <input type="text" placeholder="Nama Pengguna" id="nama" name="nama">
                            </div>
                            <div class="single-input-inner style-border">
                                <input type="date" placeholder="Tanggal Lahir" id="tanggal_lahir"
                                    name="tanggal_lahir">
                            </div>
                            <div class="single-input-inner style-border">
                                <input type="number" placeholder="Nomor Telepon" id="no_telp" name="no_telp"
                                    required>
                            </div>
                            <div class="single-input-inner style-border">
                                <select id="domisili" name="domisili"
                                    style="width: 100%; padding: 0 18px; border-radius: 10px; height: 75px; background-color: #1a2430; color: white; font-size: 15px;">
                                    <option value="" disabled selected>-- Pilih Domisili --</option>
                                </select>
                            </div>
                            <div class="single-input-inner style-border">
                                <select id="pekerjaan" name="pekerjaan"
                                    style="width: 100%; padding: 0 18px; border-radius: 10px; height: 75px; background-color: #1a2430; color: white; font-size: 15px;">
                                    <option value="" disabled selected>-- Pilih Pekerjaan --</option>
                                    <option value="Pelajar">Pelajar</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="UMKM/Wiraswasta">UMKM/Wiraswasta</option>
                                    <option value="Freelancer">Freelancer</option>
                                    <option value="Content Creator/Influencer">Content Creator/Influencer</option>
                                    <option value="Lembaga/Organisasi">Lembaga/Organisasi</option>
                                    <option value="Event Organizer">Event Organizer</option>
                                    <option value="Pribadi/Personal">Pribadi/Personal</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="single-input-inner style-border" style="display: flex;">
                                <input type="password" id="exampleInputPassword1" placeholder="Kata Sandi"
                                    name="password" autocomplete="new-password">
                                <span class="input-group-text ms-1" onclick="togglePassword()"
                                    style="cursor: pointer; background-color: #DDF247; border-radius: 10px; border: 0;">
                                    <i id="eyeIcon" class="fas fa-eye"></i>
                                </span>
                            </div>

                            <div id="passwordRequirements" class="fw-bold alert alert-danger"
                                style="display: none; border: none; background-color: #DDF247; color: black; font-size: 15px; border-radius: 10px;">
                                Password harus mengandung minimal 8 karakter, huruf besar, huruf kecil, angka, dan
                                karakter khusus (@$!%*?&).
                            </div>

                            <div class="single-input-inner style-border" style="display: flex;">
                                <input type="password" id="exampleInputPassword2" placeholder="Konfirmasi Kata Sandi"
                                    name="konfirmasiPassword" autocomplete="new-password">
                                <span class="input-group-text ms-1" onclick="toggleKonfirmPassword()"
                                    style="cursor: pointer; background-color: #DDF247; border-radius: 10px; border: 0;">
                                    <i id="eyeIcon2" class="fas fa-eye"></i>
                                </span>
                            </div>

                            <div id="passwordError" class="fw-bold alert alert-danger"
                            style="display: none; border: none; background-color: #DDF247; color: black; font-size: 15px; border-radius: 10px;">
                                Password dan Konfirmasi Password tidak sama.
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('exampleInputPassword1');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }

        function toggleKonfirmPassword() {
            const passwordInput = document.getElementById('exampleInputPassword2');
            const eyeIcon = document.getElementById('eyeIcon2');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }

        // Event listener untuk memeriksa kesamaan password saat pengguna mengetik
        document.getElementById("exampleInputPassword1").addEventListener("input", checkPasswords);
        document.getElementById("exampleInputPassword2").addEventListener("input", checkPasswords);

        document.getElementById("signupForm").addEventListener("submit", function(event) {
            var password = document.getElementById("exampleInputPassword1").value;
            var confirmPassword = document.getElementById("exampleInputPassword2").value;

            // Cek apakah password dan konfirmasi password cocok
            if (password !== confirmPassword) {
                event.preventDefault(); // Mencegah form dari submit

                // Tampilkan alert menggunakan SweetAlert
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Password dan Konfirmasi Password Tidak Sama!',
                    confirmButtonColor: '#d33'
                });
            }
        });

        function checkPasswords() {
            var password = document.getElementById("exampleInputPassword1").value;
            var confirmPassword = document.getElementById("exampleInputPassword2").value;
            var passwordError = document.getElementById("passwordError");
            var passwordRequirements = document.getElementById("passwordRequirements");

            // Regular expression to check password requirements
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            // Check if the password meets the requirements
            if (!passwordRegex.test(password)) {
                passwordRequirements.style.display = "block"; // Show requirements message
            } else {
                passwordRequirements.style.display = "none"; // Hide requirements message
            }

            // Check if password and confirm password match
            if (password !== confirmPassword) {
                passwordError.style.display = "block"; // Show mismatch error
            } else {
                passwordError.style.display = "none"; // Hide mismatch error
            }
        }

        document.getElementById("signupForm").addEventListener("submit", function(event) {
            var password = document.getElementById("exampleInputPassword1").value;
            var confirmPassword = document.getElementById("exampleInputPassword2").value;
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            // Validasi ketentuan password saat submit
            if (!passwordRegex.test(password) || password !== confirmPassword) {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Password harus sama dan mengandung minimal 8 karakter, huruf besar, huruf kecil, angka, dan karakter khusus (@$!%*?&).',
                    confirmButtonColor: '#d33'
                });
            }
        });
    </script>
</body>

</html>
