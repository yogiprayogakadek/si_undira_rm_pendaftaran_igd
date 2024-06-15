<div class="pct-c-btn"><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout"><i
            class="ph-duotone ph-gear-six"></i></a></div>
<div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Settings</h5><button type="button" class="btn btn-icon btn-link-danger ms-auto"
            data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x"></i></button>
    </div>
    <div class="pct-body customizer-body simplebar-scrollable-y" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <div class="offcanvas-body py-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="pc-dark">
                                            <h6 class="mb-1">Theme Mode</h6>
                                            <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                                            <div class="row theme-color theme-layout">
                                                <div class="col-4">
                                                    <div class="d-grid"><button class="preset-btn btn active"
                                                            data-value="true" onclick="layout_change('light');"
                                                            data-bs-toggle="tooltip" aria-label="Light"
                                                            data-bs-original-title="Light"><svg
                                                                class="pc-icon text-warning">
                                                                <use xlink:href="#custom-sun-1"></use>
                                                            </svg></button></div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="d-grid"><button class="preset-btn btn"
                                                            data-value="false" onclick="layout_change('dark');"
                                                            data-bs-toggle="tooltip" aria-label="Dark"
                                                            data-bs-original-title="Dark"><svg class="pc-icon">
                                                                <use xlink:href="#custom-moon"></use>
                                                            </svg></button></div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="d-grid"><button class="preset-btn btn"
                                                            data-value="default" onclick="layout_change_default();"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Automatically sets the theme based on user's operating system's color scheme."
                                                            data-bs-original-title="Automatically sets the theme based on user's operating system's color scheme."><span
                                                                class="pc-lay-icon d-flex align-items-center justify-content-center"><i
                                                                    class="ph-duotone ph-cpu"></i></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <h6 class="mb-1">Theme Contrast</h6>
                                        <p class="text-muted text-sm">Choose theme contrast</p>
                                        <div class="row theme-contrast">
                                            <div class="col-6">
                                                <div class="d-grid"><button class="preset-btn btn" data-value="true"
                                                        onclick="layout_theme_contrast_change('true');"
                                                        data-bs-toggle="tooltip" aria-label="True"
                                                        data-bs-original-title="True"><svg class="pc-icon">
                                                            <use xlink:href="#custom-mask"></use>
                                                        </svg></button></div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-grid"><button class="preset-btn btn active"
                                                        data-value="false"
                                                        onclick="layout_theme_contrast_change('false');"
                                                        data-bs-toggle="tooltip" aria-label="False"
                                                        data-bs-original-title="False"><svg class="pc-icon">
                                                            <use xlink:href="#custom-mask-1-outline"></use>
                                                        </svg></button></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <h6 class="mb-1">Custom Theme</h6>
                                        <p class="text-muted text-sm">Choose your primary theme color</p>
                                        <div class="theme-color preset-color"><a href="#!" data-bs-toggle="tooltip"
                                                class="active" data-value="preset-1" aria-label="Blue"
                                                data-bs-original-title="Blue"><i class="ti ti-checks"></i></a> <a
                                                href="#!" data-bs-toggle="tooltip" data-value="preset-2"
                                                aria-label="Indigo" data-bs-original-title="Indigo"><i
                                                    class="ti ti-checks"></i></a> <a href="#!"
                                                data-bs-toggle="tooltip" data-value="preset-3" aria-label="Purple"
                                                data-bs-original-title="Purple"><i class="ti ti-checks"></i></a> <a
                                                href="#!" data-bs-toggle="tooltip" data-value="preset-4"
                                                aria-label="Pink" data-bs-original-title="Pink"><i
                                                    class="ti ti-checks"></i></a> <a href="#!"
                                                data-bs-toggle="tooltip" data-value="preset-5" aria-label="Red"
                                                data-bs-original-title="Red"><i class="ti ti-checks"></i></a> <a
                                                href="#!" data-bs-toggle="tooltip" data-value="preset-6"
                                                aria-label="Orange" data-bs-original-title="Orange"><i
                                                    class="ti ti-checks"></i></a> <a href="#!"
                                                data-bs-toggle="tooltip" data-value="preset-7" aria-label="Yellow"
                                                data-bs-original-title="Yellow"><i class="ti ti-checks"></i></a> <a
                                                href="#!" data-bs-toggle="tooltip" data-value="preset-8"
                                                aria-label="Green" data-bs-original-title="Green"><i
                                                    class="ti ti-checks"></i></a> <a href="#!"
                                                data-bs-toggle="tooltip" data-value="preset-9" aria-label="Teal"
                                                data-bs-original-title="Teal"><i class="ti ti-checks"></i></a> <a
                                                href="#!" data-bs-toggle="tooltip" data-value="preset-10"
                                                aria-label="Cyan" data-bs-original-title="Cyan"><i
                                                    class="ti ti-checks"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <h6 class="mb-1">Theme layout</h6>
                                        <p class="text-muted text-sm">Choose your layout</p>
                                        <div class="theme-main-layout d-flex align-center gap-1 w-100"><a
                                                href="#!" data-bs-toggle="tooltip" class="active"
                                                data-value="vertical" aria-label="Vertical"
                                                data-bs-original-title="Vertical"><img
                                                    src="https://ableproadmin.com/assets/images/customizer/caption-on.svg"
                                                    alt="img" class="img-fluid"> </a><a href="#!"
                                                data-bs-toggle="tooltip" data-value="horizontal"
                                                aria-label="Horizontal" data-bs-original-title="Horizontal"><img
                                                    src="https://ableproadmin.com/assets/images/customizer/horizontal.svg"
                                                    alt="img" class="img-fluid"> </a><a href="#!"
                                                data-bs-toggle="tooltip" data-value="color-header"
                                                aria-label="Color Header" data-bs-original-title="Color Header"><img
                                                    src="https://ableproadmin.com/assets/images/customizer/color-header.svg"
                                                    alt="img" class="img-fluid"> </a><a href="#!"
                                                data-bs-toggle="tooltip" data-value="compact" aria-label="Compact"
                                                data-bs-original-title="Compact"><img
                                                    src="https://ableproadmin.com/assets/images/customizer/compact.svg"
                                                    alt="img" class="img-fluid"> </a><a href="#!"
                                                data-bs-toggle="tooltip" data-value="tab" aria-label="Tab"
                                                data-bs-original-title="Tab"><img
                                                    src="https://ableproadmin.com/assets/images/customizer/tab.svg"
                                                    alt="img" class="img-fluid"></a></div>
                                    </li>
                                    <li class="list-group-item">
                                        <h6 class="mb-1">Sidebar Caption</h6>
                                        <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                                        <div class="row theme-color theme-nav-caption">
                                            <div class="col-6">
                                                <div class="d-grid"><button class="preset-btn btn-img btn active"
                                                        data-value="true" onclick="layout_caption_change('true');"
                                                        data-bs-toggle="tooltip" aria-label="Caption Show"
                                                        data-bs-original-title="Caption Show"><img
                                                            src="https://ableproadmin.com/assets/images/customizer/caption-on.svg"
                                                            alt="img" class="img-fluid"></button></div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-grid"><button class="preset-btn btn-img btn"
                                                        data-value="false" onclick="layout_caption_change('false');"
                                                        data-bs-toggle="tooltip" aria-label="Caption Hide"
                                                        data-bs-original-title="Caption Hide"><img
                                                            src="https://ableproadmin.com/assets/images/customizer/caption-off.svg"
                                                            alt="img" class="img-fluid"></button></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pc-rtl">
                                            <h6 class="mb-1">Theme Layout</h6>
                                            <p class="text-muted text-sm">LTR/RTL</p>
                                            <div class="row theme-color theme-direction">
                                                <div class="col-6">
                                                    <div class="d-grid"><button class="preset-btn btn-img btn active"
                                                            data-value="false" onclick="layout_rtl_change('false');"
                                                            data-bs-toggle="tooltip" aria-label="LTR"
                                                            data-bs-original-title="LTR"><img
                                                                src="https://ableproadmin.com/assets/images/customizer/ltr.svg"
                                                                alt="img" class="img-fluid"></button></div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="d-grid"><button class="preset-btn btn-img btn"
                                                            data-value="true" onclick="layout_rtl_change('true');"
                                                            data-bs-toggle="tooltip" aria-label="RTL"
                                                            data-bs-original-title="RTL"><img
                                                                src="https://ableproadmin.com/assets/images/customizer/rtl.svg"
                                                                alt="img" class="img-fluid"></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item pc-box-width">
                                        <div class="pc-container-width">
                                            <h6 class="mb-1">Layout Width</h6>
                                            <p class="text-muted text-sm">Choose Full or Container Layout</p>
                                            <div class="row theme-color theme-container">
                                                <div class="col-6">
                                                    <div class="d-grid"><button class="preset-btn btn-img btn active"
                                                            data-value="false" onclick="change_box_container('false')"
                                                            data-bs-toggle="tooltip" aria-label="Full Width"
                                                            data-bs-original-title="Full Width"><img
                                                                src="https://ableproadmin.com/assets/images/customizer/full.svg"
                                                                alt="img" class="img-fluid"></button></div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="d-grid"><button class="preset-btn btn-img btn"
                                                            data-value="true" onclick="change_box_container('true')"
                                                            data-bs-toggle="tooltip" aria-label="Fixed Width"
                                                            data-bs-original-title="Fixed Width"><img
                                                                src="https://ableproadmin.com/assets/images/customizer/fixed.svg"
                                                                alt="img" class="img-fluid"></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-grid"><button class="btn btn-light-danger"
                                                id="layoutreset">Reset Layout</button></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: 320px; height: 1207px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 37px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </div>
</div>
