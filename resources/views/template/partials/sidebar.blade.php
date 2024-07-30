<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar pc-trigger">
    <div class="navbar-wrapper" style="display: block;">
        <div class="m-header text-center">
            <a href="{{ route('dashboard.index') }}" class="b-brand text-primary"><img
                    src="{{ asset('assets/images/logo.png') }}" class="img-fluid logo-lg"
                    style="width: 100px !important; height: 100px !important;" alt="logo">
                <span class="badge bg-light-success rounded-pill ms-2 theme-version">RSD Mangusada</span>
                {{-- <span>RS. Mangusada Badung</span> --}}
            </a>
        </div>
        {{-- <div class="m-header">
            <a href="../dashboard/index.html" class="b-brand text-primary">
                <img src="../assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo"> <span
                    class="badge bg-light-success rounded-pill ms-2 theme-version">v9.4.1</span></a>
        </div> --}}
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
                                                <h6 class="mb-0">{{ ucfirst(auth()->user()->username) }}</h6>
                                                <small>{{ ucfirst(auth()->user()->level) }}</small>
                                            </div><a class="btn btn-icon btn-link-secondary avtar"
                                                data-bs-toggle="collapse" href="#pc_sidebar_userlink"><svg
                                                    class="pc-icon">
                                                    <use xlink:href="#custom-sort-outline"></use>
                                                </svg></a>
                                        </div>
                                        <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                                            <div class="pt-3">
                                                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                    href="{{ route('logout') }}">
                                                    <i class="ti ti-power"></i>
                                                    <span>Logout</span>
                                                </a>
                                                {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form> --}}
                                            </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <ul class="pc-navbar" style="display: block;">
                                    <li class="pc-item {{ Request::is('/') ? 'active' : '' }}">
                                        <a href="{{ route('dashboard.index') }}" class="pc-link">
                                            <span class="pc-micon"><i class="fa-light fa-house-user"></i> </span><span
                                                class="pc-mtext">Dashboard</span></a>
                                    </li>
                                    @can('kepalarm')
                                        <li class="pc-item {{ Request::is('/pengguna') ? 'active' : '' }}">
                                            <a href="{{ route('pengguna.index') }}" class="pc-link">
                                                <span class="pc-micon"><i class="fa-thin fa-users"></i></i>
                                                </span><span class="pc-mtext">Pegguna</span></a>
                                        </li>
                                    @endcan
                                    <li class="pc-item {{ Request::is('/dokter') ? 'active' : '' }}">
                                        <a href="{{ route('dokter.index') }}" class="pc-link">
                                            <span class="pc-micon"><i class="fa-thin fa-user-doctor-hair"></i></i>
                                            </span><span class="pc-mtext">Dokter</span></a>
                                    </li>
                                    <li class="pc-item {{ Request::is('/pasien') ? 'active' : '' }}">
                                        <a href="{{ route('pasien.index') }}" class="pc-link">
                                            <span class="pc-micon">
                                                <i class="fa-sharp fa-thin fa-users-medical"></i>
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
