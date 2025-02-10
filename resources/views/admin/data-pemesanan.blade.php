<!DOCTYPE html>
<html lang="en" dir="ltr">
  <x-admin-header :title="'Data Pemesanan | Admin Gurafix'" />

  <body class="geex-dashboard">

    <main class="geex-main-content">
      
      <x-admin-sidebar />

      <div class="geex-content">
        <x-admin-header-content :title="'Data Pemesanan'" />

        <div class="geex-content__section geex-content__form table-responsive">
          <table class="table-reviews-geex-1">
            <thead>
              <tr style="width: 100%">
                <th style="width: 20%">No</th>
                <th style="width: 20%">Pelanggan</th>
                <th style="width: 20%">Tanggal Pemesanan</th>
                <th style="width: 20%">Layanan</th>
                <th style="width: 20%">Paket</th>
                <th style="width: 20%">Bukti Transaksi</th>
                <th style="width: 20%">Status</th>
                <th style="width: 20%">Aksi</th>
              </tr>
            </thead>
            <tbody class="">
              <tr>
                <td>
                  <div class="author-area">
                    <p>1</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <p>Fathi</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <p>Fathi</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <p>Fathi</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <p>Fathi</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <p>Fathi</p>
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <span class="geex-badge geex-badge--label-icon geex-badge--primary-transparent">
                      Diverifikasi
                    </span>
                    {{-- <span class="geex-badge geex-badge--label-icon geex-badge--warning-transparent">
                      Progress
                    </span>
                    <span class="geex-badge geex-badge--label-icon geex-badge--info-transparent">
                      Revisi
                    </span>
                    <span class="geex-badge geex-badge--label-icon geex-badge--success-transparent">
                      Berhasil
                    </span>
                    <span class="geex-badge geex-badge--label-icon geex-badge--danger-transparent">
                      Gagal
                    </span> --}}
                  </div>
                </td>
                <td>
                  <div class="author-area">
                    <button class="geex-btn geex-btn--primary">Edit</button>
                    <button class="geex-btn geex-btn--danger">Hapus</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>

    <x-admin-footer/>
    
  </body>
</html>
