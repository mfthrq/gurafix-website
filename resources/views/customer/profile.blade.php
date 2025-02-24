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

    <x-navbar />

    <!-- team-details area start -->
    <div class="team-details-area pd-top-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="team-details-page-content">
                        <div class="thumb mb-4">
                            <img class="w-100" src="assets/img/team/team-d-1.png" alt="img">
                        </div>
                        <div
                            class="grid info-meta d-flex flex-column flex-lg-row justify-content-between align-self-center">
                            <!-- Kolom untuk Nama -->
                            <div class="col-12 col-md-7">
                                <h3 class="tt-capitalize" style="color: #004CE7; font-size: 30px;">
                                    <img src="assets/img/team/info1.png" alt="img"> {{ Auth::user()->nama }}
                                </h3>
                            </div>
                            <!-- Kolom untuk Tombol -->
                            <div class="col-12 col-md-5 d-flex flex-md-row justify-content-between">
                                <a class="btn btn-base d-flex justify-content-center align-items-center w-100 me-3"
                                    style="background-color: #ddf247;" href="{{ route('riwayat') }}">Riwayat</a>
                                <button
                                    class="btn btn-base me-3 d-flex justify-content-center align-items-center w-100 btn-edit"
                                    data-bs-toggle="modal" data-bs-target="#editModal">
                                    Edit
                                </button>

                                <form id="logoutForm" action="{{ route('customer.logout') }}" method="POST">
                                    @csrf
                                    <button id="logoutButton" type="submit"
                                        class="btn btn-base d-flex justify-content-center align-items-center bg-danger text-white"
                                        style="width: 80px;" href="#">Logout</button>
                                </form>
                            </div>
                        </div>

                        <div class="price-meta">
                            <h4 style="color: black;">Total Pemesanan: 
                                <span style="color: #004CE7;">{{ $totalPemesanan }}</span>
                            </h4>
                            <!-- Baris pertama (3 kolom di tengah) -->
                            <div class="row text-center gap-2 px-2">
                                <div class="col p-2">
                                    <div style="background-color: #ddf247; border-radius: 6px;" class="mb-2">
                                        <span style="color: black; font-size: 15px;">Unpaid</span><br>
                                    </div>
                                    <div style="background-color: #004CE7; border-radius: 6px;">
                                        <span style="color: white; font-weight: bold;">{{ $menungguPembayaran }}</span>
                                    </div>
                                </div>
                                <div class="col p-2">
                                    <div style="background-color: #ddf247; border-radius: 6px;" class="mb-2">
                                        <span style="color: black; font-size: 15px;">Paid</span><br>
                                    </div>
                                    <div style="background-color: #004CE7; border-radius: 6px;">
                                        <span style="color: white; font-weight: bold;">{{ $pembayaranBerhasil }}</span>
                                    </div>
                                </div>
                                <div class="col p-2">
                                    <div style="background-color: #ddf247; border-radius: 6px;" class="mb-2">
                                        <span style="color: black; font-size: 15px;">Progress</span><br>
                                    </div>
                                    <div style="background-color: #004CE7; border-radius: 6px;">
                                        <span style="color: white; font-weight: bold;">{{ $progress }} </span>
                                    </div>
                                </div>
                                <div class="col p-2">
                                    <div style="background-color: #ddf247; border-radius: 6px;" class="mb-2">
                                        <span style="color: black; font-size: 15px;">Revisi</span><br>
                                    </div>
                                    <div style="background-color: #004CE7; border-radius: 6px;">
                                        <span style="color: white; font-weight: bold;">{{ $revisi }} </span>
                                    </div>
                                </div>
                                <div class="col p-2">
                                    <div style="background-color: #ddf247; border-radius: 6px;" class="mb-2">
                                        <span style="color: black; font-size: 15px;">Selesai</span><br>
                                    </div>
                                    <div style="background-color: #004CE7; border-radius: 6px;">
                                        <span style="color: white; font-weight: bold;">{{ $selesai }} </span>
                                    </div>
                                </div>
                                <div class="col p-2">
                                    <div style="background-color: #ddf247; border-radius: 6px;" class="mb-2">
                                        <span style="color: black; font-size: 15px;">Gagal</span><br>
                                    </div>
                                    <div style="background-color: #004CE7; border-radius: 6px;">
                                        <span style="color: white; font-weight: bold;">{{ $gagal }} </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Form Input -->
                            <form class="login-form-inner mt-4">
                                <div class="single-input-inner style-border">
                                    <input value="{{ Auth::user()->nama }}" type="text" disabled>
                                </div>
                                <div class="single-input-inner style-border">
                                    <input
                                        value="{{ \Carbon\Carbon::parse(Auth::user()->tanggal_lahir)->format('Y-m-d') }}"
                                        type="text" disabled>
                                </div>
                                <div class="single-input-inner style-border">
                                    <input value="{{ Auth::user()->domisili }}" type="text"disabled>
                                </div>
                                <div class="single-input-inner style-border">
                                    <input value="{{ Auth::user()->pekerjaan }}" type="text"disabled>
                                </div>
                                <div class="single-input-inner style-border">
                                    <input value="{{ Auth::user()->no_telp }}" type="number" disabled>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team-details area end -->

    <x-footer />

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <x-script-plugins />

    <!-- Modal Edit Data -->
    <div class="modal fade mt-5 p-5" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 style="font-weight: 0; color: black;">Edit Profile</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form class="login-form-inner" 
                    action="{{ route('profile.updatePelanggan', Auth::user()->id) }}" 
                    method="POST" 
                    id="editForm" 
                    enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" value="{{ Auth::user()->id }}" name="id" id="editId">

                        <label for="nama" class="form-label" style="color: black;">Nama</label>
                        <div class="single-input-inner style-border">
                            <input type="text" placeholder="Masukkan nama" class="text-white" id="editNama"
                                name="nama" value="{{ Auth::user()->nama }}" required>
                        </div>

                        <label for="email" class="form-label" style="color: black;">Email</label>
                        <div class="single-input-inner style-border">
                            <input type="text" placeholder="Masukkan email" class="text-white" id="editEmail"
                                name="email" value="{{ Auth::user()->email }}" required>
                        </div>

                        <label for="no_telp" class="form-label" style="color: black;">No Telp</label>
                        <div class="single-input-inner style-border">
                            <input type="number" placeholder="Masukkan no_telp" class="text-white" id="editNo_telp"
                                name="no_telp" value="{{ Auth::user()->no_telp }}" required>
                        </div>

                        <label for="domisili" class="form-label" style="color: black;">Domisili</label>
                        <div class="single-input-inner style-border">
                            <select id="editDomisili" name="domisili"
                                style="width: 100%; padding: 0 18px; border-radius: 10px; height: 75px; background-color: #1a2430; color: white; font-size: 15px;">
                                <option value="{{ Auth::user()->domisili }}" selected>
                                    {{ Auth::user()->domisili }}</option>
                            </select>
                        </div>

                        <label for="tanggal_lahir" class="form-label" style="color: black;">Tanggal Lahir</label>
                        <div class="single-input-inner style-border">
                            <input type="date" placeholder="Tanggal Lahir" id="editTanggal_lahir"
                                name="tanggal_lahir"
                                value="{{ \Carbon\Carbon::parse(Auth::user()->tanggal_lahir)->format('Y-m-d') }}">
                        </div>

                        <label for="pekerjaan" class="form-label" style="color: black;">Pekerjaan</label>
                        <div class="single-input-inner style-border">
                            <select id="editPekerjaan" name="pekerjaan"
                                style="width: 100%; padding: 0 18px; border-radius: 10px; height: 75px; background-color: #1a2430; color: white; font-size: 15px;">
                                <option value="{{ Auth::user()->pekerjaan }}" selected>{{ Auth::user()->pekerjaan }}</option>
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

                        <label for="password" class="form-label" style="color: black;">Password (Kosongkan jika tidak
                            ingin
                            mengubah)</label>
                        <div class="single-input-inner style-border">
                            <input type="password" placeholder="Masukkan password" class="text-white"
                            id="editPassword" name="password" autocomplete="new-password" value="">
                        </div>

                        <div class="p-0" style="display: flex;">
                            <button type="submit"
                                class="btn btn-base d-flex justify-content-center align-items-center w-100">
                                Perbarui
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        fetch('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json')
            .then(response => response.json())
            .then(data => {
                const select = document.getElementById('editDomisili');
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

    <script>
        document.getElementById('logoutButton').addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah perilaku submit default
            Swal.fire({
                title: 'Yakin ingin keluar?',
                icon: 'warning',
                iconColor: '#004CE7',
                showCancelButton: true,
                confirmButtonColor: "#DC3545",
                cancelButtonColor: "#004CE7",
                confirmButtonText: 'Ya, keluar!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna konfirmasi, submit form logout
                    document.getElementById('logoutForm').submit();
                }
            });
        });
    </script>

</body>

</html>
