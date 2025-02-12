<!DOCTYPE html>
<html lang="en" dir="ltr">
  <x-admin-header :title="'Data Paket | Admin Gurafix'" />

  <body class="geex-dashboard">

    <main class="geex-main-content">
      
      <x-admin-sidebar />

      <div class="geex-content">
        <x-admin-header-content :title="'Data Paket'" />

        <button class="geex-btn geex-btn--transparent mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">+ Tambah
          Data</button>
          
        <div class="geex-content__section geex-content__form table-responsive">
          <table class="table-reviews-geex-1">
            <thead>
              <tr style="width: 100%">
                <th style="width: 20%">No</th>
                <th style="width: 20%">Nama Paket</th>
                <th style="width: 20%">Gambar Paket</th>
                <th style="width: 20%">Nama Layanan</th>
                <th style="width: 20%">Fitur</th>
                <th style="width: 20%">Harga</th>
                <th style="width: 20%">Durasi Pengerjaan</th>
                <th style="width: 20%">Aksi</th>
              </tr>
            </thead>
            <tbody class="">
              @forelse($pakets as $index => $paket)
              <tr>
                <td>
                  <div class="author-area">
                    <p>{{ $index + 1 }}</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <p>{{ $paket->nama }}</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <img src="{{ asset('assets_admin/gambar_paket/' . $paket->gambar_paket) }}"
                    alt="Gambar Paket" width="100">
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <p>{{ $paket->layanan->nama }}</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <p>{{ $paket->fitur }}</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <p>{{ $paket->harga }}</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <p>{{ $paket->durasi_pengerjaan }}</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                      <button 
                          class="geex-btn geex-btn--primary edit-btn" 
                          data-bs-toggle="modal"
                          data-bs-target="#editModal" 
                          data-id="{{ $paket->id }}"
                          data-nama="{{ $paket->nama }}"
                          data-gambar_paket="{{ $paket->gambar_paket }}"
                          data-id_layanan="{{ $paket->id_layanan }}"
                          data-fitur="{{ $paket->fitur }}"
                          data-harga="{{ $paket->harga }}"
                          data-durasi_pengerjaan="{{ $paket->durasi_pengerjaan }}"
                          >Edit</button>

                      <form action="{{ route('data-paket.destroy', $paket->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="geex-btn geex-btn--danger delete-btn">Hapus</button>
                      </form>
                  </div>
              </td>
              </tr>
              @empty
              <tr>
                <td colspan="8">
                    <p class="text-center">Tidak ada data paket.</p>
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <x-admin-footer/>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h2 class="">Tambah Data Paket</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="{{ route('data-paket.store') }}" enctype="multipart/form-data">
                      @csrf

                      <label for="nama" class="form-label">Nama Paket</label>
                      <div class="geex-content__form__single__box mb-20">
                          <input type="text" placeholder="Masukkan nama paket" class="form-control"
                              id="nama" name="nama" required>
                      </div>

                      <label for="gambar_paket" class="form-label">Gambar Paket</label>
                      <div class="geex-content__form__single__box mb-20">
                          <input type="file" class="form-control" id="gambar_paket" name="gambar_paket"
                              required>
                      </div>

                      <label for="id_layanan" class="form-label">Pilih Layanan</label>
                      <div class="geex-content__form__single__box mb-20">
                        <select class="form-control" id="id_layanan" name="id_layanan" required>
                          <option value="">Pilih Layanan</option>
                            @foreach($layanans as $layanan)
                                <option value="{{ $layanan->id }}">{{ $layanan->nama }}</option>
                            @endforeach
                        </select>
                      </div>

                      <label for="fitur" class="form-label">Fitur</label>
                      <div class="geex-content__form__single__box mb-20">
                          <input type="text" placeholder="Masukkan fitur" class="form-control"
                              id="fitur" name="fitur" required>
                      </div>

                      <label for="harga" class="form-label">Harga</label>
                      <div class="geex-content__form__single__box mb-20">
                          <input type="number" placeholder="Masukkan harga" class="form-control"
                              id="harga" name="harga" required>
                      </div>

                      <label for="durasi_pengerjaan" class="form-label">Durasi Pengerjaan (Hari)</label>
                      <div class="geex-content__form__single__box mb-20">
                          <input type="number" placeholder="Masukkan durasi pengerjaan" class="form-control"
                              id="durasi_pengerjaan" name="durasi_pengerjaan" required>
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

    <!-- Modal edit Data -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h2 class="">Edit Data Paket</h2>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form method="POST" id="editForm" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')

                      <input type="hidden" name="id" id="editId">
                      
                      <label for="nama" class="form-label">Nama Paket</label>
                      <div class="geex-content__form__single__box mb-20">
                          <input type="text" placeholder="Masukkan nama paket" class="form-control"
                              id="editNama" name="nama" required>
                      </div>

                      <label for="gambar_paket" class="form-label">Gambar Paket</label>
                      <div class="geex-content__form__single__box mb-20">
                          <input type="file" class="form-control" name="gambar_paket"
                              >
                      </div>

                      <img id="currentGambarPaket" src="" alt="Gambar Paket" width="200"
                            class="mt-2 mb-3"> <br>

                      <label for="id_layanan" class="form-label">Pilih Layanan</label>
                      <div class="geex-content__form__single__box mb-20">
                        <select class="form-control" id="editId_layanan" name="id_layanan" required>
                          <option value="">Pilih Layanan</option>
                            @foreach($layanans as $layanan)
                                <option value="{{ $layanan->id }}">{{ $layanan->nama }}</option>
                            @endforeach
                        </select>
                      </div>

                      <label for="fitur" class="form-label">Fitur</label>
                      <div class="geex-content__form__single__box mb-20">
                          <input type="text" placeholder="Masukkan fitur" class="form-control"
                              id="editFitur" name="fitur" required>
                      </div>

                      <label for="harga" class="form-label">Harga</label>
                      <div class="geex-content__form__single__box mb-20">
                          <input type="number" placeholder="Masukkan harga" class="form-control"
                              id="editHarga" name="harga" required>
                      </div>

                      <label for="durasi_pengerjaan" class="form-label">Durasi Pengerjaan (Hari)</label>
                      <div class="geex-content__form__single__box mb-20">
                          <input type="number" placeholder="Masukkan durasi pengerjaan" class="form-control"
                              id="editDurasi_pengerjaan" name="durasi_pengerjaan" required>
                      </div>

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
              const gambar_paket = this.getAttribute('data-gambar_paket');
              const id_layanan = this.getAttribute('data-id_layanan');
              const fitur = this.getAttribute('data-fitur');
              const harga = this.getAttribute('data-harga');
              const durasi_pengerjaan = this.getAttribute('data-durasi_pengerjaan');

              // Set value input di modal
              document.getElementById('editId').value = id;
              document.getElementById('editNama').value = nama;
              document.getElementById('editId_layanan').value = id_layanan;
              document.getElementById('editFitur').value = fitur;
              document.getElementById('editHarga').value = harga;
              document.getElementById('editDurasi_pengerjaan').value = durasi_pengerjaan;
              
              // Set src dari gambar saat ini
              document.getElementById('currentGambarPaket').src = `/assets_admin/gambar_paket/${gambar_paket}`;

              // Update action URL form edit
              document.getElementById('editForm').action = `/admin/data-paket/${id}`;
          });
      });
  </script>

  </body>
</html>
