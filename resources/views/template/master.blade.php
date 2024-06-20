<html>
@include('template.partials.head')

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme_contrast="false" data-pc-theme="false">
    <!-- [ Pre-loader ] start --><!-- [ Pre-loader ] End -->
    @include('template.partials.sidebar')

    @include('template.partials.header')

    <div class="pc-container">
        <div class="pc-content"><!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="@yield('link')">@yield('page-title')</a></li>
                                <li class="breadcrumb-item" aria-current="page">@yield('sub-page')</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
            @yield('content')
        </div>
    </div><!-- [ Main Content ] end -->

    @include('template.partials.footer')
    @include('template.partials.script')
    {{-- @include('template.partials.svg') --}}
    <script>
        layout_change('false');
    </script>
    <script>
        layout_theme_contrast_change('false');
    </script>
    <script>
        change_box_container('false');
    </script>
    <script>
        layout_caption_change('true');
    </script>
    <script>
        layout_rtl_change('false');
    </script>
    <script>
        preset_change('preset-1');
    </script>
    <script>
        main_layout_change('vertical');
    </script>
    {{-- @include('template.partials.template-setting') --}}
</body>

</html>
