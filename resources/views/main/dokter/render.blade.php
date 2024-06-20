<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Daftar Dokter</h5>
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
                            <th>No</th>
                            <th>Nama</th>
                            <th>SIP (Surat Izin Praktik)</th>
                            <th>Tempat/Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>No. Telepon</th>
                            <td>TTD</td>
                            @can('staff')
                                <th>Aksi</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dokter as $dokter)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dokter->nama }}</td>
                                <td>{{ $dokter->sip }}</td>
                                <td>{{ $dokter->tempat_lahir }},
                                    {{ date_format(date_create($dokter->tanggal_lahir), 'd M Y') }}
                                </td>
                                <td>{{ $dokter->alamat }}</td>
                                <td>{{ $dokter->jenis_kelamin }}</td>
                                <td>{{ $dokter->nomor_telp }}</td>
                                <td>
                                    {{-- <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate('Make me into an QrCode!')) !!} "> --}}
                                    {{ qrGenerator($dokter->nama, $dokter->sip) }}
                                </td>
                                @can('staff')
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="button groups">
                                            <button type="button" class="btn btn-light-success btn-edit"
                                                data-id="{{ $dokter->id }}">
                                                <i class="fa-duotone fa-pencil"></i>
                                            </button>
                                            <button type="button" class="btn btn-light-danger btn-delete"
                                                data-id="{{ $dokter->id }}">
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
