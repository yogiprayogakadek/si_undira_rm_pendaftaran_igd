<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Daftar Pasien</h5>
                @can('staff')
                    <button type="button" class="btn btn-shadow btn-primary btn-tambah">
                        <svg class="pc-icon">
                            <use xlink:href="#custom-add-outline"></use>
                        </svg>Tambah Data
                    </button>
                @endcan
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive dt-responsive">
                <table class="table table-striped table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">No. Rekam Medis</th>
                            <th rowspan="2">NIK</th>
                            <th rowspan="2">Nama</th>
                            <th colspan="4" class="text-center">Dokumen</th>
                            @can('staff')
                                <th rowspan="2">Aksi</th>
                            @endcan
                        </tr>
                        <tr>
                            <th>Triase</th>
                            <th>Asesmen</th>
                            <th>Catatan Edukasi</th>
                            <th>Ringkasan Kondisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pasien as $pasien)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pasien->nomor_rm }}</td>
                                <td>{{ $pasien->nik }}</td>
                                <td>{{ $pasien->nama }}</td>
                                <td class="text-center">
                                    <a href="{{ $pasien->triase->dokumen }}" target="_blank">Lihat</a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ $pasien->asesmen->dokumen }}" target="_blank">Lihat</a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ $pasien->catatanEdukasi->dokumen }}" target="_blank">Lihat</a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ $pasien->ringkasanKondisi->dokumen }}" target="_blank">Lihat</a>
                                </td>
                                @can('staff')
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="button groups">
                                            <button type="button" class="btn btn-light-success btn-edit"
                                                data-id="{{ $pasien->id }}">
                                                <i class="fa-duotone fa-pencil"></i>
                                            </button>
                                            <button type="button" class="btn btn-light-danger btn-delete"
                                                data-id="{{ $pasien->id }}">
                                                <i class="fa-duotone fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    var table = $('#table').DataTable();
</script>
