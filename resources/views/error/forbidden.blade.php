<html>
@include('template.partials.head')

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme_contrast="false" data-pc-theme="false">

    <div class="maintenance-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card error-card">
                        <div class="card-body">
                            <div class="error-image-block"><img class="img-fluid"
                                    src="https://ableproadmin.com/assets/images/pages/img-error-404.svg" alt="img">
                            </div>
                            <div class="text-center">
                                <h1 class="mt-5"><b>Halaman tidak ditemukan</b></h1>
                                {{-- <p class="mt-2 mb-4 text-muted">Halaman yang Anda cari telah dipindahkan,
                                    dihapus,<br>diganti namanya, atau mungkin tidak akan pernah ada!</p> --}}
                                <a href="{{ route('dashboard.index') }}" class="btn btn-primary mb-3">Ke Halaman
                                    Utama</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
