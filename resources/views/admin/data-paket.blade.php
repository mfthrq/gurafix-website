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
                    <p>{{ $paket->gambar_paket }}</p>
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
                    <button class="geex-btn geex-btn--primary">Edit</button>
                    <button class="geex-btn geex-btn--danger">Hapus</button>
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
    
  </body>
</html>
