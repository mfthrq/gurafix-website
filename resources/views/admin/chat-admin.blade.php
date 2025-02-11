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
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link unread active" id="geex-chat-tab-1"
                                        data-bs-toggle="tab" data-bs-target="#geex-chat-content-1" type="button"
                                        role="tab" aria-controls="geex-chat-content-1" aria-selected="true">

                                        <div class="geex-chat-tab-single">
                                            <div class="geex-chat-tab-single__content">
                                                <div class="geex-chat-tab-single__message">
                                                    <h4 class="geex-chat-tab-single__title">Fadiil Thoriq</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content geex-content__chat__content">
                            <div class="tab-pane fade show active" id="geex-chat-content-1" role="tabpanel"
                                aria-labelledby="geex-chat-tab-1">
                                <div class="geex-content__chat__content">
                                    <div class="geex-content__chat__header">
                                        <div class="geex-content__chat__header__content">
                                            <div class="geex-content__chat__header__text">
                                                <h4 class="geex-content__chat__header__title">Fadiil Thoriq</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="geex-content__chat__list">

                                        <div class="geex-content__chat__list__single">
                                            <div class="geex-content__chat__list__single__text">
                                                <span class="geex-content__chat__list__single__title">
                                                    Fadiil Thoriq
                                                </span>
                                                <span class="geex-content__chat__list__single__msg latest">Hi <a
                                                        href="#">@chloe</a>, I agree with that schedule. I have
                                                    accepted your meeting inviataition</span>
                                                <span>23.59 PM</span>
                                            </div>
                                        </div>

                                        <div class="geex-content__chat__list__single active">
                                            <div class="geex-content__chat__list__single__text">
                                                <span class="geex-content__chat__list__single__title">Joe
                                                    Takeshi</span>
                                                <span class="geex-content__chat__list__single__msg latest">Is everyone
                                                    ok about that schedule?</span>
                                                <span>23.59 PM</span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="geex-content__chat__send">
                                        <div class="geex-content__chat__send__input">
                                            <input placeholder="Ketikkan Pesan.." name="chat" id="chat"
                                                value="">
                                        </div>
                                        <div class="geex-content__chat__send__action">
                                            <div class="geex-content__chat__action__toggle__content">
                                                <div class="geex-content__chat__send__action__wrap">
                                                    <div class="geex-content__chat__send__action__single">
                                                        <input type="file">
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-admin-footer/>
	
</body>

</html>
