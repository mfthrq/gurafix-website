<div class="geex-content__header">
    <div class="geex-content__header__content">
        <h1 class="geex-content__header__title">{{ $title ?? '-' }}</h2>
    </div>

    <div class="geex-content__header__action">
        <div class="geex-content__header__customizer">
            <button class="geex-btn geex-btn__toggle-sidebar">   
                <i class="uil uil-align-center-alt"></i> 
            </button>
        </div>
        <div class="geex-content__header__action__wrap">
            <ul class="geex-content__header__quickaction">
                <li class="geex-content__header__quickaction__item">
                    <a href="#" class="geex-content__header__quickaction__link">
                        <img class="user-img" src="{{ asset('assets_admin/assets/img/avatar/user.svg') }}"
                            alt="user" />
                    </a>
                    <div class="geex-content__header__popup geex-content__header__popup--author">
                        <div class="geex-content__header__popup__header">
                            <div class="geex-content__header__popup__header__img">
                                <img src="{{ asset('assets_admin/assets/img/avatar/user.svg') }}" alt="user" />
                            </div>
                            <div class="geex-content__header__popup__header__content">
                                <h3 class="geex-content__header__popup__header__title">{{ Auth::user()->nama }}</h3>
                            </div>
                        </div>
                        <div class="geex-content__header__popup__footer mt-3">
                            <form id="logoutForm" action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit" id="logoutButton" class="geex-content__header__popup__footer__link" style="border: 0;">
                                    <i class="uil uil-arrow-up-left"></i>Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById('logoutButton').addEventListener('click', function(e) {
        e.preventDefault(); // Mencegah perilaku submit default
        Swal.fire({
            title: 'Yakin ingin keluar?',
            icon: 'warning',
            iconColor: '#004CE7',
            showCancelButton: true,
            confirmButtonColor: "#FF5B5B",
            cancelButtonColor: "#004CE7",
            confirmButtonText: 'Ya, keluar!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna konfirmasi, submit form logout
                document.getElementById('logoutForm').submit();
            }
        });
    });
</script>