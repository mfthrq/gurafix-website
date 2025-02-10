<!DOCTYPE html>
<html lang="en" dir="ltr">
  <x-admin-header :title="'Data Layanan | Admin Gurafix'" />

  <body class="geex-dashboard">

    <main class="geex-main-content">
      
      <x-admin-sidebar />

      <div class="geex-content">
        <x-admin-header-content :title="'Data Layanan'" />

        <div class="geex-content__section geex-content__form table-responsive">
          <table class="table-reviews-geex-1">
            <thead>
              <tr style="width: 100%">
                <th style="width: 20%">No</th>
                <th style="width: 20%">Gambar Layanan</th>
                <th style="width: 20%">Nama Layanan</th>
                <th style="width: 20%">Aksi</th>
              </tr>
            </thead>
            <tbody class="">
              <tr>
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
