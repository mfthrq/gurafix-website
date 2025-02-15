<!DOCTYPE html>
<html lang="en" dir="ltr">
<x-admin-header :title="'Data Pemesanan | Admin Gurafix'" />

<body class="geex-dashboard">

    <main class="geex-main-content">

        <x-admin-sidebar />

        <div class="geex-content">
            <x-admin-header-content :title="'Data Pemesanan'" />

            <button class="geex-btn geex-btn--transparent mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">+
                Tambah
                Data</button>

            <div class="geex-content__section geex-content__form table-responsive">
                <table class="table-reviews-geex-1">
                    <thead>
                        <tr style="width: 100%">
                            <th style="width: 20%">No</th>
                            <th style="width: 20%">Pelanggan</th>
                            <th style="width: 20%">Layanan</th>
                            <th style="width: 20%">Paket</th>
                            <th style="width: 20%">Pelanggan Referensi Desain</th>
                            <th style="width: 20%">Pelanggan Brief</th>
                            <th style="width: 20%">Tanggal Pemesanan</th>
                            <th style="width: 20%">Status</th>
                            <th style="width: 20%">Link Desain</th>
                            <th style="width: 20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @forelse($pemesanans as $index => $pemesanan)
                            <tr>
                                <td>
                                    <div class="author-area">
                                        <p>{{ $index + 1 }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        <p>{{ $pemesanan->pelanggan->nama }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        <p>{{ $pemesanan->layanan->nama }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        <p>{{ $pemesanan->paket->nama }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        <img src="{{ asset('assets_admin/pelanggan_referensi_desain/' . $pemesanan->pelanggan_referensi_desain) }}"
                                            alt="referensi desain" width="100">
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        <p>{{ $pemesanan->pelanggan_brief }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        <p>{{ $pemesanan->tanggal_pemesanan }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        @if ($pemesanan->status == 'Menunggu Pembayaran')
                                            <span
                                                class="geex-badge geex-badge--label-icon geex-badge--primary-transparent">
                                                Menunggu Pembayaran
                                            </span>
                                        @elseif ($pemesanan->status == 'Pembayaran Berhasil')
                                            <span
                                                class="geex-badge geex-badge--label-icon geex-badge--success-transparent">
                                                Pembayaran Berhasil
                                            </span>
                                        @elseif ($pemesanan->status == 'Progress')
                                            <span
                                                class="geex-badge geex-badge--label-icon geex-badge--info-transparent">
                                                Progress
                                            </span>
                                        @elseif ($pemesanan->status == 'Revisi')
                                            <span
                                                class="geex-badge geex-badge--label-icon geex-badge--warning-transparent">
                                                Revisi
                                            </span>
                                        @elseif ($pemesanan->status == 'Gagal')
                                            <span
                                                class="geex-badge geex-badge--label-icon geex-badge--danger-transparent">
                                                Gagal
                                            </span>
                                        @elseif ($pemesanan->status == 'Selesai')
                                            <span
                                                class="geex-badge geex-badge--label-icon geex-badge--success-transparent">
                                                Selesai
                                            </span>
                                        @else
                                            <span
                                                class="geex-badge geex-badge--label-icon geex-badge--secondary-transparent">
                                                Tidak Diketahui
                                            </span>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        <p>{{ $pemesanan->link_desain ? $pemesanan->link_desain : "-" }}</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="author-area">
                                        <button class="geex-btn geex-btn--primary edit-btn" data-bs-toggle="modal"
                                            data-bs-target="#editModal" data-id="{{ $pemesanan->id }}"
                                            data-id_pelanggan="{{ $pemesanan->id_pelanggan }}"
                                            data-id_layanan="{{ $pemesanan->id_layanan }}"
                                            data-id_paket="{{ $pemesanan->id_paket }}"
                                            data-pelanggan_referensi_desain="{{ $pemesanan->pelanggan_referensi_desain }}"
                                            data-pelanggan_brief="{{ $pemesanan->pelanggan_brief }}"
                                            data-tanggal_pemesanan="{{ $pemesanan->tanggal_pemesanan }}"
                                            data-status="{{ $pemesanan->status }}"
                                            data-link_desain="{{ $pemesanan->link_desain }}">Edit</button>

                                        <form action="{{ route('data-pemesanan.destroy', $pemesanan->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="geex-btn geex-btn--danger delete-btn">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">
                                    <p class="text-center">Tidak ada data pemesanan.</p>
                                </td>
                            </tr>
                        @endforelse
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
                    <h2 class="">Tambah Data Pemesanan</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('data-pemesanan.store') }}" enctype="multipart/form-data">
                        @csrf

                        <label for="id_pelanggan" class="form-label">Pilih Pelanggan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <select class="form-control" id="id_pelanggan" name="id_pelanggan" required>
                                <option value="">Pilih Pelanggan</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <label for="id_layanan" class="form-label">Pilih Layanan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <select class="form-control" id="id_layanan" name="id_layanan" required>
                                <option value="">Pilih Layanan</option>
                                @foreach ($layanans as $layanan)
                                    <option value="{{ $layanan->id }}">{{ $layanan->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <label for="id_paket" class="form-label">Pilih Paket</label>
                        <div class="geex-content__form__single__box mb-20">
                            <select class="form-control" id="id_paket" name="id_paket" required>
                                <option value="">Pilih paket</option>
                                @foreach ($pakets as $paket)
                                    <option value="{{ $paket->id }}">{{ $paket->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <label for="pelanggan_referensi_desain" class="form-label">Pelanggan referensi Desain</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="file" class="form-control" id="pelanggan_referensi_desain"
                                name="pelanggan_referensi_desain" required>
                        </div>

                        <label for="pelanggan_brief" class="form-label">Pelanggan Brief</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" placeholder="Masukkan pelanggan brief" class="form-control"
                                id="pelanggan_brief" name="pelanggan_brief" required>
                        </div>

                        <label for="tanggal_pemesanan" class="form-label">Tanggal Pemesanan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="date" placeholder="Masukkan tanggal_pemesanan" class="form-control"
                                id="tanggal_pemesanan" name="tanggal_pemesanan" required>
                        </div>

                        <label for="status" class="form-label">Pilih Status</label>
                        <div class="geex-content__form__single__box mb-20">
                            <select class="form-control" id="status" name="status" required>
                                <option value="">Pilih Status</option>
                                <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                                <option value="Pembayaran Berhasil">Pembayaran Berhasil</option>
                                <option value="Progress">Progress</option>
                                <option value="Revisi">Revisi</option>
                                <option value="Gagal">Gagal</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>

                        <label for="link_desain" class="form-label">Link Desain (Opsional)</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" placeholder="Masukkan link desain" class="form-control"
                                id="link_desain" name="link_desain">
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
                    <h2 class="">Edit Data Pemesanan</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="editForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" id="editId">

                        <label for="id_pelanggan" class="form-label">Pilih Pelanggan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <select class="form-control" id="editId_pelanggan" name="id_pelanggan" required>
                                <option value="">Pilih Pelanggan</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <label for="id_layanan" class="form-label">Pilih Layanan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <select class="form-control" id="editId_layanan" name="id_layanan" required>
                                <option value="">Pilih Layanan</option>
                                @foreach ($layanans as $layanan)
                                    <option value="{{ $layanan->id }}">{{ $layanan->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <label for="id_paket" class="form-label">Pilih Paket</label>
                        <div class="geex-content__form__single__box mb-20">
                            <select class="form-control" id="editId_paket" name="id_paket" required>
                                <option value="">Pilih paket</option>
                                @foreach ($pakets as $paket)
                                    <option value="{{ $paket->id }}">{{ $paket->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <label for="pelanggan_referensi_desain" class="form-label">Referensi Desain</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="file" class="form-control" name="pelanggan_referensi_desain">
                        </div>

                        <img id="currentPelangganReferensiDesain" src="" alt="referensi Desain"
                            width="200" class="mt-2 mb-3"> <br>

                        <label for="pelanggan_brief" class="form-label">Pelanggan Brief (Opsional)</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" placeholder="Masukkan pelanggan brief" class="form-control"
                                id="editPelanggan_brief" name="pelanggan_brief">
                        </div>

                        <label for="tanggal_pemesanan" class="form-label">Tanggal Pemesanan</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="date" placeholder="Masukkan tanggal_pemesanan" class="form-control"
                                id="editTanggal_pemesanan" name="tanggal_pemesanan" required>
                        </div>

                        <label for="status" class="form-label">Pilih Status</label>
                        <div class="geex-content__form__single__box mb-20">
                            <select class="form-control" id="editStatus" name="status" required>
                                <option value="">Pilih Status</option>
                                <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                                <option value="Pembayaran Berhasil">Pembayaran Berhasil</option>
                                <option value="Progress">Progress</option>
                                <option value="Revisi">Revisi</option>
                                <option value="Gagal">Gagal</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>

                        <label for="link_desain" class="form-label">Link Desain (Opsional)</label>
                        <div class="geex-content__form__single__box mb-20">
                            <input type="text" placeholder="Masukkan link desain" class="form-control"
                                id="editLink_desain" name="link_desain">
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

    <script>
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const id_pelanggan = this.getAttribute('data-id_pelanggan');
                const id_layanan = this.getAttribute('data-id_layanan');
                const id_paket = this.getAttribute('data-id_paket');
                const pelanggan_referensi_desain = this.getAttribute('data-pelanggan_referensi_desain');
                const pelanggan_brief = this.getAttribute('data-pelanggan_brief');
                const tanggal_pemesanan = this.getAttribute('data-tanggal_pemesanan');
                const status = this.getAttribute('data-status');
                const link_desain = this.getAttribute('data-link_desain');

                // Set value input di modal
                document.getElementById('editId').value = id;
                document.getElementById('editId_pelanggan').value = id_pelanggan;
                document.getElementById('editId_layanan').value = id_layanan;
                document.getElementById('editId_paket').value = id_paket;
                document.getElementById('editPelanggan_brief').value = pelanggan_brief;
                document.getElementById('editTanggal_pemesanan').value = tanggal_pemesanan;
                document.getElementById('editStatus').value = status;
                document.getElementById('editLink_desain').value = link_desain;

                // Set src dari gambar saat ini
                document.getElementById('currentPelangganReferensiDesain').src =
                    `/assets_admin/pelanggan_referensi_desain/${pelanggan_referensi_desain}`;

                // Update action URL form edit
                document.getElementById('editForm').action = `/admin/data-pemesanan/${id}`;
            });
        });
    </script>
</body>

</html>
