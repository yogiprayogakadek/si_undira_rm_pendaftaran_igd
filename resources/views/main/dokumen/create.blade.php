<div class="col-sm-12" id="basicwizard">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0 pasien-title">Data Pasien</h5>
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

                {{-- Triase --}}
                <li class="nav-item" data-target-form="#triaseForm" role="presentation">
                    <a href="#triase" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn"
                        aria-selected="false" role="tab" tabindex="-1">
                        <i class="ph-duotone ph-map-pin"></i> <span class="d-none d-sm-inline">Triase</span>
                    </a>
                </li>
                <!-- end -->

                {{-- Asesmen --}}
                <li class="nav-item" data-target-form="#asesmenForm" role="presentation">
                    <a href="#asesmen" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn"
                        aria-selected="false" role="tab" tabindex="-1">
                        <i class="ph-duotone ph-graduation-cap"></i>
                        <span class="d-none d-sm-inline">Asesmen</span>
                    </a>
                </li>
                <!-- end -->

                {{-- Catatan Edukasi --}}
                <li class="nav-item" data-target-form="#catatanEdukasiForm" role="presentation">
                    <a href="#catatanEdukasi" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn"
                        aria-selected="false" role="tab" tabindex="-1">
                        <i class="ph-duotone ph-check-circle"></i>
                        <span class="d-none d-sm-inline">Catatan Edukasi</span>
                    </a>
                </li>
                <!-- end -->

                {{-- Ringkasan --}}
                <li class="nav-item" data-target-form="#ringkasanKondisiForm" role="presentation">
                    <a href="#ringkasanKondisi" data-bs-toggle="tab" data-toggle="tab" class="nav-link icon-btn"
                        aria-selected="false" role="tab" tabindex="-1">
                        <i class="ph-duotone ph-check-circle"></i>
                        <span class="d-none d-sm-inline">Ringkasan Kondisi</span>
                    </a>
                </li>
                <!-- end -->
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="tab-content"><!-- START: Define your progress bar here -->
                <div id="bar" class="progress mb-3" style="height: 7px">
                    <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"
                        style="width: 25%;"></div>
                </div>
                <!-- END: Define your progress bar here -->

                <!-- START: PASIEN -->
                <div class="tab-pane active show" id="pasienDetail" role="tabpanel">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama</label>
                                <select name="pasien_id" id="pasien_id" class="form-control">
                                    @foreach ($pasien as $key => $item)
                                        <option value="{{ $key }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 data-pasien" hidden>
                                <label class="form-label" for="nomor_rm">No. Rekam Medis</label>
                                <input type="text" name="nomor_rm" class="form-control nomor_rm" id="nomor_rm"
                                    readonly placeholder="masukkan nama pasien">
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
                <div class="tab-pane active show" id="pasienDetail" role="tabpanel">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama</label>
                                <select name="pasien_id" id="pasien_id" class="form-control">
                                    @foreach ($pasien as $key => $item)
                                        <option value="{{ $key }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 data-pasien" hidden>
                                <label class="form-label" for="sip">SIP</label>
                                <input type="text" name="sip" class="form-control sip" id="sip"
                                    readonly placeholder="masukkan sip pasien">
                                <div class="invalid-feedback error-sip"></div>
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
                <!-- end DOKTER -->

                {{-- TRIASE --}}
                <div class="tab-pane" id="triase" role="tabpanel">
                    <div class="row mt-4">
                        {{-- Cara Datang --}}
                        <div class="col-sm-12 cara-datang-1">
                            <div class="mb-3">
                                <label class="form-label">Cara Datang</label>
                                <select name="cara_datang" id="cara_datang" class="form-control cara_datang">
                                    <option value="">Pilih cara datang...</option>
                                    <option value="Datang Sendiri">Datang Sendiri</option>
                                    <option value="Rujukan">Rujukan</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                                <div class="invalid-feedback error-cara_datang"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 cara-datang-2" hidden>
                            <div class="mb-3">
                                <label class="form-label text-white">.</label>
                                <input type="text" class="form-control cara_datang_lainnya"
                                    name="cara_datang_lainnya" id="cara_datang_lainnya"
                                    placeholder="masukkan cara datang">
                                <div class="invalid-feedback error-cara_datang_lainnya"></div>
                            </div>
                        </div>

                        {{-- Transportasi --}}
                        <div class="col-sm-12 transportasi-1">
                            <div class="mb-3">
                                <label class="form-label">Transportasi</label>
                                <select name="transportasi" id="transportasi" class="form-control transportasi">
                                    <option value="">Pilih transportasi...</option>
                                    <option value="Ambulance">Ambulance</option>
                                    <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                                <div class="invalid-feedback error-transportasi"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 transportasi-2" hidden>
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
                                    <option value="">Pilih jenis kasus...</option>
                                    <option value="Trauma">Trauma</option>
                                    <option value="Non Trauma">Non Trauma</option>
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
                                    placeholder="masukkan tanggal">
                                <div class="invalid-feedback error-tanggal_triase"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Jam</label>
                                <input type="text" name="jam_triase"
                                    class="form-control jam_triase flatpickr-input" id="jam_triase"
                                    placeholder="masukkan jam" readonly="readonly">
                                <div class="invalid-feedback error-jam_triase"></div>
                            </div>
                        </div>

                        {{-- Keluhan utama --}}
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Keluhan Utama</label>
                                <textarea name="keluhan_utama" id="keluhan_utama" class="form-control keluhan_utama" rows="6"
                                    placeholder="masukkan keluhan utama"></textarea>
                                <div class="invalid-feedback error-keluhan_utama"></div>
                            </div>
                        </div>

                        {{-- Respon --}}
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Respon</label>
                                <select name="respon" id="respon" class="form-control respon">
                                    <option value="">Pilih respon...</option>
                                    <option value="Alert">Alert</option>
                                    <option value="Verbal">Verbal</option>
                                    <option value="Pain">Pain</option>
                                    <option value="Unrespon">Unrespon</option>
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
                                    <option value="Bebas">Bebas</option>
                                    <option value="Gurgling">Gurgling</option>
                                    <option value="Stridor">Stridor</option>
                                    <option value="Wheezing">Wheezing</option>
                                    <option value="Ronchi">Ronchi</option>
                                    <option value="Terintubasi">Terintubasi</option>
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
                                    <option value="Spontan">Spontan</option>
                                    <option value="Tachipneu">Tachipneu</option>
                                    <option value="Dispneu">Dispneu</option>
                                    <option value="Apneu">Apneu</option>
                                    <option value="Ventilasi Mekanik">Ventilasi Mekanik</option>
                                    <option value="Memakai BVM">Memakai BVM</option>
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
                                                    <option value="Kuat">Kuat</option>
                                                    <option value="Lemah">Lemah</option>
                                                </select>
                                                <div class="invalid-feedback error-nadi"></div>
                                            </td>
                                            <td>
                                                <select name="crt" id="crt" class="form-control crt">
                                                    <option value="">Pilih CRT...</option>
                                                    <option value='< 2"'>
                                                        < 2"</option>
                                                    <option value='> 2"'>> 2"</option>
                                                </select>
                                                <div class="invalid-feedback error-crt"></div>
                                            </td>
                                            <td>
                                                <input type="text" name="saturasi_oksigen"
                                                    class="form-control saturasi_oksigen" id="saturasi_oksigen"
                                                    placeholder="masukkan saturasi oksigen">
                                                <div class="invalid-feedback error-saturasi_oksigen"></div>
                                            </td>
                                            <td>
                                                <select name="warna_kulit" id="warna_kulit"
                                                    class="form-control warna_kulit">
                                                    <option value="">Pilih warna kulit...</option>
                                                    <option value="Normal">Normal</option>
                                                    <option value="Pucat">Pucat</option>
                                                    <option value="Sianosis">Sianosis</option>
                                                </select>
                                                <div class="invalid-feedback error-warna_kulit"></div>
                                            </td>
                                            <td>
                                                <select name="perdarahan" id="perdarahan"
                                                    class="form-control perdarahan">
                                                    <option value="">Pilih perdarahan...</option>
                                                    <option value="Tidak ada">Tidak ada</option>
                                                    <option value="Terkontrol">Terkontrol</option>
                                                    <option value="Tidak Terkontrol">Tidak Terkontrol</option>
                                                </select>
                                                <div class="invalid-feedback error-perdarahan"></div>
                                            </td>
                                            <td>
                                                <select name="tugor_kulit" id="tugor_kulit"
                                                    class="form-control tugor_kulit">
                                                    <option value="">Pilih tugor kulit...</option>
                                                    <option value="Baik">Baik</option>
                                                    <option value="Buruk">Buruk</option>
                                                </select>
                                                <div class="invalid-feedback error-tugor_kulit"></div>
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
                                                    class="form-control gcs_e" placeholder="masukkan nilai gcs_e">
                                                <div class="invalid-feedback error-gcs_e"></div>
                                            </td>
                                            <td>
                                                <input type="number" name="gcs_v" id="gcs_v"
                                                    class="form-control gcs_v" placeholder="masukkan nilai gcs_v">
                                                <div class="invalid-feedback error-gcs_v"></div>
                                            </td>
                                            <td>
                                                <input type="number" name="gcs_m" id="gcs_m"
                                                    class="form-control gcs_m" placeholder="masukkan nilai gcs_m">
                                                <div class="invalid-feedback error-gcs_m"></div>
                                            </td>
                                            <td>
                                                <select name="pupil" id="pupil" class="form-control pupil">
                                                    <option value="">Pilih pupil...</option>
                                                    <option value="Isokor">Isokor</option>
                                                    <option value="Anisokor">Anisokor</option>
                                                    <option value="Pin Point">Pin Point</option>
                                                    <option value="Midriasis">Midriasis</option>
                                                </select>
                                                <div class="invalid-feedback error-pupil"></div>
                                            </td>
                                            <td>
                                                <input type="text" name="reflek_pupil" id="reflek_pupil"
                                                    class="form-control reflek_pupil"
                                                    placeholder="masukkan reflek pupil">
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
                                                value="Gawar Darurat" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked"><i
                                                    class="fa-sharp fa-solid fa-square fa-2xl"
                                                    style="color: #FFD43B;"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="mb-3">
                                        <div class="form-check mb-2">
                                            <input class="kategori_triase" type="radio" name="kategori_triase"
                                                value="Gawat Tidak Darurat" id="flexCheckChecked">
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
                                                value="Tidak Gawat Tidak Darurat" id="flexCheckChecked">
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
                                                value="Meninggal" id="flexCheckChecked">
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
                    </div>
                </div>
                <!-- end TRIASE -->

                {{-- ASESME --}}
                <div class="tab-pane" id="asesmen" role="tabpanel">
                    <form id="educationForm" method="post" action="#" class="was-validated">
                        <div class="text-center">
                            <h3 class="mb-2">Tell us about your education</h3><small class="text-muted">Let us
                                know
                                your name and email address. Use an address you don't mind other users contacting
                                you
                                at</small>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="mb-3"><label class="form-label" for="schoolName">School
                                        Name</label>
                                    <input type="text" class="form-control" id="schoolName"
                                        placeholder="enter your school name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3"><label class="form-label" for="schoolLocation">School
                                        Location</label> <input type="text" class="form-control"
                                        id="schoolLocation" placeholder="enter your school location"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end ASESMEN -->

                {{-- CATATAN EDUKASI --}}
                <div class="tab-pane" id="catatanEdukasi" role="tabpanel">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center"><i class="ph-duotone ph-gift f-50 text-danger"></i>
                                <h3 class="mt-4 mb-3">Thank you !</h3>
                                <div class="mb-3">
                                    <div class="form-check d-inline-block"><input type="checkbox"
                                            class="form-check-input" id="customCheck1"> <label
                                            class="form-check-label" for="customCheck1">I agree with the Terms and
                                            Conditions</label></div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
                <!-- END: Define your tab pans here -->

                {{-- CATATM RINGKASAN KONDISI --}}
                <div class="tab-pane" id="ringkasanKondisi" role="tabpanel">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center"><i class="ph-duotone ph-gift f-50 text-danger"></i>
                                <h3 class="mt-4 mb-3">Thank you !</h3>
                                <div class="mb-3">
                                    <div class="form-check d-inline-block"><input type="checkbox"
                                            class="form-check-input" id="customCheck1"> <label
                                            class="form-check-label" for="customCheck1">I agree with the Terms and
                                            Conditions</label></div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
                <!-- END: RINGKASAN KONDISI-->


                <!-- START: Define your controller buttons here-->
                <div class="d-flex wizard justify-content-between flex-wrap gap-2 mt-3">
                    <div class="first"><a href="javascript:void(0);" class="btn btn-secondary disabled">First</a>
                    </div>
                    <div class="d-flex">
                        <div class="previous me-2"><a href="javascript:void(0);"
                                class="btn btn-secondary disabled">Back To Previous</a></div>
                        <div class="next"><a href="javascript:void(0);" class="btn btn-secondary">Next Step</a>
                        </div>
                    </div>
                    <div class="last"><a href="javascript:void(0);" class="btn btn-secondary">Finish</a></div>
                </div><!-- END: Define your controller buttons here-->
            </div>
        </div>
    </div>
</div>


<script>
    new Wizard('#basicwizard', {
        validate: true,
        progress: true,
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
            });
        } else {
            $('.data-pasien').prop('hidden', true)
            $('.pasien-title').text('Data Pasien')
            $('#nomor_rm').val('')
            $('#nik').val('')
            $('#tempat_lahir').val('')
            $('#tanggal_lahir').val('')
            $('#jenis_kelamin').val('')
        }
    })

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
</script>
