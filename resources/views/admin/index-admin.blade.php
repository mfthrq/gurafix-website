<!doctype html>
<html lang="en" dir="ltr">

<x-admin-header :title="'Dashboard | Admin Gurafix'" />

<body class="geex-dashboard demo-invoice">

    <main class="geex-main-content">

        <x-admin-sidebar />

        <div class="geex-customizer">
            <div class="geex-customizer__header">
                <h4 class="geex-customizer__title">Customizer</h4>
                <button class="geex-btn geex-btn__customizer-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18 7.05L16.95 6L12 10.95L7.05 6L6 7.05L10.95 12L6 16.95L7.05 18L12 13.05L16.95 18L18 16.95L13.05 12L18 7.05Z"
                            fill="#BCBFDB" />
                        <path
                            d="M18 7.05L16.95 6L12 10.95L7.05 6L6 7.05L10.95 12L6 16.95L7.05 18L12 13.05L16.95 18L18 16.95L13.05 12L18 7.05Z"
                            fill="black" fill-opacity="0.8" />
                    </svg>
                </button>
            </div>
            <div class="geex-customizer__body">
                <div class="geex-customizer__single">
                    <h5 class="geex-customizer__single__title">Layout Types</h5>
                    <ul class="geex-customizer__list geex-customizer__list--layout">
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--ltr active">
                                <svg width="24" height="20" viewBox="0 0 24 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4.5" y="2.5" width="13" height="5" rx="1.5"
                                        stroke="white" />
                                    <rect x="4.5" y="12.5" width="19" height="5" rx="1.5"
                                        stroke="white" />
                                    <rect width="1" height="20" fill="white" />
                                </svg>
                                LTR
                            </button>
                        </li>
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--rtl">
                                RTL
                                <svg width="24" height="20" viewBox="0 0 24 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="-0.5" y="0.5" width="13" height="5" rx="1.5"
                                        transform="matrix(-1 0 0 1 19 2)" stroke="#AB54DB" />
                                    <rect x="-0.5" y="0.5" width="19" height="5" rx="1.5"
                                        transform="matrix(-1 0 0 1 19 12)" stroke="#AB54DB" />
                                    <rect width="1" height="20" transform="matrix(-1 0 0 1 24 0)"
                                        fill="#AB54DB" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="geex-customizer__single">
                    <h4 class="geex-customizer__single__title">Mode Type</h4>
                    <ul class="geex-customizer__list geex-customizer__list--sidebar">
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--light active">
                                <svg width="144" height="86" viewBox="0 0 144 86" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="144" height="86" rx="10" fill="white" />
                                    <circle cx="27" cy="22" r="4" fill="#FF5653" />
                                    <circle cx="38" cy="22" r="4" fill="#FDB23A" />
                                    <circle cx="49" cy="22" r="4" fill="#2CBF44" />
                                    <rect x="22" y="36" width="110" height="1" fill="#E7E7E7" />
                                    <path
                                        d="M31.94 58.34H26.38L25.46 61H22.52L27.54 47.02H30.8L35.82 61H32.86L31.94 58.34ZM31.18 56.1L29.16 50.26L27.14 56.1H31.18ZM36.9764 55.42C36.9764 54.3 37.1964 53.3067 37.6364 52.44C38.0897 51.5733 38.6964 50.9067 39.4564 50.44C40.2297 49.9733 41.0897 49.74 42.0364 49.74C42.8631 49.74 43.5831 49.9067 44.1964 50.24C44.8231 50.5733 45.3231 50.9933 45.6964 51.5V49.92H48.5164V61H45.6964V59.38C45.3364 59.9 44.8364 60.3333 44.1964 60.68C43.5697 61.0133 42.8431 61.18 42.0164 61.18C41.0831 61.18 40.2297 60.94 39.4564 60.46C38.6964 59.98 38.0897 59.3067 37.6364 58.44C37.1964 57.56 36.9764 56.5533 36.9764 55.42ZM45.6964 55.46C45.6964 54.78 45.5631 54.2 45.2964 53.72C45.0297 53.2267 44.6697 52.8533 44.2164 52.6C43.7631 52.3333 43.2764 52.2 42.7564 52.2C42.2364 52.2 41.7564 52.3267 41.3164 52.58C40.8764 52.8333 40.5164 53.2067 40.2364 53.7C39.9697 54.18 39.8364 54.7533 39.8364 55.42C39.8364 56.0867 39.9697 56.6733 40.2364 57.18C40.5164 57.6733 40.8764 58.0533 41.3164 58.32C41.7697 58.5867 42.2497 58.72 42.7564 58.72C43.2764 58.72 43.7631 58.5933 44.2164 58.34C44.6697 58.0733 45.0297 57.7 45.2964 57.22C45.5631 56.7267 45.6964 56.14 45.6964 55.46Z"
                                        fill="#464255" />
                                </svg>
                            </button>
                        </li>
                        <li class="geex-customizer__list__item">
                            <button class="geex-btn geex-customizer__btn geex-customizer__btn--dark">
                                <svg width="144" height="86" viewBox="0 0 144 86" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="144" height="86" rx="10" fill="#2F2A36" />
                                    <circle cx="27" cy="22" r="4" fill="#FF5653" />
                                    <circle cx="38" cy="22" r="4" fill="#FDB23A" />
                                    <circle cx="49" cy="22" r="4" fill="#2CBF44" />
                                    <rect x="22" y="36" width="110" height="1" fill="#D0D6DE" />
                                    <path
                                        d="M31.94 58.34H26.38L25.46 61H22.52L27.54 47.02H30.8L35.82 61H32.86L31.94 58.34ZM31.18 56.1L29.16 50.26L27.14 56.1H31.18ZM36.9764 55.42C36.9764 54.3 37.1964 53.3067 37.6364 52.44C38.0897 51.5733 38.6964 50.9067 39.4564 50.44C40.2297 49.9733 41.0897 49.74 42.0364 49.74C42.8631 49.74 43.5831 49.9067 44.1964 50.24C44.8231 50.5733 45.3231 50.9933 45.6964 51.5V49.92H48.5164V61H45.6964V59.38C45.3364 59.9 44.8364 60.3333 44.1964 60.68C43.5697 61.0133 42.8431 61.18 42.0164 61.18C41.0831 61.18 40.2297 60.94 39.4564 60.46C38.6964 59.98 38.0897 59.3067 37.6364 58.44C37.1964 57.56 36.9764 56.5533 36.9764 55.42ZM45.6964 55.46C45.6964 54.78 45.5631 54.2 45.2964 53.72C45.0297 53.2267 44.6697 52.8533 44.2164 52.6C43.7631 52.3333 43.2764 52.2 42.7564 52.2C42.2364 52.2 41.7564 52.3267 41.3164 52.58C40.8764 52.8333 40.5164 53.2067 40.2364 53.7C39.9697 54.18 39.8364 54.7533 39.8364 55.42C39.8364 56.0867 39.9697 56.6733 40.2364 57.18C40.5164 57.6733 40.8764 58.0533 41.3164 58.32C41.7697 58.5867 42.2497 58.72 42.7564 58.72C43.2764 58.72 43.7631 58.5933 44.2164 58.34C44.6697 58.0733 45.0297 57.7 45.2964 57.22C45.5631 56.7267 45.6964 56.14 45.6964 55.46Z"
                                        fill="#D0D6DE" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="geex-customizer-overlay"></div>
        </div>

        <div class="geex-content">
            <x-admin-header-content :title="'Dashboard'" />

            <div class="geex-content__wrapper">
                <div class="geex-content__section-wrapper">
                    
                    <div class="geex-content__summary">
                        <div class="geex-container">
                            <div class="geex-content__summary__count__single primary-bg">
                                <div class="geex-content__summary__count__single__content">
                                    <h4 class="geex-content__summary__count__single__title">{{ $totalPelanggan }}</h4>
                                    <p class="geex-content__summary__count__single__subtitle">Total Pelanggan</p>
                                </div>
                                <div class="geex-content__summary__count__single__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32" fill="none">
                                        <path
                                            d="M26.9908 5.10791C26.7542 4.84524 26.4229 4.68728 26.0699 4.66878C25.7168 4.65027 25.3709 4.77274 25.1081 5.00925L12.7148 16.1626L6.94277 10.3906C6.81978 10.2632 6.67265 10.1617 6.50998 10.0918C6.34731 10.0219 6.17235 9.98512 5.99531 9.98358C5.81827 9.98204 5.6427 10.0158 5.47884 10.0828C5.31497 10.1499 5.16611 10.2489 5.04091 10.3741C4.91572 10.4992 4.81672 10.6481 4.74968 10.812C4.68264 10.9758 4.6489 11.1514 4.65044 11.3285C4.65198 11.5055 4.68876 11.6804 4.75864 11.8431C4.82852 12.0058 4.93009 12.1529 5.05744 12.2759L11.7241 18.9426C11.9656 19.184 12.2905 19.3235 12.6319 19.3325C12.9732 19.3414 13.305 19.219 13.5588 18.9906L26.8921 6.99058C27.1548 6.75397 27.3127 6.42272 27.3312 6.06968C27.3498 5.71663 27.2273 5.37069 26.9908 5.10791Z"
                                            fill="#464255" />
                                        <path
                                            d="M25.1085 13.0093L12.7152 24.1626L6.94321 18.3906C6.69174 18.1478 6.35494 18.0134 6.00534 18.0164C5.65575 18.0195 5.32133 18.1597 5.07412 18.4069C4.82691 18.6541 4.68668 18.9885 4.68364 19.3381C4.68061 19.6877 4.815 20.0245 5.05788 20.276L11.7245 26.9426C11.966 27.1841 12.291 27.3236 12.6323 27.3325C12.9737 27.3415 13.3054 27.2191 13.5592 26.9906L26.8925 14.9906C27.1473 14.752 27.2983 14.423 27.3131 14.0742C27.3279 13.7255 27.2054 13.3848 26.9718 13.1254C26.7383 12.866 26.4123 12.7086 26.0639 12.6868C25.7155 12.6651 25.3725 12.7809 25.1085 13.0093Z"
                                            fill="#464255" />
                                    </svg>
                                </div>
                            </div>
                            <div class="geex-content__summary__count__single primary-bg">
                                <div class="geex-content__summary__count__single__content">
                                    <h4 class="geex-content__summary__count__single__title">{{ $totalLayanan }}</h4>
                                    <p class="geex-content__summary__count__single__subtitle">Total Layanan</p>
                                </div>
                                <div class="geex-content__summary__count__single__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32" fill="none">
                                        <path
                                            d="M26.9908 5.10791C26.7542 4.84524 26.4229 4.68728 26.0699 4.66878C25.7168 4.65027 25.3709 4.77274 25.1081 5.00925L12.7148 16.1626L6.94277 10.3906C6.81978 10.2632 6.67265 10.1617 6.50998 10.0918C6.34731 10.0219 6.17235 9.98512 5.99531 9.98358C5.81827 9.98204 5.6427 10.0158 5.47884 10.0828C5.31497 10.1499 5.16611 10.2489 5.04091 10.3741C4.91572 10.4992 4.81672 10.6481 4.74968 10.812C4.68264 10.9758 4.6489 11.1514 4.65044 11.3285C4.65198 11.5055 4.68876 11.6804 4.75864 11.8431C4.82852 12.0058 4.93009 12.1529 5.05744 12.2759L11.7241 18.9426C11.9656 19.184 12.2905 19.3235 12.6319 19.3325C12.9732 19.3414 13.305 19.219 13.5588 18.9906L26.8921 6.99058C27.1548 6.75397 27.3127 6.42272 27.3312 6.06968C27.3498 5.71663 27.2273 5.37069 26.9908 5.10791Z"
                                            fill="#464255" />
                                        <path
                                            d="M25.1085 13.0093L12.7152 24.1626L6.94321 18.3906C6.69174 18.1478 6.35494 18.0134 6.00534 18.0164C5.65575 18.0195 5.32133 18.1597 5.07412 18.4069C4.82691 18.6541 4.68668 18.9885 4.68364 19.3381C4.68061 19.6877 4.815 20.0245 5.05788 20.276L11.7245 26.9426C11.966 27.1841 12.291 27.3236 12.6323 27.3325C12.9737 27.3415 13.3054 27.2191 13.5592 26.9906L26.8925 14.9906C27.1473 14.752 27.2983 14.423 27.3131 14.0742C27.3279 13.7255 27.2054 13.3848 26.9718 13.1254C26.7383 12.866 26.4123 12.7086 26.0639 12.6868C25.7155 12.6651 25.3725 12.7809 25.1085 13.0093Z"
                                            fill="#464255" />
                                    </svg>
                                </div>
                            </div>
                            <div class="geex-content__summary__count__single primary-bg">
                                <div class="geex-content__summary__count__single__content">
                                    <h4 class="geex-content__summary__count__single__title">{{ $totalPaket }}</h4>
                                    <p class="geex-content__summary__count__single__subtitle">Total Paket</p>
                                </div>
                                <div class="geex-content__summary__count__single__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32" fill="none">
                                        <path
                                            d="M26.9908 5.10791C26.7542 4.84524 26.4229 4.68728 26.0699 4.66878C25.7168 4.65027 25.3709 4.77274 25.1081 5.00925L12.7148 16.1626L6.94277 10.3906C6.81978 10.2632 6.67265 10.1617 6.50998 10.0918C6.34731 10.0219 6.17235 9.98512 5.99531 9.98358C5.81827 9.98204 5.6427 10.0158 5.47884 10.0828C5.31497 10.1499 5.16611 10.2489 5.04091 10.3741C4.91572 10.4992 4.81672 10.6481 4.74968 10.812C4.68264 10.9758 4.6489 11.1514 4.65044 11.3285C4.65198 11.5055 4.68876 11.6804 4.75864 11.8431C4.82852 12.0058 4.93009 12.1529 5.05744 12.2759L11.7241 18.9426C11.9656 19.184 12.2905 19.3235 12.6319 19.3325C12.9732 19.3414 13.305 19.219 13.5588 18.9906L26.8921 6.99058C27.1548 6.75397 27.3127 6.42272 27.3312 6.06968C27.3498 5.71663 27.2273 5.37069 26.9908 5.10791Z"
                                            fill="#464255" />
                                        <path
                                            d="M25.1085 13.0093L12.7152 24.1626L6.94321 18.3906C6.69174 18.1478 6.35494 18.0134 6.00534 18.0164C5.65575 18.0195 5.32133 18.1597 5.07412 18.4069C4.82691 18.6541 4.68668 18.9885 4.68364 19.3381C4.68061 19.6877 4.815 20.0245 5.05788 20.276L11.7245 26.9426C11.966 27.1841 12.291 27.3236 12.6323 27.3325C12.9737 27.3415 13.3054 27.2191 13.5592 26.9906L26.8925 14.9906C27.1473 14.752 27.2983 14.423 27.3131 14.0742C27.3279 13.7255 27.2054 13.3848 26.9718 13.1254C26.7383 12.866 26.4123 12.7086 26.0639 12.6868C25.7155 12.6651 25.3725 12.7809 25.1085 13.0093Z"
                                            fill="#464255" />
                                    </svg>
                                </div>
                            </div>
                            <div class="geex-content__summary__count__single primary-bg">
                                <div class="geex-content__summary__count__single__content">
                                    <h4 class="geex-content__summary__count__single__title">{{ $totalPemesanan }}</h4>
                                    <p class="geex-content__summary__count__single__subtitle">Total Pemesanan</p>
                                </div>
                                <div class="geex-content__summary__count__single__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 32 32" fill="none">
                                        <path
                                            d="M26.9908 5.10791C26.7542 4.84524 26.4229 4.68728 26.0699 4.66878C25.7168 4.65027 25.3709 4.77274 25.1081 5.00925L12.7148 16.1626L6.94277 10.3906C6.81978 10.2632 6.67265 10.1617 6.50998 10.0918C6.34731 10.0219 6.17235 9.98512 5.99531 9.98358C5.81827 9.98204 5.6427 10.0158 5.47884 10.0828C5.31497 10.1499 5.16611 10.2489 5.04091 10.3741C4.91572 10.4992 4.81672 10.6481 4.74968 10.812C4.68264 10.9758 4.6489 11.1514 4.65044 11.3285C4.65198 11.5055 4.68876 11.6804 4.75864 11.8431C4.82852 12.0058 4.93009 12.1529 5.05744 12.2759L11.7241 18.9426C11.9656 19.184 12.2905 19.3235 12.6319 19.3325C12.9732 19.3414 13.305 19.219 13.5588 18.9906L26.8921 6.99058C27.1548 6.75397 27.3127 6.42272 27.3312 6.06968C27.3498 5.71663 27.2273 5.37069 26.9908 5.10791Z"
                                            fill="#464255" />
                                        <path
                                            d="M25.1085 13.0093L12.7152 24.1626L6.94321 18.3906C6.69174 18.1478 6.35494 18.0134 6.00534 18.0164C5.65575 18.0195 5.32133 18.1597 5.07412 18.4069C4.82691 18.6541 4.68668 18.9885 4.68364 19.3381C4.68061 19.6877 4.815 20.0245 5.05788 20.276L11.7245 26.9426C11.966 27.1841 12.291 27.3236 12.6323 27.3325C12.9737 27.3415 13.3054 27.2191 13.5592 26.9906L26.8925 14.9906C27.1473 14.752 27.2983 14.423 27.3131 14.0742C27.3279 13.7255 27.2054 13.3848 26.9718 13.1254C26.7383 12.866 26.4123 12.7086 26.0639 12.6868C25.7155 12.6651 25.3725 12.7809 25.1085 13.0093Z"
                                            fill="#464255" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5" style="display: flex; flex-wrap: wrap; gap: 20px;">
                        <div style="flex: 1; min-width: 300px;">
                            <div class="geex-content__section geex-content__income-count">
                                <div class="geex-content__section__header">
                                    <div class="geex-content__section__header__title-part">
                                        <h3 class="geex-content__section__header__title">Total Pemesanan Berdasarkan Pekerjaan</h4>
                                    </div>
                                </div>
                                <div class="geex-content__section__content">
                                    {{-- <div class="geex-content__section__content__top">
                                        <div class="geex-content__section__content__top__left">
                                        <h4 class="geex-content__section__content__amount increment">
                                            <i class="uil uil-angle-up"></i>
                                            +4,6%
                                        </h4>
                                        <p class="geex-content__section__content__subtitle">Bigger than last week</p>
                                        </div>
                                        <div class="geex-content__section__content__top__right">
                                        <h4 class="geex-content__section__content__price">$1,572.68</h4>
                                        </div>
                                    </div> --}}
                                    <div id="income-chart" class="column-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 300px;">
                            <div class="geex-content__widget__single geex-content__widget__summary">
                                <div class="geex-content__widget__summary__header">
                                    <h4 class="geex-content__section__header__title">Persentase Domisili</h4>
                                    
                                </div>
                                <div class="geex-content__widget__summary__content">
                                    <div id="summary-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <x-admin-footer/>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    iconColor: '#004CE7',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#004CE7',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif
</body>

</html>
