<!-- Modal -->
<div class="modal fade" id="change-password-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Kata Sandi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formChangePassword">
                    <div class="form-group current_password mb-3">
                        <label class="form-label" for="current_password">Password Sekarang</label>
                        <input type="password" name="current_password" class="form-control current_password"
                            id="current_password" placeholder="masukkan password sekarang">
                        <div class="invalid-feedback error-current_password"></div>
                    </div>
                    <div class="form-group new_password mb-3">
                        <label class="form-label" for="new_password">Password Baru</label>
                        <input type="password" name="new_password" class="form-control new_password" id="new_password"
                            placeholder="masukkan password baru">
                        <div class="invalid-feedback error-new_password"></div>
                    </div>
                    <div class="form-group confirm_password">
                        <label class="form-label" for="confirm_password">Konfirmasi Password</label>
                        <input type="password" name="confirm_password" class="form-control confirm_password"
                            id="confirm_password" placeholder="masukkan ulang password">
                        <div class="invalid-feedback error-confirm_password"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-outline btn-change-password mr-15">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- [ Header Topbar ] start -->
<header class="pc-header">
    <div class="header-wrapper"><!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled"><!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse"><a href="#" class="pc-head-link ms-0"
                        id="sidebar-hide"><i class="ti ti-menu-2"></i></a></li>
                <li class="pc-h-item pc-sidebar-popup"><a href="#" class="pc-head-link ms-0"
                        id="mobile-collapse"><i class="ti ti-menu-2"></i></a></li>
            </ul>
        </div><!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">
                {{-- <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                        aria-expanded="false"><svg class="pc-icon">
                            <use xlink:href="#custom-sun-1"></use>
                        </svg></a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown"><a href="#!" class="dropdown-item"
                            onclick="layout_change('dark')"><svg class="pc-icon">
                                <use xlink:href="#custom-moon"></use>
                            </svg> <span>Dark</span> </a><a href="#!" class="dropdown-item"
                            onclick="layout_change('light')"><svg class="pc-icon">
                                <use xlink:href="#custom-sun-1"></use>
                            </svg> <span>Light</span> </a>
                    </div>
                </li> --}}
                <li class="dropdown pc-h-item header-user-profile"><a
                        class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false"><img
                            src="https://ableproadmin.com/assets/images/user/avatar-2.jpg" alt="user-image"
                            class="user-avtar"></a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                style="max-height: calc(100vh - 225px)" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <div class="d-flex mb-1">
                                                        <div class="flex-shrink-0"><img
                                                                src="https://ableproadmin.com/assets/images/user/avatar-2.jpg"
                                                                alt="user-image" class="user-avtar wid-35">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-1">{{ ucfirst(auth()->user()->username) }}
                                                                🖖</h6>
                                                            <span>{{ ucfirst(auth()->user()->nama) }}</span>
                                                        </div>
                                                    </div>
                                                    <hr class="border-secondary border-opacity-50">
                                                    <p class="text-span">Manage</p>
                                                    <a href="javascript:void(0)"
                                                        class="change-password dropdown-item"><span><svg
                                                                class="pc-icon text-muted me-2">
                                                                <use xlink:href="#custom-lock-outline"></use>
                                                            </svg> <span>Ganti Password</span></span></a>
                                                    <hr class="border-secondary border-opacity-50">
                                                    <div class="d-grid mb-3">
                                                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                            href="{{ route('logout') }}">
                                                            <button class="btn btn-primary">
                                                                <svg class="pc-icon me-2">
                                                                    <use xlink:href="#custom-logout-1-outline"></use>
                                                                </svg>Logout
                                                            </button>
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
