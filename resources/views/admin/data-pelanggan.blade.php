<!DOCTYPE html>
<html lang="en" dir="ltr">
  <x-admin-header :title="'Data Pelanggan | Admin Gurafix'" />

  <body class="geex-dashboard">

    <main class="geex-main-content">
      
      <x-admin-sidebar />

      <div class="geex-content">
        <x-admin-header-content :title="'Data Pelanggan'" />

        <div class="geex-content__section geex-content__form table-responsive">
          <table class="table-reviews-geex-1">
              <thead>
                  <tr style="width: 100%">
                      <th style="width: 20%">No</th>
                      <th style="width: 20%">Nama</th>
                      <th style="width: 20%">Email</th>
                      <th style="width: 20%">No Telp</th>
                      <th style="width: 20%">Domisili</th>
                      <th style="width: 20%">Tanggal Lahir</th>
                  </tr>
              </thead>
              <tbody>
                @forelse($users as $index => $user)
                  <tr>
                      <td>
                          <div class="author-area">
                              <p>{{ $index + 1 }}</p>
                          </div>
                      </td>
                      <td>
                          <div class="author-area">
                              <p>{{ $user->nama }}</p>
                          </div>
                      </td>
                      <td>
                          <div class="author-area">
                              <p>{{ $user->email }}</p>
                          </div>
                      </td>
                      <td>
                          <div class="author-area">
                              <p>{{ $user->no_telp ?? 'N/A' }}</p>
                          </div>
                      </td>
                      <td>
                          <div class="author-area">
                              <p>{{ $user->domisili ?? 'N/A' }}</p>
                          </div>
                      </td>
                      <td>
                          <div class="author-area">
                              <p>{{ $user->tanggal_lahir ? $user->tanggal_lahir->format('d-m-Y') : 'N/A' }}</p>
                          </div>
                      </td>
                  </tr>
                @empty
                <tr>
                  <td colspan="6"><p class="text-center">Tidak ada data pelanggan.</p></td>
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
