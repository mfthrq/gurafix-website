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
                            {{-- <div class="geex-content__chat__sidebar__searchform">
                                <div class="geex-content__chat__sidebar__searchform__search">
                                    <input type="text" placeholder="Cari" class="geex-content__header__btn" />
                                    <i class="uil uil-search"></i>
                                </div>
                                <button class="geex-content__chat__sidebar__searchform__btn">
                                    <i class="uil-plus"></i>
                                </button>
                            </div> --}}

                            <ul class="nav nav-tabs geex-content__chat__sidebar__tab mb-20 pt-3" role="tablist">
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
                                    <p align="center">
                                        Tidak ada data pelanggan.
                                    </p>
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

                                    <form action="{{ route('chat-admin.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <!-- Tempat Nama File -->
                                        <p id="file-name" style="margin-left: 30px; margin-top: 15px; font-size: 18px; color: black; font-weight: bold;"></p>

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

    <!-- JavaScript untuk Menampilkan Nama File -->
    <script>
        document.getElementById("attachments").addEventListener("change", function() {
            var fileName = this.files.length > 0 ? this.files[0].name : "";
            document.getElementById("file-name").textContent = fileName ? "File: " + fileName : "";
        });
    </script>

    <script>
        $(document).ready(function() {
            var adminName = @json(auth()->user()->nama);
            var savedUserId = localStorage.getItem("selectedUserId");
            var savedUserName = localStorage.getItem("selectedUserName");

            if (savedUserId && savedUserName) {
                $("#chat-header-title").text(savedUserName);
                $("#id_receiver").val(savedUserId);
                fetchChatMessages(savedUserId, savedUserName, adminName);
            }

            $(".chat-tab").click(function(e) {
                e.preventDefault();
                var userId = $(this).data("id");
                var userName = $(this).data("nama");

                $("#chat-header-title").text(userName);
                $("#id_receiver").val(userId);

                localStorage.setItem("selectedUserId", userId);
                localStorage.setItem("selectedUserName", userName);

                fetchChatMessages(userId, userName, adminName);
            });

            function fetchChatMessages(userId, userName, adminName) {
                $.ajax({
                    url: "/admin/chat-admin/get-chat/" + userId,
                    type: "GET",
                    success: function(response) {
                        var chatHtml = "";
                        response.chats.forEach(function(chat) {
                            let formattedTime = formatDateTime(chat.created_at);
                            let senderName = chat.id_sender == response.admin_id ? adminName :
                                userName;
                            let chatClass = chat.id_sender == response.admin_id ? "active" : "";

                            let imageAttachment = chat.attachments ?
                                `<img src="/assets_admin/attachments/${chat.attachments}" alt="Attachment" width="200">` :
                                "";

                            chatHtml += `
                        <div class="geex-content__chat__list__single ${chatClass}">
                            <div class="geex-content__chat__list__single__text">
                                <span class="geex-content__chat__list__single__title">${senderName}</span>
                                <span class="geex-content__chat__list__single__msg latest" style="display: flex; flex-direction: column;">
                                    <div style="max-width: 100%; border-radius: 8px; overflow: hidden;">
                                        ${imageAttachment && imageAttachment !== "null" ? `<div style="margin-bottom: 10px;">${imageAttachment}</div>` : ""}
                                    </div>
                                    <div style="word-wrap: break-word;">
                                        ${chat.message && chat.message !== "null" ? `${chat.message}` : ""}
                                    </div>
                                </span>

                                <span>${formattedTime}</span>
                            </div>
                        </div>
                    `;
                        });
                        $("#chat-list").html(chatHtml);
                    },
                    error: function() {
                        alert("Gagal mengambil data chat.");
                    }
                });
            }

            function formatDateTime(dateTime) {
                let date = new Date(dateTime);

                let day = String(date.getDate()).padStart(2, '0');
                let month = String(date.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
                let year = date.getFullYear();

                let hours = String(date.getHours()).padStart(2, '0');
                let minutes = String(date.getMinutes()).padStart(2, '0');

                return `${day}/${month}/${year} - ${hours}:${minutes}`;
            }
        });
    </script>

</body>

</html>
