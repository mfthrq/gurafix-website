<!DOCTYPE html>
<html lang="zxx">
<x-header :title="'Chat | Gurafix'" />
<style>
    .chat-container {
        max-width: 100%;
        margin: 0 auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .chat-box {
        height: 400px;
        overflow-y: auto;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 10px;
    }

    .chat-message {
        margin-bottom: 15px;
        padding: 10px;
        border-radius: 10px;
        display: flex;
        word-wrap: break-word;
        flex-direction: column; /* Elemen ditumpuk secara vertikal */
        gap: 5px;
    }

    .chat-message-container {
        display: flex;
        justify-content: flex-end; /* Dorong chat-message ke kanan */
        width: 100%;
    }

    .chat-box-admin {
        align-self: flex-start;
        max-width: 70%;
    }

    .chat-box-customer {
        align-self: flex-end;
        max-width: 70%;
    }

    .admin-message {
        background: #e9ecef;
        color: black;
        align-self: flex-start;
        border-bottom-left-radius: 0px;
    }

    .customer-message {
        background: #004CE7;
        color: white;
        align-self: flex-end;
        border-bottom-right-radius: 0px;
    }

    .chat-box-customer .chat-name {
        text-align: right;
    }

    .chat-name {
        font-weight: bold;
        display: block;
        margin-bottom: 3px;
        color: black;
    }

    .chat-time {
        font-size: 12px;
        margin-top: 5px;
        text-align: right;
        color: black;
    }

    .admin-message .chat-time {
        color: black;
    }

    .customer-message .chat-time {
        color: white;
    }

    .chat-message img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-top: 5px;
    }
</style>

<body>
    <!-- cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <!-- cursor End -->

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <x-navbar />

    <!-- creator-details start -->
    <div class="creator-details-area pd-top-120">
        <div class="container">
            <div class="chat-container p-3">
                <h4 class="text-center mb-3" style="color: #004CE7">Chat <span style="color: #ddf100">Admin</span></h4>
                <div class="chat-box d-flex flex-column" id="chat-list">

                    {{-- ISI BUBBLE CHAT DENGAN ADMIN --}}

                </div>
                <form action="{{ route('chat.storeCustomer') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="id_sender" name="id_sender" value="{{ Auth::id() }}" required>
                    <input type="hidden" id="id_receiver" name="id_receiver" value="1" required>
                    <div class="input-group mt-3">
                        <input type="file" class="form-control" id="attachments" name="attachments">
                    </div>
                    <div class="input-group mt-2">
                        <input type="text" class="form-control" placeholder="Ketik pesan..."
                            style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;" id="message"
                            name="message">
                        <button type="submit" class="btn btn-primary" id="send-button">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- creator-details end -->

    <x-footer />


    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <x-script-plugins />

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const chatList = document.getElementById("chat-list");
            const messageInput = document.getElementById("message");
            const sendButton = document.getElementById("send-button");
            const customerId = "{{ Auth::id() }}"; // ID customer saat ini
            const adminId = "1"; // ID Admin (bisa diganti sesuai sistem)

            // Fungsi format tanggal & waktu: 02/02/2025 - 08:50
            function formatDateTime(dateTime) {
                let date = new Date(dateTime);

                let day = String(date.getDate()).padStart(2, '0');
                let month = String(date.getMonth() + 1).padStart(2, '0');
                let year = date.getFullYear();
                let hours = String(date.getHours()).padStart(2, '0');
                let minutes = String(date.getMinutes()).padStart(2, '0');

                return `${day}/${month}/${year} - ${hours}:${minutes}`;
            }

            // **1. Ambil riwayat chat saat halaman dimuat**
            function loadChat() {
                $.ajax({
                    url: "/customer/chat/get-chat/", // Sesuaikan dengan API backend
                    type: "GET",
                    success: function(response) {
                        chatList.innerHTML = ""; // Bersihkan chat list sebelum update
                        console.log("Data chat diterima:", response); // Debugging

                        response.chats.forEach(function(chat) {
                            let formattedTime = formatDateTime(chat.created_at);
                            let chatHtml = "";

                            // Cek apakah ada teks pesan
                            let textMessage = chat.message ? `${chat.message}` : "";

                            // Cek apakah ada gambar di kolom attachments
                            let imageAttachment = chat.attachments ?
                                `<img src="/assets_admin/attachments/${chat.attachments}" alt="Attachment" width="200">` :
                                "";

                            if (chat.id_sender == customerId) {
                                // Jika pesan dari customer
                                chatHtml = `
                        <div class="chat-box-customer mt-3">
                            <span class="chat-name">{{ Auth::user()->nama }}</span>
                            <div class="chat-message-container">
                                <div class="chat-message customer-message">
                                    ${imageAttachment}
                                    ${textMessage}
                                </div>
                            </div>
                            <div class="chat-time">${formattedTime}</div>
                        </div>`;
                            } else {
                                // Jika pesan dari admin
                                chatHtml = `
                        <div class="chat-box-admin mt-3">
                            <span class="chat-name">Admin</span>
                            <div class="chat-message admin-message">
                                ${imageAttachment}
                                ${textMessage}
                            </div>
                            <div class="chat-time" style="text-align: left;">${formattedTime}</div>
                        </div>`;
                            }

                            chatList.innerHTML += chatHtml;
                        });

                        // Auto scroll ke bawah
                        chatList.scrollTop = chatList.scrollHeight;
                    },
                    error: function(xhr, status, error) {
                        console.error("Gagal mengambil data chat:", error);
                    }
                });
            }

            // **3. Panggil loadChat saat halaman dimuat**
            loadChat();
        });
    </script>
</body>

</html>
