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
    }

    .chat-box-admin{
        align-self: flex-start;
    }

    .chat-box-customer{
        align-self: flex-end;
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
    }

    .admin-message .chat-time {
        color: black;
    }

    .customer-message .chat-time {
        color: white;
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
            {{-- <div class="section-title">
                <h2 class="title" style="color: #ddf100;">Chat <span>Admin</span></h2>
            </div> --}}
            <div class="chat-container p-3">
                <h4 class="text-center mb-3" style="color: #004CE7">Chat <span style="color: #ddf100">Admin</span></h4>
                <div class="chat-box d-flex flex-column">

                    <div class="chat-box-admin">
                        <span class="chat-name">Admin</span>
                        <div class="chat-message admin-message">
                            Halo, ada yang bisa kami bantu?
                            <div class="chat-time">10:00 AM</div>
                        </div>
                    </div>

                    <div class="chat-box-customer">
                        <span class="chat-name">{{ Auth::user()->nama }}</span>
                        <div class="chat-message customer-message">
                            Ya, saya ingin bertanya tentang jasa desain.
                            <div class="chat-time">10:05 AM</div>
                        </div>
                    </div>
                    
                </div>
                <div class="input-group mt-3">
                    <input type="file" class="form-control" id="fileInput">
                </div>
                <div class="input-group mt-2">
                    <input type="text" class="form-control" placeholder="Ketik pesan..." style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                    <button class="btn btn-primary" id="sendButton">Kirim</button>
                </div>
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

</body>

</html>
