@extends('template.master')

@section('page-title', 'Dokter')
@section('sub-page', 'Home')
@section('link', 'dokter')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/datepicker-bs5.min.css') }}">
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
    <script src="{{ asset('assets/functions/dokter/script.js') }}"></script>
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
