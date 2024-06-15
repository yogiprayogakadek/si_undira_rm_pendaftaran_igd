<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar pc-trigger">
    <div class="navbar-wrapper" style="display: block;">
        <div class="m-header text-center">
            <a href="{{ route('dashboard.index') }}" class="b-brand text-primary"><img
                    src="{{ asset('assets/images/logo.png') }}" class="img-fluid logo-lg"
                    style="width: 100px !important; height: 100px !important;" alt="logo">
                {{-- <span>RS. Mangusada Badung</span> --}}
            </a>
        </div>
        <div class="navbar-content pc-trigger active simplebar-scrollable-y" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: -10px 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 10px 0px;">
                                <div class="card pc-user-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0"><img
                                                    src="https://ableproadmin.com/assets/images/user/avatar-1.jpg"
                                                    alt="user-image" class="user-avtar wid-45 rounded-circle"></div>
                                            <div class="flex-grow-1 ms-3 me-2">
                                                <h6 class="mb-0">Jonh Smith</h6><small>Administrator</small>
                                            </div><a class="btn btn-icon btn-link-secondary avtar"
                                                data-bs-toggle="collapse" href="#pc_sidebar_userlink"><svg
                                                    class="pc-icon">
                                                    <use xlink:href="#custom-sort-outline"></use>
                                                </svg></a>
                                        </div>
                                        <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                                            <div class="pt-3"><a href="#!"><i class="ti ti-user"></i>
                                                    <span>My Account</span> </a><a href="#!"><i
                                                        class="ti ti-settings"></i> <span>Settings</span> </a><a
                                                    href="#!"><i class="ti ti-lock"></i> <span>Lock
                                                        Screen</span> </a><a href="#!"><i class="ti ti-power"></i>
                                                    <span>Logout</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="pc-navbar" style="display: block;">
                                    <li class="pc-item {{ Request::is('/') ? 'active' : '' }}">
                                        <a href="{{ route('dashboard.index') }}" class="pc-link">
                                            <span class="pc-micon"><i class="fa-light fa-house-user"></i> </span><span
                                                class="pc-mtext">Dashboard</span></a>
                                    </li>
                                    <li class="pc-item {{ Request::is('/dokter') ? 'active' : '' }}">
                                        <a href="{{ route('dokter.index') }}" class="pc-link">
                                            <span class="pc-micon"><i class="fa-solid fa-user-doctor-hair-long"></i>
                                            </span><span class="pc-mtext">Dokter</span></a>
                                    </li>
                                    <li class="pc-item {{ Request::is('/pasien') ? 'active' : '' }}">
                                        <a href="{{ route('pasien.index') }}" class="pc-link">
                                            <span class="pc-micon">
                                                <i class="fa-regular fa-users-medical"></i>
                                            </span><span class="pc-mtext">Pasien</span></a>
                                    </li>
                                    <li class="pc-item {{ Request::is('/dokumen') ? 'active' : '' }}">
                                        <a href="{{ route('dokumen.index') }}" class="pc-link">
                                            <span class="pc-micon">
                                                <i class="fa-thin fa-folder"></i>
                                            </span><span class="pc-mtext">Dokumen</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 280px; height: 2690px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
    </div>
</nav><!-- [ Sidebar Menu ] end -->
