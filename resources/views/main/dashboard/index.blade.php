@extends('template.master')

@section('page-title', 'Dashboard')
@section('sub-page', 'Index')
@section('link', 'dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card welcome-banner bg-blue-800">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="p-4">
                                <h2 class="text-white">Selamat Datang pada Aplikasi Rekam Medis IGD</h2>
                                <p class="text-white">RSD Mangusada Kabupaten Badung</p>
                                {{-- <a href="https://1.envato.market/zNkqj6" class="btn btn-outline-light">Exclusive on
                                    Themeforest</a> --}}
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="img-welcome-banner"><img src="{{ asset('assets/images/logo.png') }}" alt="img"
                                    class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach (dashboardData() as $key => $item)
            <div class="col-md-6 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s bg-light-primary">
                                    <i class="{{ logos()[$key] }}"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Total {{ ucfirst($item) }}</h6>
                            </div>
                        </div>
                        <div class="bg-body p-3 mt-3 rounded">
                            <div class="mt-3 row align-items-center">
                                <div class="col-5">
                                    <i class="{{ logos()[$key] . ' fa-3x' }}"></i>
                                </div>
                                <div class="col-5">
                                    <h5 class="mb-1">{{ totalData($item) }} data</h5>
                                    {{-- <p class="text-primary mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        {{-- <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-grow-1">
                            <h5 class="mb-0">Repeat customer rate</h5>
                        </div>
                        <div class="flex-shrink-0 ms-3">
                            <div class="dropdown"><a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                                    href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ti ti-dots f-18"></i></a>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                        href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a
                                        class="dropdown-item" href="#">Monthly</a></div>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-end my-2">5.44% <span class="badge bg-success">+2.6%</span></h5>
                    <div id="customer-rate-graph" style="min-height: 315px;">
                        <div id="apexcharts7jj15527" class="apexcharts-canvas apexcharts7jj15527 apexcharts-theme-light"
                            style="width: 812px; height: 300px;"><svg id="SvgjsSvg1875" width="812" height="300"
                                xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable"
                                xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <foreignObject x="0" y="0" width="812" height="300">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 150px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect1880" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                    fill="#fefefe"></rect>
                                <g id="SvgjsG1947" class="apexcharts-yaxis" rel="0"
                                    transform="translate(9.51767635345459, 0)">
                                    <g id="SvgjsG1948" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1950"
                                            font-family="Helvetica, Arial, sans-serif" x="20" y="31.6" text-anchor="end"
                                            dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1951">90</tspan>
                                            <title>90</title>
                                        </text><text id="SvgjsText1953" font-family="Helvetica, Arial, sans-serif" x="20"
                                            y="70.43253323046366" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1954">80</tspan>
                                            <title>80</title>
                                        </text><text id="SvgjsText1956" font-family="Helvetica, Arial, sans-serif" x="20"
                                            y="109.26506646092733" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1957">70</tspan>
                                            <title>70</title>
                                        </text><text id="SvgjsText1959" font-family="Helvetica, Arial, sans-serif" x="20"
                                            y="148.097599691391" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1960">60</tspan>
                                            <title>60</title>
                                        </text><text id="SvgjsText1962" font-family="Helvetica, Arial, sans-serif" x="20"
                                            y="186.93013292185466" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1963">50</tspan>
                                            <title>50</title>
                                        </text><text id="SvgjsText1965" font-family="Helvetica, Arial, sans-serif" x="20"
                                            y="225.76266615231833" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1966">40</tspan>
                                            <title>40</title>
                                        </text><text id="SvgjsText1968" font-family="Helvetica, Arial, sans-serif" x="20"
                                            y="264.595199382782" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#373d3f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1969">30</tspan>
                                            <title>30</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1877" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(39.51767635345459, 30)">
                                    <defs id="SvgjsDefs1876">
                                        <clipPath id="gridRectMask7jj15527">
                                            <rect id="SvgjsRect1882" width="755.6124019622803"
                                                height="240.99519938278195" x="-3" y="-4" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMask7jj15527"></clipPath>
                                        <clipPath id="nonForecastMask7jj15527"></clipPath>
                                        <clipPath id="gridRectMarkerMask7jj15527">
                                            <rect id="SvgjsRect1883" width="754.6124019622803"
                                                height="236.99519938278195" x="-2" y="-2" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient1888" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1889" stop-opacity="0.5" stop-color="rgba(13,110,253,0.5)"
                                                offset="0"></stop>
                                            <stop id="SvgjsStop1890" stop-opacity="0" stop-color="rgba(255,255,255,0)"
                                                offset="1"></stop>
                                            <stop id="SvgjsStop1891" stop-opacity="0" stop-color="rgba(255,255,255,0)"
                                                offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <line id="SvgjsLine1881" x1="0" y1="0" x2="0"
                                        y2="232.99519938278195" stroke="#b6b6b6" stroke-dasharray="3"
                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                        height="232.99519938278195" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                        stroke-width="1"></line>
                                    <g id="SvgjsG1894" class="apexcharts-grid">
                                        <g id="SvgjsG1895" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1899" x1="0" y1="38.83253323046366"
                                                x2="750.6124019622803" y2="38.83253323046366" stroke="#e0e0e0"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1900" x1="0" y1="77.66506646092732"
                                                x2="750.6124019622803" y2="77.66506646092732" stroke="#e0e0e0"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1901" x1="0" y1="116.49759969139097"
                                                x2="750.6124019622803" y2="116.49759969139097" stroke="#e0e0e0"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1902" x1="0" y1="155.33013292185464"
                                                x2="750.6124019622803" y2="155.33013292185464" stroke="#e0e0e0"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1903" x1="0" y1="194.1626661523183"
                                                x2="750.6124019622803" y2="194.1626661523183" stroke="#e0e0e0"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1904" x1="0" y1="232.99519938278198"
                                                x2="750.6124019622803" y2="232.99519938278198" stroke="#e0e0e0"
                                                stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                        </g>
                                        <g id="SvgjsG1896" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1906" x1="0" y1="232.99519938278195"
                                            x2="750.6124019622803" y2="232.99519938278195" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1905" x1="0" y1="1" x2="0"
                                            y2="232.99519938278195" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1897" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1898" x1="0" y1="0" x2="750.6124019622803"
                                            y2="0" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt"
                                            class="apexcharts-gridline">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1884" class="apexcharts-area-series apexcharts-plot-series">
                                        <g id="SvgjsG1885" class="apexcharts-series" zIndex="0"
                                            seriesName="series-1" data:longestSeries="true" rel="1"
                                            data:realIndex="0">
                                            <path id="SvgjsPath1892"
                                                d="M 0 232.99519938278195 L 0 232.99519938278195C 23.883121880618006 232.99519938278195 44.35436920686202 116.497599691391 68.23749108748002 116.497599691391C 92.12061296809803 116.497599691391 112.59186029434204 194.1626661523183 136.47498217496005 194.1626661523183C 160.35810405557805 194.1626661523183 180.82935138182205 77.66506646092733 204.71247326244006 77.66506646092733C 228.59559514305806 77.66506646092733 249.0668424693021 155.33013292185464 272.9499643499201 155.33013292185464C 296.8330862305381 155.33013292185464 317.3043335567821 0 341.1874554374001 0C 365.0705773180181 0 385.54182464426214 155.33013292185464 409.4249465248801 155.33013292185464C 433.30806840549815 155.33013292185464 453.77931573174214 135.91386630662282 477.6624376123602 135.91386630662282C 501.54555949297816 135.91386630662282 522.0168068192222 174.74639953708646 545.8999286998402 174.74639953708646C 569.7830505804582 174.74639953708646 590.2542979067023 116.497599691391 614.1374197873203 116.497599691391C 638.0205416679382 116.497599691391 658.4917889941822 155.33013292185464 682.3749108748002 155.33013292185464C 706.2580327554182 155.33013292185464 726.7292800816623 97.08133307615915 750.6124019622803 97.08133307615915C 750.6124019622803 97.08133307615915 750.6124019622803 97.08133307615915 750.6124019622803 232.99519938278195M 750.6124019622803 97.08133307615915z"
                                                fill="url(#SvgjsLinearGradient1888)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMask7jj15527)"
                                                pathTo="M 0 232.99519938278195 L 0 232.99519938278195C 23.883121880618006 232.99519938278195 44.35436920686202 116.497599691391 68.23749108748002 116.497599691391C 92.12061296809803 116.497599691391 112.59186029434204 194.1626661523183 136.47498217496005 194.1626661523183C 160.35810405557805 194.1626661523183 180.82935138182205 77.66506646092733 204.71247326244006 77.66506646092733C 228.59559514305806 77.66506646092733 249.0668424693021 155.33013292185464 272.9499643499201 155.33013292185464C 296.8330862305381 155.33013292185464 317.3043335567821 0 341.1874554374001 0C 365.0705773180181 0 385.54182464426214 155.33013292185464 409.4249465248801 155.33013292185464C 433.30806840549815 155.33013292185464 453.77931573174214 135.91386630662282 477.6624376123602 135.91386630662282C 501.54555949297816 135.91386630662282 522.0168068192222 174.74639953708646 545.8999286998402 174.74639953708646C 569.7830505804582 174.74639953708646 590.2542979067023 116.497599691391 614.1374197873203 116.497599691391C 638.0205416679382 116.497599691391 658.4917889941822 155.33013292185464 682.3749108748002 155.33013292185464C 706.2580327554182 155.33013292185464 726.7292800816623 97.08133307615915 750.6124019622803 97.08133307615915C 750.6124019622803 97.08133307615915 750.6124019622803 97.08133307615915 750.6124019622803 232.99519938278195M 750.6124019622803 97.08133307615915z"
                                                pathFrom="M -1 349.4927990741729 L -1 349.4927990741729 L 68.23749108748002 349.4927990741729 L 136.47498217496005 349.4927990741729 L 204.71247326244006 349.4927990741729 L 272.9499643499201 349.4927990741729 L 341.1874554374001 349.4927990741729 L 409.4249465248801 349.4927990741729 L 477.6624376123602 349.4927990741729 L 545.8999286998402 349.4927990741729 L 614.1374197873203 349.4927990741729 L 682.3749108748002 349.4927990741729 L 750.6124019622803 349.4927990741729">
                                            </path>
                                            <path id="SvgjsPath1893"
                                                d="M 0 232.99519938278195C 23.883121880618006 232.99519938278195 44.35436920686202 116.497599691391 68.23749108748002 116.497599691391C 92.12061296809803 116.497599691391 112.59186029434204 194.1626661523183 136.47498217496005 194.1626661523183C 160.35810405557805 194.1626661523183 180.82935138182205 77.66506646092733 204.71247326244006 77.66506646092733C 228.59559514305806 77.66506646092733 249.0668424693021 155.33013292185464 272.9499643499201 155.33013292185464C 296.8330862305381 155.33013292185464 317.3043335567821 0 341.1874554374001 0C 365.0705773180181 0 385.54182464426214 155.33013292185464 409.4249465248801 155.33013292185464C 433.30806840549815 155.33013292185464 453.77931573174214 135.91386630662282 477.6624376123602 135.91386630662282C 501.54555949297816 135.91386630662282 522.0168068192222 174.74639953708646 545.8999286998402 174.74639953708646C 569.7830505804582 174.74639953708646 590.2542979067023 116.497599691391 614.1374197873203 116.497599691391C 638.0205416679382 116.497599691391 658.4917889941822 155.33013292185464 682.3749108748002 155.33013292185464C 706.2580327554182 155.33013292185464 726.7292800816623 97.08133307615915 750.6124019622803 97.08133307615915"
                                                fill="none" fill-opacity="1" stroke="#0d6efd" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="1" stroke-dasharray="0"
                                                class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMask7jj15527)"
                                                pathTo="M 0 232.99519938278195C 23.883121880618006 232.99519938278195 44.35436920686202 116.497599691391 68.23749108748002 116.497599691391C 92.12061296809803 116.497599691391 112.59186029434204 194.1626661523183 136.47498217496005 194.1626661523183C 160.35810405557805 194.1626661523183 180.82935138182205 77.66506646092733 204.71247326244006 77.66506646092733C 228.59559514305806 77.66506646092733 249.0668424693021 155.33013292185464 272.9499643499201 155.33013292185464C 296.8330862305381 155.33013292185464 317.3043335567821 0 341.1874554374001 0C 365.0705773180181 0 385.54182464426214 155.33013292185464 409.4249465248801 155.33013292185464C 433.30806840549815 155.33013292185464 453.77931573174214 135.91386630662282 477.6624376123602 135.91386630662282C 501.54555949297816 135.91386630662282 522.0168068192222 174.74639953708646 545.8999286998402 174.74639953708646C 569.7830505804582 174.74639953708646 590.2542979067023 116.497599691391 614.1374197873203 116.497599691391C 638.0205416679382 116.497599691391 658.4917889941822 155.33013292185464 682.3749108748002 155.33013292185464C 706.2580327554182 155.33013292185464 726.7292800816623 97.08133307615915 750.6124019622803 97.08133307615915"
                                                pathFrom="M -1 349.4927990741729 L -1 349.4927990741729 L 68.23749108748002 349.4927990741729 L 136.47498217496005 349.4927990741729 L 204.71247326244006 349.4927990741729 L 272.9499643499201 349.4927990741729 L 341.1874554374001 349.4927990741729 L 409.4249465248801 349.4927990741729 L 477.6624376123602 349.4927990741729 L 545.8999286998402 349.4927990741729 L 614.1374197873203 349.4927990741729 L 682.3749108748002 349.4927990741729 L 750.6124019622803 349.4927990741729"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1886"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realIndex="0">
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1973" r="0" cx="0" cy="0"
                                                        class="apexcharts-marker ws5ok73ptk no-pointer-events"
                                                        stroke="#ffffff" fill="#0d6efd" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" default-marker-size="0">
                                                    </circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1887" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine1907" x1="0" y1="0" x2="750.6124019622803"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1908" x1="0" y1="0" x2="750.6124019622803"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1909" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1910" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                            <text id="SvgjsText1912" font-family="Helvetica, Arial, sans-serif" x="0"
                                                y="261.99519938278195" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1913">Jan</tspan>
                                                <title>Jan</title>
                                            </text><text id="SvgjsText1915" font-family="Helvetica, Arial, sans-serif"
                                                x="68.23749108748004" y="261.99519938278195" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1916">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText1918" font-family="Helvetica, Arial, sans-serif"
                                                x="136.47498217496005" y="261.99519938278195" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1919">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText1921" font-family="Helvetica, Arial, sans-serif"
                                                x="204.71247326244006" y="261.99519938278195" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1922">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1924" font-family="Helvetica, Arial, sans-serif"
                                                x="272.94996434992004" y="261.99519938278195" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1925">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText1927" font-family="Helvetica, Arial, sans-serif"
                                                x="341.18745543740005" y="261.99519938278195" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1928">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText1930" font-family="Helvetica, Arial, sans-serif"
                                                x="409.42494652488006" y="261.99519938278195" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1931">Jul</tspan>
                                                <title>Jul</title>
                                            </text><text id="SvgjsText1933" font-family="Helvetica, Arial, sans-serif"
                                                x="477.66243761236007" y="261.99519938278195" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1934">Aug</tspan>
                                                <title>Aug</title>
                                            </text><text id="SvgjsText1936" font-family="Helvetica, Arial, sans-serif"
                                                x="545.8999286998401" y="261.99519938278195" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1937">Sep</tspan>
                                                <title>Sep</title>
                                            </text><text id="SvgjsText1939" font-family="Helvetica, Arial, sans-serif"
                                                x="614.1374197873201" y="261.99519938278195" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1940">Oct</tspan>
                                                <title>Oct</title>
                                            </text><text id="SvgjsText1942" font-family="Helvetica, Arial, sans-serif"
                                                x="682.3749108748002" y="261.99519938278195" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1943">Nov</tspan>
                                                <title>Nov</title>
                                            </text><text id="SvgjsText1945" font-family="Helvetica, Arial, sans-serif"
                                                x="750.6124019622803" y="261.99519938278195" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1946">Dec</tspan>
                                                <title>Dec</title>
                                            </text>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1970" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1971" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1972" class="apexcharts-point-annotations"></g>
                                    <rect id="SvgjsRect1974" width="0" height="0" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                        stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect1975" width="0" height="0" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                        stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(13, 110, 253);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                <div class="apexcharts-xaxistooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Project - Able Pro</h5>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <p class="mb-2">Release v1.2.0<span class="float-end">70%</span></p>
                        <div class="progress progress-primary" style="height: 8px">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="d-grid gap-2"><a href="#" class="btn btn-link-secondary">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><span class="p-1 d-block bg-warning rounded-circle"><span
                                            class="visually-hidden">New alerts</span></span></div>
                                <div class="flex-grow-1 mx-2">
                                    <p class="mb-0 d-grid text-start"><span class="text-truncate w-100">Horizontal
                                            Layout</span></p>
                                </div>
                                <div class="badge bg-light-secondary f-12"><i class="ti ti-paperclip text-sm"></i> 2
                                </div>
                            </div>
                        </a><a href="#" class="btn btn-link-secondary">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><span class="p-1 d-block bg-warning rounded-circle"><span
                                            class="visually-hidden">New alerts</span></span></div>
                                <div class="flex-grow-1 mx-2">
                                    <p class="mb-0 d-grid text-start"><span class="text-truncate w-100">Invoice
                                            Generator</span></p>
                                </div>
                            </div>
                        </a><a href="#" class="btn btn-link-secondary">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><span class="p-1 d-block bg-warning rounded-circle"><span
                                            class="visually-hidden">New alerts</span></span></div>
                                <div class="flex-grow-1 mx-2">
                                    <p class="mb-0 d-grid text-start"><span class="text-truncate w-100">Package
                                            Upgrades</span></p>
                                </div>
                            </div>
                        </a><a href="#" class="btn btn-link-secondary">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0"><span class="p-1 d-block bg-success rounded-circle"><span
                                            class="visually-hidden">New alerts</span></span></div>
                                <div class="flex-grow-1 mx-2">
                                    <p class="mb-0 d-grid text-start"><span class="text-truncate w-100">Figma Auto
                                            Layout</span></p>
                                </div>
                            </div>
                        </a></div>
                    <div class="d-grid mt-3"><button
                            class="btn btn-primary d-flex align-items-center justify-content-center gap-2"><i
                                class="ti ti-plus"></i> Add task</button></div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
