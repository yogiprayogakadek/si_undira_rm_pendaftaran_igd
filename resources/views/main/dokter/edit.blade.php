<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Ubah Dokter</h5>
                <button type="button" class="btn btn-shadow btn-primary btn-data">
                    <i class="fa-regular fa-hand-back-point-left"></i> List Data
                </button>
            </div>
        </div>
        <div class="card-body">
            <form id="formUpdate" autocomplete="off">
                <input type="hidden" name="id" value="{{ $dokter->id }}">
                <div class="mb-3">
                    <label class="form-label" for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control nama" id="nama"
                        placeholder="masukkan nama dokter" value="{{ $dokter->nama }}">
                    <div class="invalid-feedback error-nama"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="sip">SIP (Surat Izin Praktik)</label>
                    <input type="text" name="sip" class="form-control sip" id="sip"
                        placeholder="masukkan sip dokter" value="{{ $dokter->sip }}">
                    <div class="invalid-feedback error-sip"></div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control tempat_lahir" id="tempat_lahir"
                            placeholder="masukkan tempat lahir dokter" value="{{ $dokter->tempat_lahir }}">
                        <div class="invalid-feedback error-tempat_lahir"></div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir" class="form-control tanggal_lahir datepicker-input"
                            id="tanggal_lahir" placeholder="masukkan tanggal lahir dokter"
                            value="{{ date_format(date_create($dokter->tanggal_lahir), 'm-d-Y') }}">
                        <div class="invalid-feedback error-tanggal_lahir"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control jenis_kelamin">
                        <option value="">Pilih jenis kelamin...</option>
                        <option value="Laki-laki" {{ $dokter->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-laki</option>
                        <option value="Perempuan" {{ $dokter->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan</option>
                    </select>
                    <div class="invalid-feedback error-jenis_kelamin"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control alamat" rows="5" placeholder="masukkan alamat dokter">{{ $dokter->alamat }}</textarea>
                    <div class="invalid-feedback error-alamat"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="nomor_telp">Nomor telp.</label>
                    <input type="text" name="nomor_telp" class="form-control nomor_telp" id="nomor_telp"
                        placeholder="masukkan nomor telp dokter" value="{{ $dokter->nomor_telp }}">
                    <div class="invalid-feedback error-nomor_telp"></div>
                </div>
            </form>
        </div>
        <div class="card-footer text-end">
            <button type="button" class="btn btn-shadow btn-primary btn-update">
                Simpan
            </button>
        </div>
    </div>
</div>

<script>
    (function() {
        var currentDate = new Date();
        const d_week = new Datepicker(document.querySelector('#tanggal_lahir'), {
            buttonClass: 'btn',
            // format: 'dd M yyyy',
            autohide: true,
            maxDate: currentDate,
        });
    })();
</script>
