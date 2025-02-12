<!DOCTYPE html>
<html lang="en" dir="ltr">
  <x-admin-header :title="'Data Layanan | Admin Gurafix'" />

  <body class="geex-dashboard">

    <main class="geex-main-content">
      
      <x-admin-sidebar />

      <div class="geex-content">
        <x-admin-header-content :title="'Data Layanan'" />

        <button class="geex-btn geex-btn--primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahLayananModal">+ Tambah Data</button>

        <div class="geex-content__section geex-content__form table-responsive">
          <table class="table-reviews-geex-1">
            <thead>
              <tr style="width: 100%">
                <th style="width: 20%">No</th>
                <th style="width: 20%">Nama</th>
                <th style="width: 20%">Deskripsi</th>
                <th style="width: 20%">Gambar Layanan</th>
                <th style="width: 20%">Aksi</th>
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
                  <div class="author-area">
                    <p>{{ $layanan->deskripsi }}</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <img src="{{ asset('assets_admin/gambar_layanan/' . $layanan->gambar_layanan) }}" alt="Gambar Layanan" width="100">
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <button class="geex-btn geex-btn--primary">Edit</button>
                    <button class="geex-btn geex-btn--danger">Hapus</button>
                  </div>
                </td>
              @empty
              <tr>
                <td colspan="5"><p class="text-center">Tidak ada data layanan.</p></td>
              </tr>
              @endforelse
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <x-admin-footer/>
    
    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambahLayananModal" tabindex="-1" aria-labelledby="tambahLayananModalLabel" aria-hidden="true">
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
								<input type="text" placeholder="Masukkan nama layanan" class="form-control" id="nama" name="nama" required>
							</div>

              <label for="deskripsi" class="form-label">Deskripsi Layanan</label>
              <div class="geex-content__form__single__box mb-20">
								<textarea placeholder="Masukkan deskripsi layanan" class="form-control" id="deskripsi" name="deskripsi" style="height: 200px;" required></textarea>
							</div>

              <label for="gambar_layanan" class="form-label">Gambar Layanan</label>
              <div class="geex-content__form__single__box mb-20">
								<input type="file" class="form-control" id="gambar_layanan" name="gambar_layanan" required>
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

  </body>
</html>
