<div class="col-sm-12" id="basicwizard">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0 pasien-title">Ubah Dokumen Pasein</h5>
                <button type="button" class="btn btn-shadow btn-primary btn-data">
                    <i class="fa-regular fa-hand-back-point-left"></i> List Data
                </button>
            </div>
        </div>
        <div class="card-body p-3">
            <ul class="nav nav-pills nav-justified" role="tablist">
                {{-- Data Pasien --}}
                <li class="nav-item" data-target-form="#pasienDetailForm" role="presentation">
                    <a href="#pasienDetail" data-bs-toggle="tab" data-toggle="tab" class="nav-link active"
                        aria-selected="true" role="tab">
                        <i class="ph-duotone ph-user-circle"></i> <span class="d-none d-sm-inline">Data
                            Pasien</span>
                    </a>
                </li>
                <!-- end -->

                {{-- Data Dokter --}}
                <li class="nav-item" data-target-form="#dokterDetailForm" role="presentation">
                    <a href="#dokterDetail" data-bs-toggle="tab" data-toggle="tab" class="nav-link" aria-selected="true"
                        role="tab">
                        <i class="ph-duotone ph-user-circle"></i> <span class="d-none d-sm-inline">Data
                            Dokter</span>
                    </a>
                </li>
                <!-- end -->

                {{-- Triase --}}
                <li class="nav-item nav-triase" data-target-form="#triaseForm" role="presentation">
                    <a href="#triase" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn"
                        aria-selected="false" role="tab" tabindex="-1">
                        <i class="ph-duotone ph-map-pin"></i> <span class="d-none d-sm-inline">Triase</span>
                    </a>
                </li>
                <!-- end -->

                {{-- Asesmen --}}
                <li class="nav-item nav-asesmen" data-target-form="#asesmenForm" role="presentation">
                    <a href="#asesmen" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn"
                        aria-selected="false" role="tab" tabindex="-1">
                        <i class="ph-duotone ph-graduation-cap"></i>
                        <span class="d-none d-sm-inline">Asesmen</span>
                    </a>
                </li>
                <!-- end -->

                {{-- Catatan Edukasi --}}
                <li class="nav-item nav-edukasi" data-target-form="#catatanEdukasiForm" role="presentation">
                    <a href="#catatanEdukasi" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn"
                        aria-selected="false" role="tab" tabindex="-1">
                        <i class="ph-duotone ph-check-circle"></i>
                        <span class="d-none d-sm-inline">Catatan Edukasi</span>
                    </a>
                </li>
                <!-- end -->

                {{-- Ringkasan --}}
                <li class="nav-item nav-ringkasan" data-target-form="#ringkasanKondisiForm" role="presentation">
                    <a href="#ringkasanKondisi" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn"
                        aria-selected="false" role="tab" tabindex="-1">
                        <i class="ph-duotone ph-check-circle"></i>
                        <span class="d-none d-sm-inline">Ringkasan Kondisi</span>
                    </a>
                </li>
                <!-- end -->

                {{-- File Scan --}}
                <li class="nav-item" data-target-form="#fileScanForm" role="presentation">
                    <a href="#fileScan" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn"
                        aria-selected="false" role="tab" tabindex="-1">
                        <i class="ph-duotone ph-check-circle"></i>
                        <span class="d-none d-sm-inline">File Scan</span>
                    </a>
                </li>
                <!-- end -->
            </ul>
        </div>
    </div>

    <form id="formUpdate">
        <div class="card">
            <div class="card-body">
                <div class="tab-content"><!-- START: Define your progress bar here -->
                    <div id="bar" class="progress mb-3" style="height: 7px">
                        <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"
                            style="width: 25%;"></div>
                    </div>
                    <!-- END: Define your progress bar here -->

                    {{-- <form id="formAdd"> --}}
                    <!-- START: PASIEN -->
                    <div class="tab-pane active show" id="pasienDetail" role="tabpanel">
                        <div class="row mt-4">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="nama">Nama</label>
                                    <input type="hidden" name="pasien_id_hidden"
                                        class="form-control pasien_id_hidden" value="{{ $data->id }}">
                                    <select name="pasien_id" id="pasien_id" class="form-control pasien_id" disabled>
                                        @foreach ($pasien as $key => $item)
                                            <option value="{{ $key }}"
                                                {{ $key == $data->id ? 'selected' : '' }}>{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 data-pasien" hidden>
                                    <label class="form-label" for="nomor_rm">No. Rekam Medis</label>
                                    <input type="text" name="nomor_rm" class="form-control nomor_rm"
                                        id="nomor_rm" readonly placeholder="masukkan nama pasien">
                                    <div class="invalid-feedback error-nomor_rm"></div>
                                </div>
                                <div class="mb-3 data-pasien" hidden>
                                    <label class="form-label" for="nik">NIK</label>
                                    <input type="text" name="nik" class="form-control nik" id="nik"
                                        readonly placeholder="masukkan nik pasien">
                                    <div class="invalid-feedback error-nik"></div>
                                </div>
                                <div class="row data-pasien" hidden>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control tempat_lahir"
                                            id="tempat_lahir" readonly placeholder="masukkan tempat lahir pasien">
                                        <div class="invalid-feedback error-tempat_lahir"></div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="text" name="tanggal_lahir"
                                            class="form-control tanggal_lahir datepicker-input" id="tanggal_lahir"
                                            readonly placeholder="masukkan tanggal lahir pasien">
                                        <div class="invalid-feedback error-tanggal_lahir"></div>
                                    </div>
                                </div>
                                <div class="mb-3 data-pasien" hidden>
                                    <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control jenis_kelamin"
                                        id="jenis_kelamin" readonly>
                                    <div class="invalid-feedback error-jenis_kelamin"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end PASIEN -->

                    <!-- START: DOKTER -->
                    <div class="tab-pane" id="dokterDetail" role="tabpanel">
                        <div class="row mt-4">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="doter_id">Nama</label>
                                    <select name="dokter_id" id="dokter_id" class="form-control dokter_id">
                                        @foreach ($dokter as $key => $item)
                                            <option value="{{ $key }}"
                                                {{ $key == $data->triase->dokter_id ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-dokter_id"></div>
                                </div>
                                <div class="mb-3 data-dokter" hidden>
                                    <label class="form-label" for="sip">SIP</label>
                                    <input type="text" name="sip" class="form-control sip" id="sip"
                                        readonly placeholder="masukkan sip dokter">
                                    <div class="invalid-feedback error-sip"></div>
                                </div>
                                <div class="row data-dokter" hidden>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="tempat_lahir_dokter">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir_dokter"
                                            class="form-control tempat_lahir_dokter" id="tempat_lahir_dokter" readonly
                                            placeholder="masukkan tempat lahir dokter">
                                        <div class="invalid-feedback error-tempat_lahir_dokter"></div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="tanggal_lahir_dokter">Tanggal Lahir</label>
                                        <input type="text" name="tanggal_lahir_dokter"
                                            class="form-control tanggal_lahir datepicker-input"
                                            id="tanggal_lahir_dokter" readonly
                                            placeholder="masukkan tanggal lahir dokter_dokter">
                                        <div class="invalid-feedback error-tanggal_lahir_dokter"></div>
                                    </div>
                                </div>
                                <div class="mb-3 data-dokter" hidden>
                                    <label class="form-label" for="jenis_kelamin_dokter">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin_dokter"
                                        class="form-control jenis_kelamin_dokter" id="jenis_kelamin_dokter" readonly>
                                    <div class="invalid-feedback error-jenis_kelamin_dokter"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end DOKTER -->

                    {{-- TRIASE --}}
                    <div class="tab-pane" id="triase" role="tabpanel">
                        <div class="row mt-4">
                            {{-- Cara Datang --}}
                            <div
                                class="{{ $triase->cara_datang->option == 'Lain-lain' ? 'col-sm-6' : 'col-sm-12' }} cara-datang-1">
                                <div class="mb-3">
                                    <label class="form-label">Cara Datang</label>
                                    <select name="cara_datang" id="cara_datang" class="form-control cara_datang">
                                        <option value="">Pilih cara
                                            datang...</option>
                                        @foreach (caraDatang() as $item)
                                            <option value="{{ $item }}"
                                                {{ $triase->cara_datang->option == $item ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-cara_datang"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 cara-datang-2"
                                {{ $triase->cara_datang->option == 'Lain-lain' ? '' : 'hidden' }}>
                                <div class="mb-3">
                                    <label class="form-label">Tujuan Rujukan</label>
                                    <input type="text" class="form-control cara_datang_lainnya"
                                        name="cara_datang_lainnya" id="cara_datang_lainnya"
                                        placeholder="masukkan cara datang"
                                        value="{{ $triase->cara_datang->deskripsi }}">
                                    <div class="invalid-feedback error-cara_datang_lainnya"></div>
                                </div>
                            </div>

                            {{-- Transportasi --}}
                            <div
                                class="{{ $triase->transportasi->option == 'Lain-lain' ? 'col-sm-6' : 'col-sm-12' }} transportasi-1">
                                <div class="mb-3">
                                    <label class="form-label">Transportasi</label>
                                    <select name="transportasi" id="transportasi" class="form-control transportasi">
                                        <option value="">Pilih transportasi...</option>
                                        @foreach (transportasi() as $item)
                                            <option value="{{ $item }}"
                                                {{ $triase->transportasi->option == $item ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-transportasi"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 transportasi-2"
                                {{ $triase->transportasi->option == 'Lain-lain' ? '' : 'hidden' }}>
                                <div class="mb-3">
                                    <label class="form-label text-white">.</label>
                                    <input type="text" class="form-control transportasi_lainnya"
                                        name="transportasi_lainnya" id="transportasi_lainnya"
                                        placeholder="masukkan transportasi">
                                    <div class="invalid-feedback error-transportasi_lainnya"></div>
                                </div>
                            </div>

                            {{-- Jenis Kasus --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Jenis Kasus</label>
                                    <select name="jenis_kasus" id="jenis_kasus" class="form-control jenis_kasus">
                                        <option value="">
                                            Pilih jenis
                                            kasus...</option>
                                        @foreach (jenisKasus() as $item)
                                            <option value="{{ $item }}"
                                                {{ $triase->jenis_kasus == $item ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-jenis_kasus"></div>
                                </div>
                            </div>

                            {{-- BORDER --}}
                            <hr class="border-secondary border-opacity-50">

                            {{-- Tanggal dan Jam --}}
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal</label>
                                    <input type="text" name="tanggal_triase"
                                        class="form-control datepicker-input tanggal_triase" id="tanggal_triase"
                                        placeholder="masukkan tanggal" value="{{ dateFormat($triase->tanggal) }}">
                                    <div class="invalid-feedback error-tanggal_triase"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Jam</label>
                                    <input type="text" name="jam_triase"
                                        class="form-control jam_triase flatpickr-input" id="jam_triase"
                                        placeholder="masukkan jam" readonly="readonly" value="{{ $triase->jam }}">
                                    <div class="invalid-feedback error-jam_triase"></div>
                                </div>
                            </div>

                            {{-- Keluhan utama --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Keluhan Utama</label>
                                    <textarea name="keluhan_utama" id="keluhan_utama" class="form-control keluhan_utama" rows="6"
                                        placeholder="masukkan keluhan utama">{{ $triase->keluhan_utama }}</textarea>
                                    <div class="invalid-feedback error-keluhan_utama"></div>
                                </div>
                            </div>

                            {{-- Respon --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Respon</label>
                                    <select name="respon" id="respon" class="form-control respon">
                                        <option value="">
                                            Pilih respon...</option>
                                        @foreach (respon() as $item)
                                            <option value="{{ $item }}"
                                                {{ $triase->respon == $item ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-respon"></div>
                                </div>
                            </div>

                            {{-- airway --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Airway</label>
                                    <select name="airway" id="airway" class="form-control airway">
                                        <option value="">Pilih airway...</option>
                                        @foreach (airway() as $item)
                                            <option value="{{ $item }}"
                                                {{ $triase->airway == $item ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-airway"></div>
                                </div>
                            </div>

                            {{-- Breathing --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Breathing</label>
                                    <select name="breathing" id="breathing" class="form-control breathing">
                                        <option value="">Pilih breathing...</option>
                                        @foreach (breathing() as $item)
                                            <option value="{{ $item }}"
                                                {{ $triase->breathing == $item ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-breathing"></div>
                                </div>
                            </div>

                            {{-- Circulation --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <table class="table table-hover table-stripped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="6" class="text-center">Circulation</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Nadi</th>
                                                <th class="text-center">CRT</th>
                                                <th class="text-center">Saturasi Oksigen</th>
                                                <th class="text-center">Warna Kulit</th>
                                                <th class="text-center">Perdarahan</th>
                                                <th class="text-center">Turgor Kulit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select name="nadi" id="nadi" class="form-control nadi">
                                                        <option value="">Pilih nadi...</option>
                                                        @foreach (circulation()['nadi'] as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $triase->circulation->nadi == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback error-nadi"></div>
                                                </td>
                                                <td>
                                                    <select name="crt" id="crt" class="form-control crt">
                                                        <option value="">Pilih CRT...</option>
                                                        @foreach (circulation()['crt'] as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $triase->circulation->crt == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback error-crt"></div>
                                                </td>
                                                <td>
                                                    <input type="text" name="saturasi_oksigen"
                                                        class="form-control saturasi_oksigen" id="saturasi_oksigen"
                                                        placeholder="masukkan saturasi oksigen"
                                                        value="{{ $triase->circulation->saturasi_oksigen }}">
                                                    <div class="invalid-feedback error-saturasi_oksigen"></div>
                                                </td>
                                                <td>
                                                    <select name="warna_kulit" id="warna_kulit"
                                                        class="form-control warna_kulit">
                                                        <option value="">Pilih warna kulit...</option>
                                                        @foreach (circulation()['warna_kulit'] as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $triase->circulation->warna_kulit == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback error-warna_kulit"></div>
                                                </td>
                                                <td>
                                                    <select name="perdarahan" id="perdarahan"
                                                        class="form-control perdarahan">
                                                        <option value="">Pilih perdarahan...</option>
                                                        @foreach (circulation()['perdarahan'] as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $triase->circulation->perdarahan == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback error-perdarahan"></div>
                                                </td>
                                                <td>
                                                    <select name="turgor_kulit" id="turgor_kulit"
                                                        class="form-control turgor_kulit">
                                                        <option value="">Pilih turgor kulit...</option>
                                                        @foreach (circulation()['turgor_kulit'] as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $triase->circulation->turgor_kulit == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback error-turgor_kulit"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- Disability --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <table class="table table-hover table-stripped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="5" class="text-center">Disability</th>
                                            </tr>
                                            <tr>
                                                <th colspan="3" class="text-center">GCS</th>
                                                <th class="text-center" rowspan="2">Pupil</th>
                                                <th class="text-center" rowspan="2">Reflek Pupil</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">E</th>
                                                <th class="text-center">V</th>
                                                <th class="text-center">M</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="number" name="gcs_e" id="gcs_e"
                                                        class="form-control gcs_e" placeholder="masukkan nilai gcs_e"
                                                        value="{{ $triase->disability->gcs_e }}">
                                                    <div class="invalid-feedback error-gcs_e"></div>
                                                </td>
                                                <td>
                                                    <input type="number" name="gcs_v" id="gcs_v"
                                                        class="form-control gcs_v" placeholder="masukkan nilai gcs_v"
                                                        value="{{ $triase->disability->gcs_v }}">
                                                    <div class="invalid-feedback error-gcs_v"></div>
                                                </td>
                                                <td>
                                                    <input type="number" name="gcs_m" id="gcs_m"
                                                        class="form-control gcs_m" placeholder="masukkan nilai gcs_m"
                                                        value="{{ $triase->disability->gcs_m }}">
                                                    <div class="invalid-feedback error-gcs_m"></div>
                                                </td>
                                                <td>
                                                    <select name="pupil" id="pupil" class="form-control pupil">
                                                        <option value="">Pilih pupil...</option>
                                                        @foreach (disability()['pupil'] as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $triase->disability->pupil == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback error-pupil"></div>
                                                </td>
                                                <td>
                                                    <input type="text" name="reflek_pupil" id="reflek_pupil"
                                                        class="form-control reflek_pupil"
                                                        placeholder="masukkan reflek pupil"
                                                        value="{{ $triase->disability->reflek_pupil }}">
                                                    <div class="invalid-feedback error-reflek_pupil"></div>
                                                </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- Kategori --}}
                            <div class="col-sm-12">
                                <label class="form-label">Kategori Triase</label>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <div class="mb-3">
                                            <div class="form-check mb-2">
                                                <input class="kategori_triase" type="radio" name="kategori_triase"
                                                    value="Gawar Darurat" id="flexCheckChecked"
                                                    {{ $triase->kategori == 'Gawat Darurat' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckChecked"><i
                                                        class="fa-sharp fa-solid fa-square fa-2xl"
                                                        style="color: #a1851f;"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="mb-3">
                                            <div class="form-check mb-2">
                                                <input class="kategori_triase" type="radio" name="kategori_triase"
                                                    value="Gawat Tidak Darurat" id="flexCheckChecked"
                                                    {{ $triase->kategori == 'Gawat Tidak Darurat' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckChecked"><i
                                                        class="fa-sharp fa-solid fa-square fa-2xl"
                                                        style="color: #6d1d1d;"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="mb-3">
                                            <div class="form-check mb-2">
                                                <input class="kategori_triase" type="radio" name="kategori_triase"
                                                    value="Tidak Gawat Tidak Darurat" id="flexCheckChecked"
                                                    {{ $triase->kategori == 'Tidak Gawat Tidak Darurat' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckChecked"><i
                                                        class="fa-sharp fa-solid fa-square fa-2xl"
                                                        style="color: #0b6f1c;"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="mb-3">
                                            <div class="form-check mb-2">
                                                <input class="kategori_triase" type="radio" name="kategori_triase"
                                                    value="Meninggal" id="flexCheckChecked"
                                                    {{ $triase->kategori == 'Meninggal' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckChecked"><i
                                                        class="fa-sharp fa-solid fa-square fa-2xl"
                                                        style="color: #2a2828;"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback error-kategori_triase"></div>
                                </div>
                            </div>

                            {{-- Catatan --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Catatan</label>
                                    <textarea class="form-control" rows="4" disabled>Bila ada tanda tuberculosis seperti batuk lebih dari 2 minggu, demam hilang timbul lebih dari sebulan, berkeringat malam tanpa aktivitas, penurunan berat badan tanpa penyebab yang jelas, riwayat keluarga pengobatan TB, pasien wajib dikenakan masker</textarea>
                                </div>
                            </div>

                            {{-- TTD Dokter --}}
                            <div class="col-sm-3 offset-9 mt-3 ttd-dokter center-qr">
                                <h3 class="text-center">Dokter belum dipilih</h3>
                            </div>

                            {{-- Kriteria Triase --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <table class="table table-hover table-stripped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="4" class="text-center">Kriteria Triase</th>
                                            </tr>
                                            <tr>
                                                <th class="text-capitalize text-center"
                                                    style="background-color: #6d1d1d; color: white;">Gawat Darurat</th>
                                                <th class="text-capitalize text-center"
                                                    style="background-color: #a1851f; color: white;">Gawat Tidak
                                                    Darurat</th>
                                                <th class="text-capitalize text-center"
                                                    style="background-color: #0b6f1c; color: white;">Tidak Gawat Tidak
                                                    Darurat</th>
                                                <th class="text-capitalize text-center"
                                                    style="background-color: #2a2828; color:white;">Meninggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="white-space: normal !important">
                                                    <ol>
                                                        <li>Memerlukan penanganan dengan segera karena dalam kondisi
                                                            yang
                                                            sangat kritis (tersumbatnya jalan nafas, syspnea, perdarahan
                                                            masive, syok, penurunan kesadaran)
                                                        </li>
                                                    </ol>
                                                </td>
                                                <td style="white-space: normal !important">
                                                    <ol>
                                                        <li>Tidak memerlukan penanganan segera, dapat ditunda untuk
                                                            beberapa
                                                            jam</li>
                                                        <li>Tanda-tanda vital lainnya stabil</li>
                                                        <li>Kesadaran composmentis</li>
                                                    </ol>
                                                </td>
                                                <td style="white-space: normal !important">
                                                    <ol>
                                                        <li>Pasien luka yang dapat berjalan sendiri</li>
                                                        <li>Kondisi pasien stabil (dapat dilakukan rawat jalan)</li>
                                                    </ol>
                                                </td>
                                                <td style="white-space: normal !important">
                                                    <ol>
                                                        <li>Pasien telah meninggal dunia atau tanda-tanda kehidupan
                                                            menghilang</li>
                                                    </ol>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end TRIASE -->

                    {{-- ASESMEN --}}
                    <div class="tab-pane" id="asesmen" role="tabpanel">
                        <div class="row mt-4">

                            {{-- Tanggal --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal</label>
                                    <input type="text" name="tanggal_asesmen"
                                        class="form-control datepicker-input tanggal_asesmen" id="tanggal_asesmen"
                                        placeholder="masukkan tanggal" value="{{ dateFormat($asesmen->tanggal) }}">
                                    <div class="invalid-feedback error-tanggal_asesmen"></div>
                                </div>
                            </div>

                            {{-- Jam Kedatangan dan Wajtu pengkajian --}}
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Jam Kedangann</label>
                                    <input type="text" name="jam_kedatangan_asesmen"
                                        class="form-control flatpickr-input jam_kedatangan_asesmen"
                                        id="jam_kedatangan_asesmen" placeholder="masukkan jam kedatangan"
                                        readonly="readonly" value="{{ $asesmen->jam_kedatangan }}">
                                    <div class="invalid-feedback error-jam_kedatangan_asesmen"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Waktu Pengkajian</label>
                                    <input type="text" name="waktu_pengkajian"
                                        class="form-control waktu_pengkajian flatpickr-input" id="waktu_pengkajian"
                                        placeholder="masukkan waktu pengkajian" readonly="readonly"
                                        value="{{ $asesmen->waktu_pengkajian }}">
                                    <div class="invalid-feedback error-waktu_pengkajian"></div>
                                </div>
                            </div>

                            {{-- Rujukan --}}
                            <div class="{{ $asesmen->rujukan->option == 'Ya' ? 'col-sm-6' : 'col-sm-12' }} rujukan-1">
                                <div class="mb-3">
                                    <label class="form-label">Rujukan</label>
                                    <select name="rujukan" id="rujukan" class="form-control rujukan">
                                        <option value="">Pilih rujukan...</option>
                                        @foreach (rujukan() as $item)
                                            <option value="{{ $item }}"
                                                {{ $asesmen->rujukan->option == $item ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-rujukan"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 rujukan-2" {{ $asesmen->rujukan->option == 'Ya' ? '' : 'hidden' }}>
                                <div class="mb-3">
                                    <label class="form-label text-white">.</label>
                                    <input type="text" class="form-control rujukan_lainnya" name="rujukan_lainnya"
                                        id="rujukan_lainnya" placeholder="masukkan rujukan"
                                        value="{{ $asesmen->rujukan->deskripsi }}">
                                    <div class="invalid-feedback error-rujukan_lainnya"></div>
                                </div>
                            </div>

                            {{-- Dokter yang mengkaji --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Dokter yang mengkaji</label>
                                    <input type="text" name="dokter_asesmen" class="form-control dokter_asesmen"
                                        id="dokter_asesmen"
                                        placeholder="Terisi otomatis ketika sudah memilih data dokter" disabled>
                                    <p class="small text-muted">Akan terisi otomatis ketika sudah memilih pada data
                                        dokter
                                    </p>
                                </div>
                            </div>

                            {{-- BORDER --}}
                            <hr class="border-secondary border-opacity-50">

                            {{-- Riwayat alergi --}}
                            <div class="col-sm-12 riwayat_alergi-1">
                                <div class="mb-3">
                                    <label class="form-label">Riwayat Alergi</label>
                                    <select name="riwayat_alergi" id="riwayat_alergi"
                                        class="form-control riwayat_alergi">
                                        <option value="">Pilih riwayat alergi...</option>
                                        @foreach (riwayatAlergi() as $item)
                                            <option value="{{ $item }}"
                                                {{ $asesmen->riwayat_alergi->option == $item ? 'selected' : '' }}>
                                                {{ $item }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-riwayat_alergi"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 riwayat_alergi-2"
                                {{ $asesmen->riwayat_alergi->option == 'Ya' ? '' : 'hidden' }}>
                                <div class="mb-3">
                                    <table class="table table-hover table-bordered table-stripped" id="tableAlergi">
                                        <thead>
                                            <tr>
                                                <th class="text-center" colspan="4">Riwayat Alergi</th>
                                            </tr>
                                            <tr>
                                                {{-- <th class="text-center">#</th> --}}
                                                <th class="text-center">Alergi Terhadap</th>
                                                <th class="text-center">Jenis</th>
                                                <th class="text-center">Tipe Reaksi</th>
                                                <th class="text-center">
                                                    <button type="button"
                                                        class="btn btn-sm btn-success btn-add-item">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($asesmen->riwayat_alergi->option == 'Ya')
                                                @foreach ($asesmen->riwayat_alergi->deskripsi as $key => $item)
                                                    <tr class="tr-alergi">
                                                        <td>
                                                            <select name="alergi_terhadap[]"
                                                                id="alergi_terhadap_{{ $key }}"
                                                                class="form-control alergi_terhadap_{{ $key }}">
                                                                <option value="">Pilih alergi terhadap...
                                                                </option>
                                                                <option value="Obat-obatan"
                                                                    {{ $item->alergi_terhadap == 'Obat-obatan' ? 'selected' : '' }}>
                                                                    Obat-obatan</option>
                                                                <option value="Makanan"
                                                                    {{ $item->alergi_terhadap == 'Makanan' ? 'selected' : '' }}>
                                                                    Makanan</option>
                                                                <option value="Lainnya"
                                                                    {{ $item->alergi_terhadap == 'Lainnya' ? 'selected' : '' }}>
                                                                    Lainnya</option>
                                                            </select>
                                                            <div
                                                                class="invalid-feedback error-alergi_terhadap_{{ $key }}">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="jenis_alergi[]"
                                                                id="jenis_alergi_{{ $key }}"
                                                                class="form-control jenis_alergi_{{ $key }}"
                                                                placeholder="masukkan jenis alergi"
                                                                value="{{ $item->jenis_alergi }}">
                                                            <div
                                                                class="invalid-feedback error-jenis_alergi_{{ $key }}">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input type="text" name="tipe_reaksi[]"
                                                                id="tipe_reaksi_{{ $key }}"
                                                                class="form-control tipe_reaksi_{{ $key }}"
                                                                placeholder="masukkan jenis alergi"
                                                                value="{{ $item->tipe_reaksi }}">
                                                            <div
                                                                class="invalid-feedback error-tipe_reaksi_{{ $key }}">
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button"
                                                                class="btn btn-sm btn-danger btn-remove-item">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- BORDER --}}
                            <hr class="border-secondary border-opacity-50">

                            {{-- Anamnesis --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Anamnesis</label>
                                    <textarea name="anamnesis" id="anamnesis" class="form-control anamnesis" rows="5"
                                        placeholder="masukkan anamnesis">{{ $asesmen->anamnesis }}</textarea>
                                    <div class="invalid-feedback error-anamnesis"></div>
                                    </p>
                                </div>
                            </div>

                            {{-- Riwayat penyakit --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Riwayat Penyakit</label>
                                    <textarea name="riwayat_penyakit" id="riwayat_penyakit" class="form-control riwayat_penyakit" rows="5"
                                        placeholder="masukkan riwayat penyakit">{{ $asesmen->riwayat_penyakit }}</textarea>
                                    <div class="invalid-feedback error-riwayat_penyakit"></div>
                                    </p>
                                </div>
                            </div>

                            {{-- Riwayat pengobatan --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Riwayat Pengobatan</label>
                                    <textarea name="riwayat_pengobatan" id="riwayat_pengobatan" class="form-control riwayat_pengobatan" rows="5"
                                        placeholder="masukkan riwayat pengobatan">{{ $asesmen->riwayat_pengobatan }}</textarea>
                                    <div class="invalid-feedback error-riwayat_pengobatan"></div>
                                    </p>
                                </div>
                            </div>

                            {{-- BORDER --}}
                            <hr class="border-secondary border-opacity-50">

                            {{-- Kesadaran --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <table class="table table-hover table-stripped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="3" class="text-center">Kesadaran (GCS)</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">E</th>
                                                <th class="text-center">V</th>
                                                <th class="text-center">M</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="number" name="asesmen_gcs_e" id="asesmen_gcs_e"
                                                        class="form-control asesmen_gcs_e"
                                                        placeholder="masukkan nilai gcs_e"
                                                        value="{{ $asesmen->kesadaran->gcs_e }}">
                                                    <div class="invalid-feedback error-asesmen_gcs_e"></div>
                                                </td>
                                                <td>
                                                    <input type="number" name="asesmen_gcs_v" id="asesmen_gcs_v"
                                                        class="form-control asesmen_gcs_v"
                                                        placeholder="masukkan nilai gcs_v"
                                                        value="{{ $asesmen->kesadaran->gcs_v }}">
                                                    <div class="invalid-feedback error-asesmen_gcs_v"></div>
                                                </td>
                                                <td>
                                                    <input type="number" name="asesmen_gcs_m" id="asesmen_gcs_m"
                                                        class="form-control asesmen_gcs_m"
                                                        placeholder="masukkan nilai gcs_m"
                                                        value="{{ $asesmen->kesadaran->gcs_m }}">
                                                    <div class="invalid-feedback error-asesmen_gcs_m"></div>
                                                </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- Tanda-tanda vital dan keadaan umum --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <table class="table table-hover table-stripped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="5" class="text-center">Tanda-tanda vital dan keadaan
                                                    umum
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">TD (mmHg)</th>
                                                <th class="text-center">N (x/menit)</th>
                                                <th class="text-center">R (x/menit)</th>
                                                <th class="text-center">S (&deg;C)</th>
                                                <th class="text-center">BB (kg)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" name="td_asesmen" id="td_asesmen"
                                                        class="form-control td_asesmen"
                                                        placeholder="masukkan nilai td"
                                                        value="{{ $asesmen->tanda_vital->td }}">
                                                    <div class="invalid-feedback error-td_asesmen"></div>
                                                </td>
                                                <td>
                                                    <input type="number" name="n_asesmen" id="n_asesmen"
                                                        class="form-control n_asesmen" placeholder="masukkan nilai n"
                                                        value="{{ $asesmen->tanda_vital->n }}">
                                                    <div class="invalid-feedback error-n_asesmen"></div>
                                                </td>
                                                <td>
                                                    <input type="number" name="r_asesmen" id="r_asesmen"
                                                        class="form-control r_asesmen" placeholder="masukkan nilai r"
                                                        value="{{ $asesmen->tanda_vital->r }}">
                                                    <div class="invalid-feedback error-r_asesmen"></div>
                                                </td>
                                                <td>
                                                    <input type="number" name="s_asesmen" id="s_asesmen"
                                                        class="form-control s_asesmen" placeholder="masukkan nilai s"
                                                        value="{{ $asesmen->tanda_vital->s }}">
                                                    <div class="invalid-feedback error-s_asesmen"></div>
                                                </td>
                                                <td>
                                                    <input type="number" name="bb_asesmen" id="bb_asesmen"
                                                        class="form-control bb_asesmen"
                                                        placeholder="masukkan nilai bb"
                                                        value="{{ $asesmen->tanda_vital->bb }}">
                                                    <div class="invalid-feedback error-bb_asesmen"></div>
                                                </td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- pengkajian nyeri --}}
                            <div class="col-sm-12 nyeri_asesmen">
                                <div class="mb-3">
                                    <label class="form-label">Nyeri</label>
                                    <select name="nyeri_asesmen" id="nyeri_asesmen"
                                        class="form-control nyeri_asesmen">
                                        <option value="">Pilih nyeri...</option>
                                        @foreach (nyeriAsesmen() as $item)
                                            <option value="{{ $item }}"
                                                {{ $asesmen->nyeri->option == $item ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-nyeri_asesmen"></div>
                                </div>
                            </div>
                            <div class="col-sm-4 lokasi_nyeri" {{ $asesmen->nyeri->option == 'Ya' ? '' : 'hidden' }}>
                                <div class="mb-3">
                                    <label class="form-label">Lokasi Nyeri</label>
                                    <input type="text" class="form-control lokasi_nyeri_asesmen"
                                        name="lokasi_nyeri_asesmen" id="lokasi_nyeri_asesmen"
                                        placeholder="masukkan lokasi nyeri"
                                        value="{{ $asesmen->nyeri->deskripsi->lokasi_nyeri ?? '' }}">
                                    <div class="invalid-feedback error-lokasi_nyeri_asesmen"></div>
                                </div>
                            </div>
                            <div class="col-sm-4 intensitas_nyeri"
                                {{ $asesmen->nyeri->option == 'Ya' ? '' : 'hidden' }}>
                                <div class="mb-3">
                                    <label class="form-label">Intensitas Nyeri</label>
                                    <select name="intensitas_nyeri_asesmen" id="intensitas_nyeri_asesmen"
                                        class="form-control intensitas_nyeri_asesmen">
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}"
                                                {{ ($asesmen->nyeri->deskripsi->intensitas_nyeri ?? null) == $i ? 'selected' : '' }}>
                                                {{ $i }}</option>
                                        @endfor
                                    </select>
                                    <div class="invalid-feedback error-intensitas_nyeri_asesmen"></div>
                                </div>
                            </div>
                            <div class="col-sm-4 jenis_nyeri" {{ $asesmen->nyeri->option == 'Ya' ? '' : 'hidden' }}>
                                <div class="mb-3">
                                    <label class="form-label">Jenis Nyeri</label>
                                    <select name="jenis_nyeri_asesmen" id="jenis_nyeri_asesmen"
                                        class="form-control jenis_nyeri_asesmen">
                                        <option value="">Pilih jenis nyeri...</option>
                                        @foreach (jenisNyeri() as $item)
                                            <option value="{{ $item }}"
                                                {{ ($asesmen->nyeri->deskripsi->jenis_nyeri ?? null) == $item ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-jenis_nyeri_asesmen"></div>
                                </div>
                            </div>

                            {{-- Pemeriksaan fisik --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <table class="table table-hover table-stripped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="2" class="text-center">Pemeriksaan Fisik</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Bagian</th>
                                                <th class="text-center">Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Kepala</td>
                                                <td>
                                                    <textarea name="kepala_asesmen" id="kepala_asesmen" class="form-control kepala_asesmen" rows="6"
                                                        placeholder="masukkan hasil pemeriksaan fisik pada bagian kepala">{{ $asesmen->pemeriksaan_fisik->kepala }}</textarea>
                                                    <div class="invalid-feedback error-kepala_asesmen"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Leher</td>
                                                <td>
                                                    <textarea name="leher_asesmen" id="leher_asesmen" class="form-control leher_asesmen" rows="6"
                                                        placeholder="masukkan hasil pemeriksaan fisik pada bagian leher">{{ $asesmen->pemeriksaan_fisik->leher }}</textarea>
                                                    <div class="invalid-feedback error-leher_asesmen"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Thorak</td>
                                                <td>
                                                    <textarea name="thorak_asesmen" id="thorak_asesmen" class="form-control thorak_asesmen" rows="6"
                                                        placeholder="masukkan hasil pemeriksaan fisik pada bagian thorak">{{ $asesmen->pemeriksaan_fisik->thorak }}</textarea>
                                                    <div class="invalid-feedback error-thorak_asesmen"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Abdomen</td>
                                                <td>
                                                    <textarea name="abdomen_asesmen" id="abdomen_asesmen" class="form-control abdomen_asesmen" rows="6"
                                                        placeholder="masukkan hasil pemeriksaan fisik pada bagian abdomen">{{ $asesmen->pemeriksaan_fisik->abdomen }}</textarea>
                                                    <div class="invalid-feedback error-abdomen_asesmen"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Extremitas atas dan bawah</td>
                                                <td>
                                                    <textarea name="extremitas_atas_bawah" id="extremitas_atas_bawah" class="form-control extremitas_atas_bawah"
                                                        rows="6" placeholder="masukkan hasil pemeriksaan fisik pada bagian extremitas atas dan bawah">{{ $asesmen->pemeriksaan_fisik->extremitas_atas_bawah }}</textarea>
                                                    <div class="invalid-feedback error-extremitas_atas_bawah"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Genetalia</td>
                                                <td>
                                                    <textarea name="genetalia_asesmen" id="genetalia_asesmen" class="form-control genetalia_asesmen" rows="6"
                                                        placeholder="masukkan hasil pemeriksaan fisik pada bagian genetalia">{{ $asesmen->pemeriksaan_fisik->genetalia }}</textarea>
                                                    <div class="invalid-feedback error-genetalia_asesmen"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Integumen</td>
                                                <td>
                                                    <textarea name="integumen_asesmen" id="integumen_asesmen" class="form-control integumen_asesmen" rows="6"
                                                        placeholder="masukkan hasil pemeriksaan fisik pada bagian integumen">{{ $asesmen->pemeriksaan_fisik->integumen }}</textarea>
                                                    <div class="invalid-feedback error-integumen_asesmen"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- BORDER --}}
                            <hr class="border-secondary border-opacity-50">

                            {{-- Hasil pemeriksaan penunjang --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Hasil Pemeriksaan Penunjang</label>
                                    <textarea name="hasil_pemeriksaan_penunjang" id="hasil_pemeriksaan_penunjang"
                                        class="form-control hasil_pemeriksaan_penunjang" rows="6"
                                        placeholder="masukkan hasil pemeriksaan penunjang">{{ $asesmen->hasil_pemeriksaan_penunjang }}</textarea>
                                    <div class="invalid-feedback error-hasil_pemeriksaan_penunjang"></div>
                                </div>
                            </div>

                            {{-- Diagnosis --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Diagnosis</label>
                                    <textarea name="diagnosis_asesmen" id="diagnosis_asesmen" class="form-control diagnosis_asesmen" rows="6"
                                        placeholder="masukkan diagnosis">{{ $asesmen->diagnosis }}</textarea>
                                    <div class="invalid-feedback error-diagnosis_asesmen"></div>
                                </div>
                            </div>

                            {{-- Rencana tindakan --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Rencana Tindakan</label>
                                    <textarea name="rencana_tindakan" id="rencana_tindakan" class="form-control rencana_tindakan" rows="6"
                                        placeholder="masukkan rencana tindakan">{{ $asesmen->rencana_tindakan }}</textarea>
                                    <div class="invalid-feedback error-rencana_tindakan"></div>
                                </div>
                            </div>

                            {{-- Rencana Terapi --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Rencana Terapi</label>
                                    <textarea name="rencana_terapi" id="rencana_terapi" class="form-control rencana_terapi" rows="6"
                                        placeholder="masukkan rencana terapa">{{ $asesmen->rencana_terapi }}</textarea>
                                    <div class="invalid-feedback error-rencana_terapi"></div>
                                </div>
                            </div>

                            {{-- BORDER --}}
                            <hr class="border-secondary border-opacity-50">

                            {{-- TTD ASESMEN --}}
                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <div class="ttd-asesmen-pasien center-qr">
                                    <h3 class="text-center">Pasien belum dipilih</h3>
                                </div>

                                <div class="ttd-asesmen-dokter center-qr">
                                    <h3 class="text-center">Dokter belum dipilih</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end ASESMEN -->

                    {{-- CATATAN EDUKASI --}}
                    <div class="tab-pane" id="catatanEdukasi" role="tabpanel">
                        <div class="row mt-4">
                            {{-- Table --}}
                            <div class="col-sm-12">
                                <div class="mb-3 table-responsive dt-responsive">
                                    <table class="table table-hover table-bordered table-stripped">
                                        <thead>
                                            <tr>
                                                <th class="text-center" rowspan="2">Tanggal & jam</th>
                                                <th class="text-center" colspan="2">Sasaran Edukasi</th>
                                                <th class="text-center" rowspan="2">Penjelasan</th>
                                                <th class="text-center" rowspan="2">Metode</th>
                                                <th class="text-center" rowspan="2">Durasi</th>
                                                <th class="text-center" rowspan="2">Keterangan dan Evaluasi</th>
                                                <th class="text-center" rowspan="2">Paraf & Nama Edukator</th>
                                                <th class="text-center" rowspan="2">Paraf & Nama Pasien/Keluarga
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Nama dan Hubungan dengan Pasien</th>
                                                <th class="text-center">Hambatan dalam Komunikasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td rowspan="7" class="vertical-align-top">
                                                    <input type="text" name="tanggal_edukasi" id="tanggal_edukasi"
                                                        class="form-control tanggal_edukasi datepicker-input"
                                                        placeholder="masukkan tanggal edukasi"
                                                        value="{{ dateFormat($catatanEdukasi->tanggal) }}">
                                                    <div class="invalid-feedback error-tanggal_edukasi"></div>
                                                </td>
                                                <td rowspan="7" class="vertical-align-top">
                                                    <textarea name="nama_dan_hubungan" id="nama_dan_hubungan" class="form-control nama_dan_hubungan"
                                                        placeholder="masukkan nama dan hubungan dengan pasien">{{ $catatanEdukasi->nama_dan_hubungan }}</textarea>
                                                </td>
                                                <td class="vertical-align-top" class="vertical-align-top">
                                                    <select name="hambatan_dalam_komunikasi_1"
                                                        id="hambatan_dalam_komunikasi"
                                                        class="form-control form-control-hambatan hambatan_dalam_komunikasi_1"
                                                        data-id="1" data-classname="hambatan_dalam_komunikasi_1">
                                                        <option value="">Pilih hambatan dalam komunikasi...
                                                        </option>
                                                        @foreach (hambatanKomunikasi() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->dokter_spesialis->hambatan->option == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>

                                                    <div class="mt-2 hambatan_dalam_komunikasi_lainnya_1"
                                                        {{ $catatanEdukasi->dokter_spesialis->hambatan->option == 'Ya' ? '' : 'hidden' }}>
                                                        <textarea name="hambatan_dalam_komunikasi_lainnya_1" id="hambatan_dalam_komunikasi_lainnya_1"
                                                            class="form-control hambatan_dalam_komunikasi_lainnya_1" rows="6"
                                                            placeholder="masukkan deskripsi hambatan">{{ $catatanEdukasi->dokter_spesialis->hambatan->deskripsi }}</textarea>
                                                        <div
                                                            class="invalid-feedback error-hambatan_dalam_komunikasi_lainnya_1">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong>
                                                        <p>Dokter Spesialis/Dokter Umum</p>
                                                    </strong>
                                                    <ol>
                                                        <li>
                                                            Kondisi Pasien
                                                            <textarea name="catatan_kondisi_pasien" id="catatan_kondisi_pasien" class="form-control catatan_kondisi_pasien"
                                                                rows="4" placeholder="masukkan kondisi pasien">{{ $catatanEdukasi->dokter_spesialis->data->kondisi_pasien }}</textarea>
                                                        </li>
                                                        <li class="mt-2">
                                                            Hasil Pemerikasaan
                                                            <textarea name="catatan_hasil_pemeriksaan" id="catatan_hasil_pemeriksaan"
                                                                class="form-control catatan_hasil_pemeriksaan" rows="4" placeholder="masukkan hasil pemeriksaan">{{ $catatanEdukasi->dokter_spesialis->data->hasil_pemeriksaan }}</textarea>
                                                        </li>
                                                        <li class="mt-2">
                                                            Assessment
                                                            <textarea name="catatan_assessment" id="catatan_assessment" class="form-control catatan_assessment" rows="4"
                                                                placeholder="masukkan assessment">{{ $catatanEdukasi->dokter_spesialis->data->assessment }}</textarea>
                                                        </li>
                                                        <li class="mt-2">
                                                            Rencana asuhan/ pengobatan/ tindakan medis
                                                            <textarea name="catatan_rencana_asuhan" id="catatan_rencana_asuhan" class="form-control catatan_rencana_asuhan"
                                                                rows="4" placeholder="masukkan rencana asuhan/ pengobatan/ tindakan medis">{{ $catatanEdukasi->dokter_spesialis->data->rencana_asuhan }}</textarea>
                                                        </li>
                                                        <li class="mt-2">
                                                            Perkiraan hari rawat inap
                                                            <textarea name="catatan_perkiraan_hari" id="catatan_perkiraan_hari" class="form-control catatan_perkiraan_hari"
                                                                rows="4" placeholder="masukkan perkiraan hari rawat inap">{{ $catatanEdukasi->dokter_spesialis->data->perkiraan_hari_rawat_inap }}</textarea>
                                                        </li>
                                                        <li class="mt-2">
                                                            Penjelasan komplikasi yang mungkin terjadi
                                                            <textarea name="catatan_penjelasan_komplikasi" id="catatan_penjelasan_komplikasi"
                                                                class="form-control catatan_penjelasan_komplikasi" rows="4"
                                                                placeholder="masukkan penjelasan komplikasi yang mungkin terjadi">{{ $catatanEdukasi->dokter_spesialis->data->penjelasan_komplikasi }}</textarea>
                                                        </li>
                                                        <li class="mt-2">
                                                            Kemungkinan hasil yang tidak diharapkan
                                                            <textarea name="catatan_kemungkinan_hasil" id="catatan_kemungkinan_hasil"
                                                                class="form-control catatan_kemungkinan_hasil" rows="4"
                                                                placeholder="masukkan kemungkinan hasil yang tidak diharapkan">{{ $catatanEdukasi->dokter_spesialis->data->kemungkinan_hasil }}</textarea>
                                                        </li>
                                                    </ol>
                                                </td>
                                                <td class="vertical-align-top" class="vertical-align-top">
                                                    <select name="catatan_metode_1" id="catatan_metode_1"
                                                        class="form-control catatan_metode_1">
                                                        <option value="">Pilih metode...</option>
                                                        @foreach (metode() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->dokter_spesialis->metode == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <input type="number" name="catatan_durasi_1"
                                                        class="form-control catatan_durasi_1" id="catatan_durasi_1"
                                                        placeholder="masukkan durasi"
                                                        value="{{ $catatanEdukasi->dokter_spesialis->durasi }}">
                                                </td>
                                                <td class="vertical-align-top">
                                                    <textarea name="catatan_keterangan_evaluasi_1" id="catatan_keterangan_evaluasi_1"
                                                        class="form-control catatan_keterangan_evaluasi_1" rows="6" placeholder="masukkan keterangan dan evaluasi">{{ $catatanEdukasi->dokter_spesialis->keterangan_evaluasi }}</textarea>
                                                </td>
                                                <td rowspan="7"
                                                    class="vertical-align-top text-center ttd-edukasi-dokter"
                                                    id="ttd-edukasi-dokter"></td>
                                                <td rowspan="7"
                                                    class="vertical-align-top text-center ttd-edukasi-pasien"
                                                    id="ttd-edukasi-pasien">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vertical-align-top">
                                                    <select name="hambatan_dalam_komunikasi_2"
                                                        id="hambatan_dalam_komunikasi"
                                                        class="form-control form-control-hambatan hambatan_dalam_komunikasi_2"
                                                        data-id="2" data-classname="hambatan_dalam_komunikasi_2">
                                                        <option value="">Pilih hambatan dalam komunikasi...
                                                        </option>
                                                        @foreach (hambatanKomunikasi() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->nutrisi->hambatan->option == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>

                                                    <div class="mt-2 hambatan_dalam_komunikasi_lainnya_2"
                                                        {{ $catatanEdukasi->nutrisi->hambatan->option == 'Ya' ? '' : 'hidden' }}>
                                                        <textarea name="hambatan_dalam_komunikasi_lainnya_2" id="hambatan_dalam_komunikasi_lainnya_2"
                                                            class="form-control hambatan_dalam_komunikasi_lainnya_2" rows="6"
                                                            placeholder="masukkan deskripsi hambatan">{{ $catatanEdukasi->nutrisi->hambatan->deskripsi }}</textarea>
                                                        <div
                                                            class="invalid-feedback error-hambatan_dalam_komunikasi_lainnya_2">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong>
                                                        <p>Nutrisi</p>
                                                    </strong>
                                                    <textarea name="catatan_nutrisi" id="catatan_nutrisi" class="form-control catatan_nutrisi" rows="6"
                                                        placeholder="masukkan nutrisi">{{ $catatanEdukasi->nutrisi->data->nutrisi }}</textarea>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <select name="catatan_metode_2" id="catatan_metode_2"
                                                        class="form-control catatan_metode_2">
                                                        <option value="">Pilih metode...</option>
                                                        @foreach (metode() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->nutrisi->metode == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <input type="number" name="catatan_durasi_2"
                                                        class="form-control catatan_durasi_2" id="catatan_durasi_2"
                                                        placeholder="masukkan durasi"
                                                        value="{{ $catatanEdukasi->nutrisi->durasi }}">
                                                </td>
                                                <td class="vertical-align-top">
                                                    <textarea name="catatan_keterangan_evaluasi_2" id="catatan_keterangan_evaluasi_2"
                                                        class="form-control catatan_keterangan_evaluasi_2" rows="6" placeholder="masukkan keterangan dan evaluasi">{{ $catatanEdukasi->nutrisi->keterangan_evaluasi }}</textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vertical-align-top">
                                                    <select name="hambatan_dalam_komunikasi_3"
                                                        id="hambatan_dalam_komunikasi"
                                                        class="form-control form-control-hambatan hambatan_dalam_komunikasi_3"
                                                        data-id="3" data-classname="hambatan_dalam_komunikasi_3">
                                                        <option value="">Pilih hambatan dalam komunikasi...
                                                        </option>
                                                        @foreach (hambatanKomunikasi() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->manajemen_nyeri->hambatan->option == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>

                                                    <div class="mt-2 hambatan_dalam_komunikasi_lainnya_3"
                                                        {{ $catatanEdukasi->manajemen_nyeri->hambatan->option == 'Ya' ? '' : 'hidden' }}>
                                                        <textarea name="hambatan_dalam_komunikasi_lainnya_3" id="hambatan_dalam_komunikasi_lainnya_3"
                                                            class="form-control hambatan_dalam_komunikasi_lainnya_3" rows="6"
                                                            placeholder="masukkan deskripsi hambatan">{{ $catatanEdukasi->manajemen_nyeri->hambatan->deskripsi }}</textarea>
                                                        <div
                                                            class="invalid-feedback error-hambatan_dalam_komunikasi_lainnya_3">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong>
                                                        <p>Manajemen Nyeri</p>
                                                    </strong>
                                                    <ol>
                                                        <li>
                                                            Farmakologi
                                                            <textarea name="farmakologi" id="farmakologi" class="form-control farmakologi" rows="6"
                                                                placeholder="masukkan farmakologi">{{ $catatanEdukasi->manajemen_nyeri->data->farmakologi }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Non farmakologi
                                                            <textarea name="non_farmakologi" id="non_farmakologi" class="form-control non_farmakologi" rows="6"
                                                                placeholder="masukkan non farmakologi">{{ $catatanEdukasi->manajemen_nyeri->data->non_farmakologi }}</textarea>
                                                        </li>
                                                    </ol>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <select name="catatan_metode_3" id="catatan_metode_3"
                                                        class="form-control catatan_metode_3">
                                                        <option value="">Pilih metode...</option>
                                                        @foreach (metode() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->manajemen_nyeri->metode == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <input type="number" name="catatan_durasi_3"
                                                        class="form-control catatan_durasi_3" id="catatan_durasi_3"
                                                        placeholder="masukkan durasi"
                                                        value="{{ $catatanEdukasi->manajemen_nyeri->durasi }}">
                                                </td>
                                                <td class="vertical-align-top">
                                                    <textarea name="catatan_keterangan_evaluasi_3" id="catatan_keterangan_evaluasi_3"
                                                        class="form-control catatan_keterangan_evaluasi_3" rows="6"
                                                        placeholder="masukkan keterangan dan evaluasi">{{ $catatanEdukasi->manajemen_nyeri->keterangan_evaluasi }}</textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vertical-align-top">
                                                    <select name="hambatan_dalam_komunikasi_4"
                                                        id="hambatan_dalam_komunikasi"
                                                        class="form-control form-control-hambatan hambatan_dalam_komunikasi_4"
                                                        data-id="4" data-classname="hambatan_dalam_komunikasi_4">
                                                        <option value="">Pilih hambatan dalam komunikasi...
                                                        </option>
                                                        @foreach (hambatanKomunikasi() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->manajemen_nyeri->hambatan->option == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>

                                                    <div class="mt-2 hambatan_dalam_komunikasi_lainnya_4"
                                                        {{ $catatanEdukasi->manajemen_nyeri->hambatan->option == 'Ya' ? '' : 'hidden' }}>
                                                        <textarea name="hambatan_dalam_komunikasi_lainnya_4" id="hambatan_dalam_komunikasi_lainnya_4"
                                                            class="form-control hambatan_dalam_komunikasi_lainnya_4" rows="6"
                                                            placeholder="masukkan deskripsi hambatan">{{ $catatanEdukasi->farmasi->hambatan->deskripsi }}</textarea>
                                                        <div
                                                            class="invalid-feedback error-hambatan_dalam_komunikasi_lainnya_4">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong>
                                                        <p>Rohaniawan</p>
                                                    </strong>
                                                    <textarea name="catatan_rohaniawan" id="catatan_rohaniawan" class="form-control catatan_rohaniawan"
                                                        rows="6" placeholder="masukkan rohaniawan"></textarea>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <select name="catatan_metode_4" id="catatan_metode_4"
                                                        class="form-control catatan_metode_4">
                                                        <option value="">Pilih metode...</option>
                                                        @foreach (metode() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->rohaniawan->metode == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <input type="number" name="catatan_durasi_4"
                                                        class="form-control catatan_durasi_4" id="catatan_durasi_4"
                                                        placeholder="masukkan durasi"
                                                        value="{{ $catatanEdukasi->rohaniawan->durasi }}">
                                                </td>
                                                <td class="vertical-align-top">
                                                    <textarea name="catatan_keterangan_evaluasi_4" id="catatan_keterangan_evaluasi_4"
                                                        class="form-control catatan_keterangan_evaluasi_4" rows="6"
                                                        placeholder="masukkan keterangan dan evaluasi">{{ $catatanEdukasi->rohaniawan->keterangan_evaluasi }}</textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vertical-align-top">
                                                    <select name="hambatan_dalam_komunikasi_5"
                                                        id="hambatan_dalam_komunikasi"
                                                        class="form-control form-control-hambatan hambatan_dalam_komunikasi_5"
                                                        data-id="5" data-classname="hambatan_dalam_komunikasi_5">
                                                        <option value="">Pilih hambatan dalam komunikasi...
                                                        </option>
                                                        @foreach (hambatanKomunikasi() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->rohaniawan->hambatan->option == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>

                                                    <div class="mt-2 hambatan_dalam_komunikasi_lainnya_5"
                                                        {{ $catatanEdukasi->rohaniawan->hambatan->option == 'Ya' ? '' : 'hidden' }}>
                                                        <textarea name="hambatan_dalam_komunikasi_lainnya_5" id="hambatan_dalam_komunikasi_lainnya_5"
                                                            class="form-control hambatan_dalam_komunikasi_lainnya_5" rows="6"
                                                            placeholder="masukkan deskripsi hambatan">{{ $catatanEdukasi->rohaniawan->hambatan->deskripsi }}</textarea>
                                                        <div
                                                            class="invalid-feedback error-hambatan_dalam_komunikasi_lainnya_5">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong>
                                                        <p>Farmasi</p>
                                                    </strong>
                                                    <ol>
                                                        <li>
                                                            Nama obat, aturan pakai dan dosis obat
                                                            <textarea name="catatan_nama_obat" id="catatan_nama_obat" class="form-control catatan_nama_obat" rows="6"
                                                                placeholder="masukkan deskripsi nama obat, aturan pakai dan dosis obat">{{ $catatanEdukasi->farmasi->data->nama_obat }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Cara penyimpanan obat
                                                            <textarea name="catatan_cara_penyimpanan" id="catatan_cara_penyimpanan"
                                                                class="form-control catatan_cara_penyimpanan" rows="6"
                                                                placeholder="masukkan deskripsi cara penyimpanan obat">{{ $catatanEdukasi->farmasi->data->cara_penyimpanan }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Efek samping obat
                                                            <textarea name="catatan_efek_samping" id="catatan_efek_samping" class="form-control catatan_efek_samping"
                                                                rows="6" placeholder="masukkan deskripsi efek samping obat">{{ $catatanEdukasi->farmasi->data->efek_samping }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Kontra indikasi obat
                                                            <textarea name="catatan_kontra_indikasi" id="catatan_kontra_indikasi" class="form-control catatan_kontra_indikasi"
                                                                rows="6" placeholder="masukkan deskripsi kontra indikasi obat">{{ $catatanEdukasi->farmasi->data->kontra_indikasi }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Lain-lainnya
                                                            <textarea name="catatan_lain_lainnya" id="catatan_lain_lainnya" class="form-control catatan_lain_lainnya"
                                                                rows="6" placeholder="masukkan deskripsi lain-lainnya">{{ $catatanEdukasi->farmasi->data->lain_lainnya }}</textarea>
                                                        </li>
                                                    </ol>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <select name="catatan_metode_5" id="catatan_metode_5"
                                                        class="form-control catatan_metode_5">
                                                        <option value="">Pilih metode...</option>
                                                        @foreach (metode() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->farmasi->metode == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <input type="number" name="catatan_durasi_5"
                                                        class="form-control catatan_durasi_5" id="catatan_durasi_5"
                                                        placeholder="masukkan durasi"
                                                        value="{{ $catatanEdukasi->farmasi->durasi }}">
                                                </td>
                                                <td class="vertical-align-top">
                                                    <textarea name="catatan_keterangan_evaluasi_5" id="catatan_keterangan_evaluasi_5"
                                                        class="form-control catatan_keterangan_evaluasi_5" rows="6"
                                                        placeholder="masukkan keterangan dan evaluasi">{{ $catatanEdukasi->farmasi->keterangan_evaluasi }}</textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vertical-align-top">
                                                    <select name="hambatan_dalam_komunikasi_6"
                                                        id="hambatan_dalam_komunikasi"
                                                        class="form-control form-control-hambatan hambatan_dalam_komunikasi_6"
                                                        data-id="6" data-classname="hambatan_dalam_komunikasi_6">
                                                        <option value="">Pilih hambatan dalam komunikasi...
                                                        </option>
                                                        @foreach (hambatanKomunikasi() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->farmasi->hambatan->option == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>

                                                    <div class="mt-2 hambatan_dalam_komunikasi_lainnya_6"
                                                        {{ $catatanEdukasi->farmasi->hambatan->option == 'Ya' ? 'selected' : '' }}>
                                                        <textarea name="hambatan_dalam_komunikasi_lainnya_6" id="hambatan_dalam_komunikasi_lainnya_6"
                                                            class="form-control hambatan_dalam_komunikasi_lainnya_6" rows="6"
                                                            placeholder="masukkan deskripsi hambatan">{{ $catatanEdukasi->perawat->hambatan->deskripsi }}</textarea>
                                                        <div
                                                            class="invalid-feedback error-hambatan_dalam_komunikasi_lainnya_6">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong>
                                                        <p>Perawat/ Bidan</p>
                                                    </strong>
                                                    <ol>
                                                        <li>
                                                            Pendidikan kesehatan tentang
                                                            <textarea name="catatan_pendidikan_kesehatan" id="catatan_pendidikan_kesehatan"
                                                                class="form-control catatan_pendidikan_kesehatan" rows="6"
                                                                placeholder="masukkan deskripsi pendidikan kesehatan tentang">{{ $catatanEdukasi->perawat->data->pendidikan_kesehatan }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Hak dan kewajiban pasien
                                                            <textarea name="catatan_hak_kewajiban" id="catatan_hak_kewajiban" class="form-control catatan_hak_kewajiban"
                                                                rows="6" placeholder="masukkan deskripsi hak dan kewajiban pasien">{{ $catatanEdukasi->perawat->data->hak_kewajiban }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Perawatan dirumah
                                                            <textarea name="catatan_perawatan_dirumah" id="catatan_perawatan_dirumah"
                                                                class="form-control catatan_perawatan_dirumah" rows="6"
                                                                placeholder="masukkan deskripsi perawatan dirumah">{{ $catatanEdukasi->perawat->data->perawatan_dirumah }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Perawatan luka
                                                            <textarea name="catatan_perawatan_luka" id="catatan_perawatan_luka" class="form-control catatan_perawatan_luka"
                                                                rows="6" placeholder="masukkan deskripsi perawatan luka">{{ $catatanEdukasi->perawat->data->perawatan_luka }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Keamanan penggunaan alat-alat kesehatan
                                                            <textarea name="catatan_keamanan_penggunaan_alat" id="catatan_keamanan_penggunaan_alat"
                                                                class="form-control catatan_keamanan_penggunaan_alat" rows="6"
                                                                placeholder="masukkan deskripsi keamanan penggunaan alat-alat kesehatan">{{ $catatanEdukasi->perawat->data->keamanan_penggunaan_alat }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Keamanan lingkungan perawatan dirumah
                                                            <textarea name="catatan_keamanan_lingkungan" id="catatan_keamanan_lingkungan"
                                                                class="form-control catatan_keamanan_lingkungan" rows="6"
                                                                placeholder="masukkan deskripsi keamanan lingkungan perawatan dirumah">{{ $catatanEdukasi->perawat->data->keamanan_lingkungan }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Lain-lainnya
                                                            <textarea name="catatan_lain_lainnya" id="catatan_lain_lainnya" class="form-control catatan_lain_lainnya"
                                                                rows="6" placeholder="masukkan deskripsi lain-lainnya">{{ $catatanEdukasi->perawat->data->lain_lainnya }}</textarea>
                                                        </li>
                                                    </ol>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <select name="catatan_metode_6" id="catatan_metode_6"
                                                        class="form-control catatan_metode_6">
                                                        <option value="">Pilih metode...</option>
                                                        @foreach (metode() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->perawat->metode == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <input type="number" name="catatan_durasi_6"
                                                        class="form-control catatan_durasi_6" id="catatan_durasi_6"
                                                        placeholder="masukkan durasi"
                                                        value="{{ $catatanEdukasi->perawat->durasi }}">
                                                </td>
                                                <td class="vertical-align-top">
                                                    <textarea name="catatan_keterangan_evaluasi_6" id="catatan_keterangan_evaluasi_6"
                                                        class="form-control catatan_keterangan_evaluasi_6" rows="6"
                                                        placeholder="masukkan keterangan dan evaluasi">{{ $catatanEdukasi->perawat->keterangan_evaluasi }}</textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="vertical-align-top">
                                                    <select name="hambatan_dalam_komunikasi_7"
                                                        id="hambatan_dalam_komunikasi"
                                                        class="form-control form-control-hambatan hambatan_dalam_komunikasi_7"
                                                        data-id="7" data-classname="hambatan_dalam_komunikasi_7">
                                                        <option value="">Pilih hambatan dalam komunikasi...
                                                        </option>
                                                        @foreach (hambatanKomunikasi() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->rehabilitas_medis->hambatan->option == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>

                                                    <div class="mt-2 hambatan_dalam_komunikasi_lainnya_7"
                                                        {{ $catatanEdukasi->rehabilitas_medis->hambatan->option == 'Ya' ? '' : 'hidden' }}>
                                                        <textarea name="hambatan_dalam_komunikasi_lainnya_7" id="hambatan_dalam_komunikasi_lainnya_7"
                                                            class="form-control hambatan_dalam_komunikasi_lainnya_7" rows="6"
                                                            placeholder="masukkan deskripsi hambatan">{{ $catatanEdukasi->rehabilitas_medis->hambatan->deskripsi }}</textarea>
                                                        <div
                                                            class="invalid-feedback error-hambatan_dalam_komunikasi_lainnya_7">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <strong>
                                                        <p>Rehabilitas Medis</p>
                                                    </strong>
                                                    <ol>
                                                        <li>
                                                            Fisioterapi
                                                            <textarea name="catatan_fisioterapi" id="catatan_fisioterapi" class="form-control catatan_fisioterapi"
                                                                rows="6" placeholder="masukkan deskripsi fisioterapi">{{ $catatanEdukasi->rehabilitas_medis->data->fisioterapi }}</textarea>
                                                        </li>
                                                        <li mt-2>
                                                            Psikolog
                                                            <textarea name="catatan_psikolog" id="catatan_psikolog" class="form-control catatan_psikolog" rows="6"
                                                                placeholder="masukkan deskripsi psikolog">{{ $catatanEdukasi->rehabilitas_medis->data->psikolog }}</textarea>
                                                        </li>
                                                    </ol>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <select name="catatan_metode_7" id="catatan_metode_7"
                                                        class="form-control catatan_metode_7">
                                                        <option value="">Pilih metode...</option>
                                                        @foreach (metode() as $item)
                                                            <option value="{{ $item }}"
                                                                {{ $catatanEdukasi->rehabilitas_medis->metode == $item ? 'selected' : '' }}>
                                                                {{ $item }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="vertical-align-top">
                                                    <input type="number" name="catatan_durasi_7"
                                                        class="form-control catatan_durasi_7" id="catatan_durasi_7"
                                                        placeholder="masukkan durasi"
                                                        value="{{ $catatanEdukasi->rehabilitas_medis->durasi }}">
                                                </td>
                                                <td class="vertical-align-top">
                                                    <textarea name="catatan_keterangan_evaluasi_7" id="catatan_keterangan_evaluasi_7"
                                                        class="form-control catatan_keterangan_evaluasi_7" rows="6"
                                                        placeholder="masukkan keterangan dan evaluasi">{{ $catatanEdukasi->rehabilitas_medis->keterangan_evaluasi }}</textarea>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Define your tab pans here -->

                    {{-- CATATAN RINGKASAN KONDISI --}}
                    <div class="tab-pane" id="ringkasanKondisi" role="tabpanel">
                        <div class="row mt-4">
                            {{-- Keadaan Pasien --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <table class="table table-hover table-stripped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="2" class="text-center">Keadaan Pasien</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">Bagian</th>
                                                <th class="text-center">Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>S</td>
                                                <td>
                                                    <textarea name="ringkasan_kondisi_s" id="ringkasan_kondisi_s" class="form-control ringkasan_kondisi_s"
                                                        rows="6" placeholder="masukkan kondisi pasien S">{{ $ringkasanKondisi->keadaan_pasien->s }}</textarea>
                                                    <div class="invalid-feedback error-ringkasan_kondisi_s"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>O</td>
                                                <td>
                                                    <textarea name="ringkasan_kondisi_o" id="ringkasan_kondisi_o" class="form-control ringkasan_kondisi_o"
                                                        rows="6" placeholder="masukkan kondisi pasien O">{{ $ringkasanKondisi->keadaan_pasien->o }}</textarea>
                                                    <div class="invalid-feedback error-ringkasan_kondisi_o"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                <td>
                                                    <textarea name="ringkasan_kondisi_a" id="ringkasan_kondisi_a" class="form-control ringkasan_kondisi_a"
                                                        rows="6" placeholder="masukkan kondisi pasien A">{{ $ringkasanKondisi->keadaan_pasien->a }}</textarea>
                                                    <div class="invalid-feedback error-ringkasan_kondisi_a"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>P</td>
                                                <td>
                                                    <textarea name="ringkasan_kondisi_p" id="ringkasan_kondisi_p" class="form-control ringkasan_kondisi_p"
                                                        rows="6" placeholder="masukkan kondisi pasien P">{{ $ringkasanKondisi->keadaan_pasien->p }}</textarea>
                                                    <div class="invalid-feedback error-ringkasan_kondisi_p"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            {{-- Tindak Lanjut Asuhan --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Tindak lanjut asuhan</label>
                                    <select name="tindak_lanjut_asuhan" id="tindak_lanjut_asuhan"
                                        class="form-control tindak_lanjut_asuhan">
                                        @foreach (tindakLanjutAsuhan() as $item)
                                            <option value="{{ $item }}"
                                                {{ $item == $ringkasanKondisi->tindak_lanjut_asuhan ? 'selected' : '' }}>
                                                {{ $item }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Cara Keluar --}}
                            <div
                                class="{{ in_array($ringkasanKondisi->cara_keluar->option, ['Diperbolehkan Pulang', 'Dirujuk', 'Pindah Perawatan', 'Rawat Inap']) ? 'col-sm-6' : 'col-sm-12' }} cara-keluar-1">
                                <div class="mb-3">
                                    <label class="form-label">Cara keluar</label>
                                    <select name="cara_keluar" id="cara_keluar" class="form-control cara_keluar">
                                        @foreach (caraKeluar() as $item)
                                            <option value="{{ $item }}"
                                                {{ $item == $ringkasanKondisi->cara_keluar->option ? 'selected' : '' }}>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-cara_keluar"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 cara-keluar-2"
                                {{ in_array($ringkasanKondisi->cara_keluar->option, ['Dirujuk', 'Pindah Perawatan', 'Rawat Inap']) ? '' : 'hidden' }}>
                                <div class="mb-3">
                                    <label class="form-label">Tujuan</label>
                                    <input type="text" class="form-control cara_keluar_lainnya"
                                        name="cara_keluar_lainnya" id="cara_keluar_lainnya" placeholder=""
                                        value="{{ $ringkasanKondisi->cara_keluar->deskripsi }}">
                                    <div class="invalid-feedback error-cara_keluar_lainnya"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 cara-keluar-3"
                                {{ $ringkasanKondisi->cara_keluar->option == 'Diperbolehkan Pulang' ? '' : 'hidden' }}>
                                <div class="mb-3">
                                    <label class="form-label text-white">.</label>
                                    <select name="cara_keluar_lainnya_3" id="cara_keluar_lainnya_3"
                                        class="form-control cara_keluar_lainnya_3">
                                        <option value="">Diperbolehkan untuk...</option>
                                        @foreach (opsiCaraKeluar() as $item)
                                            <option value="{{ $item }}"
                                                {{ $item == $ringkasanKondisi->cara_keluar->deskripsi ? 'selected' : '' }}>
                                                {{ $item }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback error-cara_keluar_lainnya_3"></div>
                                </div>
                            </div>

                            {{-- Kondisi Keluar --}}
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Kondisi keluar</label>
                                    <select name="ringkasan_kondisi_keluar" id="ringkasan_kondisi_keluar"
                                        class="form-control ringkasan_kondisi_keluar">
                                        <option value="">Pilih kondisi keluar...</option>
                                        @foreach (kondisiKeluar() as $item)
                                            <option value="{{ $item }}"
                                                {{ $item == $ringkasanKondisi->kondisi_keluar ? 'selected' : '' }}>
                                                {{ $item }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- BORDER --}}
                            <hr class="border-secondary border-opacity-50 mt-5">

                            {{-- TTD RINGKASAN --}}
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <div class="ttd-ringkasan-pasien center-qr">
                                    <h3 class="text-center">Pasien belum dipilih</h3>
                                </div>

                                <div class="ttd-ringkasan-dokter center-qr">
                                    <h3 class="text-center">Dokter belum dipilih</h3>
                                </div>
                            </div>

                        </div><!-- end row -->
                    </div>
                    <!-- END: RINGKASAN KONDISI-->

                    {{-- FILE SCAN --}}
                    <div class="tab-pane" id="fileScan" role="tabpanel">
                        <div class="row mt-4">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">File Scan Triase</label>
                                    <input type="file" name="file_triase" id="file_triase"
                                        class="form-control file_triase">
                                    <span class="small text-muted">kosongkan jika dokumen tidak ada perubahan</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">File Scan Asesmen</label>
                                    <input type="file" name="file_asesmen" id="file_asesmen"
                                        class="form-control file_asesmen">
                                    <span class="small text-muted">kosongkan jika dokumen tidak ada perubahan</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">File Scan Catatan Edukasi</label>
                                    <input type="file" name="file_edukasi" id="file_edukasi"
                                        class="form-control file_edukasi">
                                    <span class="small text-muted">kosongkan jika dokumen tidak ada perubahan</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">File Scan Ringkasan Kondisi</label>
                                    <input type="file" name="file_ringkasan" id="file_ringkasan"
                                        class="form-control file_ringkasan">
                                    <span class="small text-muted">kosongkan jika dokumen tidak ada perubahan</span>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div>
                    <!-- END: FILE SCAN-->

                    <!-- START: Define your controller buttons here-->
                    <div class="d-flex wizard justify-content-between flex-wrap gap-2 mt-3">
                        <div class="first"><a href="javascript:void(0);" class="btn btn-secondary disabled">
                                Awal
                            </a>
                        </div>
                        <div class="d-flex">
                            <div class="previous me-2"><a href="javascript:void(0);"
                                    class="btn btn-secondary disabled">
                                    <i class="fa-thin fa-left"></i></a></div>
                            <div class="next"><a href="javascript:void(0);" class="btn btn-secondary">
                                    <i class="fa-thin fa-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="last"><a href="javascript:void(0);"
                                class="btn btn-secondary btn-update">Simpan</a></div>
                        {{-- class="btn btn-secondary btn-finish">Simpan</a></div> --}}
                    </div><!-- END: Define your controller buttons here-->
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </form>
</div>


<script>
    new Wizard('#basicwizard', {
        validate: true,
        progress: true,
    });

    // let qrCodeSize = 128;

    // DETAIL PASIEN dan DOKTER
    $(document).ready(function() {
        var currentDate = new Date();
        $('#pasien_id, #dokter_id').trigger('change');

        // document.querySelector('#tanggal_triase').addEventListener('changeDate', function(event) {
        //     console.log('asa')
        //     const selectedDate = event.detail.date;

        //     if (selectedDate > currentDate) {
        //         alert('Tanggal tidak valid. Harap masukkan tanggal yang tidak lebih dari hari ini.');
        //         this.value = ''; // Mengosongkan input jika tanggal tidak valid
        //     }
        // });
    });
    $('#pasien_id').on('change', function() {
        let pasienId = $(this).find(":selected").val()
        if (pasienId) {
            $.get("pasien/detail/" + pasienId, function(data) {
                $('.data-pasien').prop('hidden', false)
                $('.pasien-title').text('Data Pasien | ' + data.nama)
                $('#nomor_rm').val(data.nomor_rm)
                $('#nik').val(data.nik)
                $('#tempat_lahir').val(data.tempat_lahir)
                $('#tanggal_lahir').val(data.tanggal_lahir)
                $('#jenis_kelamin').val(data.jenis_kelamin)

                // TTD ASESMEN
                let ttd_pasien_asesmen = '<p class="text-center">Pasien</p>';
                ttd_pasien_asesmen += '<p id="qrcode-pasien-asesmen"></p>';
                ttd_pasien_asesmen +=
                    '<h4 class="text-center" style="border-bottom: 2px solid #000; padding-bottom: 5px">' +
                    data.nama + '</h4>';
                ttd_pasien_asesmen += '<p class="small text-center" style="margin-top: -0.2rem">' + data
                    .nik +
                    '</p>';
                $('.ttd-asesmen-pasien').empty().append(ttd_pasien_asesmen)

                let qrCodePasien = new QRCodeStyling({
                    width: 128,
                    height: 128,
                    data: data.nama,
                    image: "{{ asset('assets/images/logo.png') }}",
                    dotsOptions: {
                        color: "#000",
                        type: "rounded"
                    },
                    backgroundOptions: {
                        color: "#fff"
                    },
                    imageOptions: {
                        crossOrigin: "anonymous",
                        margin: 2
                    }
                });

                qrCodePasien.append(document.getElementById("qrcode-pasien-asesmen"));

                // TTD EDUKASI
                let qrCodeEdukasiPasien = new QRCodeStyling({
                    width: 128,
                    height: 128,
                    data: data.nama,
                    image: "{{ asset('assets/images/logo.png') }}",
                    dotsOptions: {
                        color: "#000",
                        type: "rounded"
                    },
                    backgroundOptions: {
                        color: "#fff"
                    },
                    imageOptions: {
                        crossOrigin: "anonymous",
                        margin: 2
                    }
                });

                qrCodeEdukasiPasien.append(document.getElementById("ttd-edukasi-pasien"));

                // TTD RINGKASAN
                let ttd_pasien_ringkasan = '<p class="text-center">Pasien</p>';
                ttd_pasien_ringkasan += '<p id="qrcode-pasien-ringkasan"></p>';
                ttd_pasien_ringkasan +=
                    '<h4 class="text-center" style="border-bottom: 2px solid #000; padding-bottom: 5px">' +
                    data.nama + '</h4>';
                ttd_pasien_ringkasan += '<p class="small text-center" style="margin-top: -0.2rem">' +
                    data
                    .nik +
                    '</p>';
                $('.ttd-ringkasan-pasien').empty().append(ttd_pasien_ringkasan)

                let qrCodeRingkasanPasien = new QRCodeStyling({
                    width: 128,
                    height: 128,
                    data: data.nama,
                    image: "{{ asset('assets/images/logo.png') }}",
                    dotsOptions: {
                        color: "#000",
                        type: "rounded"
                    },
                    backgroundOptions: {
                        color: "#fff"
                    },
                    imageOptions: {
                        crossOrigin: "anonymous",
                        margin: 2
                    }
                });

                qrCodeRingkasanPasien.append(document.getElementById("qrcode-pasien-ringkasan"));
            });
        } else {
            $('.data-pasien').prop('hidden', true)
            $('.pasien-title').text('Data Pasien')
            $('#nomor_rm').val('')
            $('#nik').val('')
            $('#tempat_lahir').val('')
            $('#tanggal_lahir').val('')
            $('#jenis_kelamin').val('')

            let ttd_dokter = '<h3 class="text-center">Pasien belum dipilih</h3>';
            $('.ttd-asesmen-pasien, .ttd-ringkasan-pasien').append(ttd_dokter);
        }
    })

    $('#dokter_id').on('change', function() {
        let dokterId = $(this).find(":selected").val()
        if (dokterId) {
            $.get("dokter/detail/" + dokterId, function(data) {
                $('.data-dokter').prop('hidden', false)
                $('#sip').val(data.sip)
                $('#tempat_lahir_dokter').val(data.tempat_lahir)
                $('#tanggal_lahir_dokter').val(data.tanggal_lahir)
                $('#jenis_kelamin_dokter').val(data.jenis_kelamin)

                $('#dokter_asesmen').val(data.nama)

                // TTD TRIASE
                let ttd_dokter = '<p class="text-center">Dokter</p>';
                ttd_dokter += '<p id="qrcode"></p>';
                ttd_dokter +=
                    '<h4 class="text-center" style="border-bottom: 2px solid #000; padding-bottom: 5px">' +
                    data.nama + '</h4>';
                ttd_dokter += '<p class="small text-center" style="margin-top: -0.2rem">' + data.sip +
                    '</p>';
                $('.ttd-dokter').empty().append(ttd_dokter)

                let qrCodeDokter = new QRCodeStyling({
                    width: 128,
                    height: 128,
                    data: data.nama,
                    image: "{{ asset('assets/images/logo.png') }}",
                    dotsOptions: {
                        color: "#000",
                        type: "rounded"
                    },
                    backgroundOptions: {
                        color: "#fff"
                    },
                    imageOptions: {
                        crossOrigin: "anonymous",
                        margin: 2
                    }
                });

                qrCodeDokter.append(document.getElementById("qrcode"));

                // TTD ASESMEN
                let ttd_dokter_asesmen = '<p class="text-center">Dokter</p>';
                ttd_dokter_asesmen += '<p id="qrcode-dokter-asesmen"></p>';
                ttd_dokter_asesmen +=
                    '<h4 class="text-center" style="border-bottom: 2px solid #000; padding-bottom: 5px">' +
                    data.nama + '</h4>';
                ttd_dokter_asesmen += '<p class="small text-center" style="margin-top: -0.2rem">' + data
                    .sip +
                    '</p>';
                $('.ttd-asesmen-dokter').empty().append(ttd_dokter_asesmen)

                let qrCodeDokterAsesmen = new QRCodeStyling({
                    width: 128,
                    height: 128,
                    data: data.nama,
                    image: "{{ asset('assets/images/logo.png') }}",
                    dotsOptions: {
                        color: "#000",
                        type: "rounded"
                    },
                    backgroundOptions: {
                        color: "#fff"
                    },
                    imageOptions: {
                        crossOrigin: "anonymous",
                        margin: 2
                    }
                });

                qrCodeDokterAsesmen.append(document.getElementById("qrcode-dokter-asesmen"));

                let qrCodeDokterEdukasi = new QRCodeStyling({
                    width: 128,
                    height: 128,
                    data: data.nama,
                    image: "{{ asset('assets/images/logo.png') }}",
                    dotsOptions: {
                        color: "#000",
                        type: "rounded"
                    },
                    backgroundOptions: {
                        color: "#fff"
                    },
                    imageOptions: {
                        crossOrigin: "anonymous",
                        margin: 2
                    }
                });

                qrCodeDokterEdukasi.append(document.getElementById("ttd-edukasi-dokter"));

                // TTD RINGKASAN
                let ttd_ringkasan_dokter = '<p class="text-center">Dokter</p>';
                ttd_ringkasan_dokter += '<p id="qrcode-ringkasan-dokter"></p>';
                ttd_ringkasan_dokter +=
                    '<h4 class="text-center" style="border-bottom: 2px solid #000; padding-bottom: 5px">' +
                    data.nama + '</h4>';
                ttd_ringkasan_dokter += '<p class="small text-center" style="margin-top: -0.2rem">' +
                    data.sip +
                    '</p>';
                $('.ttd-ringkasan-dokter').empty().append(ttd_ringkasan_dokter)

                let qrCodeRingkasanDokter = new QRCodeStyling({
                    width: 128,
                    height: 128,
                    data: data.nama,
                    image: "{{ asset('assets/images/logo.png') }}",
                    dotsOptions: {
                        color: "#000",
                        type: "rounded"
                    },
                    backgroundOptions: {
                        color: "#fff"
                    },
                    imageOptions: {
                        crossOrigin: "anonymous",
                        margin: 2
                    }
                });

                qrCodeRingkasanDokter.append(document.getElementById("qrcode-ringkasan-dokter"));
            });
        } else {
            $('.ttd-dokter').empty();
            $('.data-dokter').prop('hidden', true)
            $('#sip').val('')
            $('#tempat_lahir_dokter').val('')
            $('#tanggal_lahir_dokter').val('')
            $('#jenis_kelamin_dokter').val('')

            $('#dokter_asesmen').val('')

            let ttd_dokter = '<h3 class="text-center">Dokter belum dipilih</h3>';
            $('.ttd-dokter, .ttd-asesmen-dokter, .ttd-ringkasan-dokter').append(ttd_dokter);
        }
    })
    // END

    // TRIASE

    var currentDate = new Date();
    new Datepicker(document.querySelector('#tanggal_triase'), {
        buttonClass: 'btn',
        // format: 'dd M yyyy',
        autohide: true,
        maxDate: currentDate,
    });

    $('#jam_triase').flatpickr({
        enableTime: true,
        noCalendar: true
    });

    $('#cara_datang').on('change', function() {
        let caraDatang = $(this).find(":selected").val()
        if (caraDatang != '') {
            if (caraDatang == 'Lain-lain') {
                $('.cara-datang-1').removeClass('col-sm-12').addClass('col-sm-6');
                $('.cara-datang-2').prop('hidden', false);
            } else {
                $('.cara-datang-2').prop('hidden', true);
                $('.cara-datang-1').removeClass('col-sm-6').addClass('col-sm-12');
            }
        } else {
            $('.cara-datang-2').prop('hidden', true);
            $('.cara-datang-1').removeClass('col-sm-6').addClass('col-sm-12');
        }
    });

    $('#transportasi').on('change', function() {
        let transportasi = $(this).find(":selected").val()
        if (transportasi != '') {
            if (transportasi == 'Lain-lain') {
                $('.transportasi-1').removeClass('col-sm-12').addClass('col-sm-6');
                $('.transportasi-2').prop('hidden', false);
            } else {
                $('.transportasi-2').prop('hidden', true);
                $('.transportasi-1').removeClass('col-sm-6').addClass('col-sm-12');
            }
        } else {
            $('.transportasi-2').prop('hidden', true);
            $('.transportasi-1').removeClass('col-sm-6').addClass('col-sm-12');
        }
    });
    // END TRIASE


    // START ASESMEN
    var currentDate = new Date();
    new Datepicker(document.querySelector('#tanggal_asesmen'), {
        buttonClass: 'btn',
        // format: 'dd M yyyy',
        autohide: true,
        maxDate: currentDate,
    });

    $('#jam_kedatangan_asesmen, #waktu_pengkajian').flatpickr({
        enableTime: true,
        noCalendar: true
    });

    $('#rujukan').on('change', function() {
        let rujukan = $(this).find(":selected").val()
        if (rujukan != '') {
            if (rujukan == 'Ya') {
                $('.rujukan-1').removeClass('col-sm-12').addClass('col-sm-6');
                $('.rujukan-2').prop('hidden', false);
            } else {
                $('.rujukan-2').prop('hidden', true);
                $('.rujukan-1').removeClass('col-sm-6').addClass('col-sm-12');
            }
        } else {
            $('.rujukan-2').prop('hidden', true);
            $('.rujukan-1').removeClass('col-sm-6').addClass('col-sm-12');
        }
    });

    // ALERGI
    $('#riwayat_alergi').on('change', function() {
        let riwayatAlergi = $(this).find(":selected").val()
        if (riwayatAlergi != '') {
            if (riwayatAlergi == 'Ya') {
                $('.riwayat_alergi-2').prop('hidden', false);
            } else {
                $('.riwayat_alergi-2').prop('hidden', true);
            }
        } else {
            $('.riwayat_alergi-2').prop('hidden', true);
        }
    });

    // var columnIndex = 1;
    $('.btn-add-item').on('click', function() {
        // columnIndex++;
        var length = $('#tableAlergi tbody').find('.tr-alergi').length
        var columnIndex = length + 1;

        if (length == 0) {
            $('#tableAlergi tbody').empty();
        }


        let tr_list = '<tr class="tr-alergi">';
        // tr_list += '<td>' + columnIndex + '</td>';
        tr_list += '<td>';
        tr_list += '<select name="alergi_terhadap[]" id="alergi_terhadap_' + columnIndex +
            '" class="form-control alergi_terhadap_1">';
        tr_list += '<option value="">Pilih alergi terhadap...</option>';
        tr_list += '<option value="Obat-obatan">Obat-obatan</option>';
        tr_list += '<option value="Makanan">Makanan</option>';
        tr_list += '<option value="Lainnya">Lainnya</option>';
        tr_list += '</select>';
        tr_list += '<div class="invalid-feedback error-alergi_terhadap_' + columnIndex + '"></div>';
        tr_list += '</td>';
        tr_list += '<td>';
        tr_list += '<input type="text" name="jenis_alergi[]" id="jenis_alergi_' + columnIndex +
            '" class="form-control jenis_alergi_' + columnIndex + '" placeholder="masukkan jenis alergi">';
        tr_list += '<div class="invalid-feedback error-jenis_alergi_' + columnIndex + '"></div>';
        tr_list += '</td>';
        tr_list += '<td>';
        tr_list += '<input type="text" name="tipe_reaksi[]" id="tipe_reaksi_' + columnIndex +
            '" class="form-control tipe_reaksi_' + columnIndex + '" placeholder="masukkan jenis alergi">';
        tr_list += '<div class="invalid-feedback error-tipe_reaksi_' + columnIndex + '"></div>';
        tr_list += '</td>';
        tr_list += '<td class="text-center">';
        tr_list += '<button type="button" class="btn btn-sm btn-danger btn-remove-item">';
        tr_list += '<i class="fas fa-trash-alt"></i>';
        tr_list += '</button>';
        tr_list += '</td>';
        tr_list += '</tr>';

        $('#tableAlergi tbody').append(tr_list);
    });

    $('body').on('click', '.btn-remove-item', function() {
        $(this).closest('tr').remove()

        var length = $('#tableAlergi tbody').find('.tr-alergi').length
        if (length == 0) {
            let tr_list = '<tr>' +
                '<td class="text-center" colspan=4>Tidak ada data pada tabel ini.</td>'
            '</tr>';
            $('#tableAlergi tbody').append(tr_list);
        }
    });
    // END Alergi

    // Pengkajian Nyeri
    $('#nyeri_asesmen').on('change', function() {
        let nyeriAsesmen = $(this).find(":selected").val()
        if (nyeriAsesmen != '') {
            if (nyeriAsesmen == 'Ya') {
                $('.lokasi_nyeri').prop('hidden', false);
                $('.intensitas_nyeri').prop('hidden', false);
                $('.jenis_nyeri').prop('hidden', false);
            } else {
                $('.lokasi_nyeri').prop('hidden', true);
                $('.intensitas_nyeri').prop('hidden', true);
                $('.jenis_nyeri').prop('hidden', true);
            }
        } else {
            $('.lokasi_nyeri').prop('hidden', true);
            $('.intensitas_nyeri').prop('hidden', true);
            $('.jenis_nyeri').prop('hidden', true);
        }
    });

    // END ASESMEN

    // CATATAN EDUKASI
    var currentDate = new Date();
    new Datepicker(document.querySelector('#tanggal_edukasi'), {
        buttonClass: 'btn',
        // format: 'dd M yyyy',
        autohide: true,
        maxDate: currentDate,
    });

    // hambatan
    $('.form-control-hambatan').on('change', function() {
        let id = $(this).data('id');
        let className = $(this).data('classname');
        let hambatan = $('.' + className).find(":selected").val()
        console.log(hambatan)
        if (hambatan != '') {
            if (hambatan == 'Ya') {
                $('.hambatan_dalam_komunikasi_lainnya_' + id).prop('hidden', false);
            } else {
                $('.hambatan_dalam_komunikasi_lainnya_' + id).prop('hidden', true);
            }
        } else {
            $('.hambatan_dalam_komunikasi_lainnya_' + id).prop('hidden', true);
        }
    });
    // END CATATAN EDUKASI

    // START RINGKASAN
    $('#cara_keluar').on('change', function() {
        let caraKeluar = $(this).find(":selected").val()
        if (caraKeluar != '') {
            if (caraKeluar == 'Diperbolehkan Pulang') {
                $('.cara-keluar-1').removeClass('col-sm-12').addClass('col-sm-6');
                $('.cara-keluar-3').prop('hidden', false);
                $('.cara-keluar-2').prop('hidden', true);
            } else if (caraKeluar == 'Kabur' || caraKeluar == 'Permintaan Sendiri') {
                $('.cara-keluar-1').removeClass('col-sm-6').addClass('col-sm-12');
                $('.cara-keluar-2, .cara-keluar-3').prop('hidden', true);
            } else {
                $('.cara-keluar-1').removeClass('col-sm-12').addClass('col-sm-6');
                $('.cara-keluar-3').prop('hidden', true);
                $('.cara-keluar-2').prop('hidden', false);
            }
        } else {
            $('.cara-keluar-2, .cara-keluar-3').prop('hidden', true);
        }
    });
    // END RINGKASAN
</script>
