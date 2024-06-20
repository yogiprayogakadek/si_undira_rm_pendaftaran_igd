@extends('template.master')

@section('page-title', 'Dokumen')
@section('link', 'dokumen')
@section('sub-page', 'Home')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/datepicker-bs5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/flatpickr.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
@endpush

@section('content')
    <div class="row render">
        {{-- render data --}}
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/js/plugins/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datepicker-full.min.js') }}"></script>
    <script src="{{ asset('assets/functions/dokumen/script.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wizard.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/flatpickr.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script>
        @if (session('status'))
            Swal.fire(
                "{{ session('title') }}",
                "{{ session('message') }}",
                "{{ session('status') }}",
            );
        @endif
    </script>
@endpush
