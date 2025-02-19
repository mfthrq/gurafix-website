<!DOCTYPE html>
<html lang="en" dir="ltr">
<x-admin-header :title="'Data Layanan | Admin Gurafix'" />

<body class="geex-dashboard">

    <main class="geex-main-content">

        <x-admin-sidebar />

        <div class="geex-content">
            <x-admin-header-content :title="'Data Layanan'" />

            <button class="geex-btn geex-btn--transparent mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">+ Tambah
                Data</button>

            <div class="geex-content__section geex-content__form table-responsive">
                <table class="table-reviews-geex-1">
                    <thead>
                        <tr style="width: 100%">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar Layanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($layanans as $index => $layanan)
                        <tr>
                                <td>
                                    <div class="author-area">
                                        <p>{{ $index + 1 }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        <p>{{ $layanan->nama }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div style="max-height: 100px; overflow-y: auto;">
                                        {{ $layanan->deskripsi }}
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        <img src="{{ asset('assets_admin/gambar_layanan/' . $layanan->gambar_layanan) }}"
                                            alt="Gambar Layanan" width="100">
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        <button 
                                            class="geex-btn geex-btn--primary edit-btn" 
                                            data-bs-toggle="modal"
                                            data-bs-target="#editModal" 
                                            data-id="{{ $layanan->id }}"
                                            data-nama="{{ $layanan->nama }}"
                                            data-deskripsi="{{ $layanan->deskripsi }}"
                                            data-gambar_layanan="{{ $layanan->gambar_layanan }}"
                                            >Edit</button>

                                        <form action="{{ route('data-layanan.destroy', $layanan->id) }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="geex-btn geex-btn--danger delete-btn" 
                                          data-id="{{ $layanan->id }}">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            @empty
                            <tr>
                                <td colspan="5">
                                    <p class="text-center">Tidak ada data layanan.</p>
                                </td>
                            </tr>
                        @endforelse
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <x-admin-footer />

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="">Tambah Data Layanan</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('data-layanan.store') }}" enctype="multipart/form-data">
                        @csrf

                        <label for="nama" class="form-label">Nama Layanan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" placeholder="Masukkan nama layanan" class="form-control"
                                id="nama" name="nama" required>
                        </div>

                        <label for="deskripsi" class="form-label">Deskripsi Layanan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <textarea placeholder="Masukkan deskripsi layanan" class="form-control" id="deskripsi" name="deskripsi"
                                style="height: 200px;" required></textarea>
                        </div>

                        <label for="gambar_layanan" class="form-label">Gambar Layanan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="file" class="form-control" id="gambar_layanan" name="gambar_layanan"
                                required>
                        </div>

                        <div class="modal-footer p-0">
                            <button class="geex-btn geex-btn--danger" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="geex-btn geex-btn--primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Data -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="">Edit Data Layanan</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="editForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" id="editId">

                        <label for="nama" class="form-label">Nama Layanan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" placeholder="Masukkan nama layanan" class="form-control"
                                id="editNama" name="nama" required>
                        </div>

                        <label for="deskripsi" class="form-label">Deskripsi Layanan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <textarea placeholder="Masukkan deskripsi layanan" class="form-control" id="editDeskripsi" name="deskripsi"
                                style="height: 200px;" required></textarea>
                        </div>

                        <label for="gambar_layanan" class="form-label">Gambar Layanan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="file" class="form-control" id="gambar_layanan" name="gambar_layanan">
                        </div>

                        <img id="currentGambarLayanan" src="" alt="Gambar Layanan" width="100"
                            class="mt-2">

                        <div class="modal-footer p-0">
                            <button class="geex-btn geex-btn--danger" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="geex-btn geex-btn--primary">Perbarui</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const nama = this.getAttribute('data-nama');
                const deskripsi = this.getAttribute('data-deskripsi');
                const gambar_layanan = this.getAttribute('data-gambar_layanan');

                // Set value input di modal
                document.getElementById('editId').value = id;
                document.getElementById('editNama').value = nama;
                document.getElementById('editDeskripsi').value = deskripsi;

                // Set src dari gambar saat ini
                document.getElementById('currentGambarLayanan').src = `/assets_admin/gambar_layanan/${gambar_layanan}`;

                // Update action URL form edit
                document.getElementById('editForm').action = `/admin/data-layanan/${id}`;
            });
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
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah form langsung dikirim
                const form = this.closest('form'); // Mengambil form terdekat
                Swal.fire({
                    title: "Yakin ingin hapus data?",
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: "warning",
                    iconColor: '#004CE7',
                    showCancelButton: true,
                    confirmButtonColor: "#FF5B5B",
                    cancelButtonColor: "#004CE7",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Kirim form jika konfirmasi diterima
                    }
                });
            });
        });
    </script>

</body>

</html>
