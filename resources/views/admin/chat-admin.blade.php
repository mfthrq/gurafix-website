<!doctype html>
<html lang="en" dir="ltr">

<x-admin-header :title="'Chat Admin | Admin Gurafix'" />

<body class="geex-dashboard">

    <main class="geex-main-content">

        <x-admin-sidebar />

        <div class="geex-content">
            <x-admin-header-content :title="'Chat Admin'" />

            <div class="geex-content__wrapper">
                <div class="geex-content__section-wrapper">
                    <div class="geex-content__section geex-content__section--transparent geex-content__chat">
                        <button class="geex-btn geex-content__chat__toggle">
                            <i class="uil-bars"></i> Chat List
                        </button>

                        <div class="geex-content__chat__sidebar">
                            <div class="geex-content__chat__sidebar__searchform">
                                <div class="geex-content__chat__sidebar__searchform__search">
                                    <input type="text" placeholder="Cari" class="geex-content__header__btn" />
                                    <i class="uil uil-search"></i>
                                </div>
                                <button class="geex-content__chat__sidebar__searchform__btn">
                                    <i class="uil-plus"></i>
                                </button>
                            </div>

                            <ul class="nav nav-tabs geex-content__chat__sidebar__tab mb-20" role="tablist">
                                @forelse($users as $user)
                                    <li class="nav-item" role="presentation">
                                        <a href="#" class="nav-link chat-tab" data-id="{{ $user->id }}"
                                            data-nama="{{ $user->nama }}">
                                            <div class="geex-chat-tab-single">
                                                <div class="geex-chat-tab-single__content">
                                                    <div class="geex-chat-tab-single__message">
                                                        <h4 class="geex-chat-tab-single__title">{{ $user->nama }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @empty
                                    <li class="nav-item" role="presentation">
                                        Tidak ada data pelanggan.
                                    </li>
                                @endforelse

                            </ul>
                        </div>

                        <div class="tab-content geex-content__chat__content">
                            <div class="tab-pane fade show active" id="geex-chat-content-1" role="tabpanel"
                                aria-labelledby="geex-chat-tab-1">
                                <div class="geex-content__chat__content">
                                    <div class="geex-content__chat__header">
                                        <div class="geex-content__chat__header__content">
                                            <div class="geex-content__chat__header__text">
                                                <h4 class="geex-content__chat__header__title" id="chat-header-title">
                                                    Pilih Pengguna</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="geex-content__chat__list" id="chat-list">

                                        {{-- Konten Chat --}}

                                    </div>

                                    <form action="{{ route('chat-admin.store') }}" method="POST">
                                        @csrf
                                        <div class="geex-content__chat__send">
                                            <input type="hidden" id="id_sender" name="id_sender"
                                                value="{{ Auth::id() }}" required>
                                            <input type="hidden" id="id_receiver" name="id_receiver" required>
                                            <div class="geex-content__chat__send__input">
                                                <input placeholder="Ketikkan Pesan.." name="message" id="message"
                                                    value="" required>
                                            </div>
                                            <div class="geex-content__chat__send__action">
                                                <div class="geex-content__chat__action__toggle__content">
                                                    <div class="geex-content__chat__send__action__wrap">
                                                        <div class="geex-content__chat__send__action__single">
                                                            <input type="file" name="attachments" id="attachments">
                                                            <i class="uil uil-link"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="geex-btn geex-content__chat__action__toggle__btn">
                                                    <i class="uil-ellipsis-h"></i>
                                                </button>
                                                <button type="submit" class="btn-send">
                                                    <i class="uil uil-message"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-admin-footer />

    <script src="jquery-3.7.1.min.js"></script>

    <script>
        function formatDateTime(isoString) {
            let date = new Date(isoString);

            // Ambil komponen tanggal & waktu
            let day = String(date.getDate()).padStart(2, '0');
            let month = String(date.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
            let year = date.getFullYear();
            let hours = String(date.getHours()).padStart(2, '0');
            let minutes = String(date.getMinutes()).padStart(2, '0');
            let seconds = String(date.getSeconds()).padStart(2, '0');

            // Format akhir: "12/02/2025 | 20:21:34"
            return `${day}/${month}/${year} | ${hours}:${minutes}:${seconds}`;
        }

        $(document).ready(function() {
            $(".chat-tab").click(function(e) {
                e.preventDefault(); // Hindari reload halaman

                var userId = $(this).data("id"); // Ambil ID user yang diklik
                var userName = $(this).data("nama"); // Ambil nama user
                var adminName = @json(auth()->user()->nama);

                $("#chat-header-title").text(userName);
                $("#nama-chat-customer").text(userName); // Update nama di header chat

                // Ambil data chat dengan AJAX
                $.ajax({
                    url: "/admin/chat-admin/get-chat/" + userId, // Endpoint untuk mendapatkan chat
                    type: "GET",
                    success: function(response) {
                        console.log(response);

                        var chatHtml = ""; // Variable untuk menampung chat

                        // Looping chat dari response
                        response.chats.forEach(function(chat) {

                            let formattedTime = formatDateTime(chat.created_at);

                            if (chat.id_sender == response.admin_id) {
                                // Jika admin adalah pengirim
                                chatHtml += `
                                <div class="geex-content__chat__list__single active">
                                    <div class="geex-content__chat__list__single__text">
                                        <span class="geex-content__chat__list__single__title">${adminName}</span>
                                        <span class="geex-content__chat__list__single__msg latest">${chat.message}</span>
                                        <span>${formattedTime}</span>
                                    </div>
                                </div>
                            `;
                            } else {
                                // Jika customer adalah pengirim
                                chatHtml += `
                                <div class="geex-content__chat__list__single">
                                    <div class="geex-content__chat__list__single__text">
                                        <span class="geex-content__chat__list__single__title">${userName}</span>
                                        <span class="geex-content__chat__list__single__msg latest">${chat.message}</span>
                                        <span>${formattedTime}</span>
                                    </div>
                                </div>
                            `;
                            }
                        });

                        $("#chat-list").html(chatHtml); // Tampilkan chat ke dalam list
                    },
                    error: function() {
                        alert("Gagal mengambil data chat.");
                    }
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Tangkap semua elemen dengan class 'chat-tab'
            const chatTabs = document.querySelectorAll(".chat-tab");

            chatTabs.forEach(tab => {
                tab.addEventListener("click", function(event) {
                    event.preventDefault(); // Mencegah reload halaman

                    // Ambil ID pengguna yang diklik
                    let userId = this.getAttribute("data-id");
                    let userName = this.getAttribute("data-nama");

                    // Update input hidden id_receiver
                    document.getElementById("id_receiver").value = userId;

                    // Ubah tampilan header chat agar sesuai dengan nama yang diklik
                    document.querySelector(".geex-content__chat__header__title").textContent =
                        userName;
                });
            });
        });
    </script>

</body>

</html>
