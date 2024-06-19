<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Ubah Pengguna</h5>
                <button type="button" class="btn btn-shadow btn-primary btn-data">
                    <i class="fa-regular fa-hand-back-point-left"></i> List Data
                </button>
            </div>
        </div>
        <div class="card-body">
            <form id="formUpdate" autocomplete="off">
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="mb-3">
                    <label class="form-label" for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control nama" id="nama"
                        placeholder="masukkan nama pengguna" value="{{ $user->nama }}">
                    <div class="invalid-feedback error-nama"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" class="form-control username" id="username"
                        placeholder="masukkan username" value="{{ $user->username }}">
                    <div class="invalid-feedback error-username"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="nomor_telp">Nomor telp.</label>
                    <input type="text" name="nomor_telp" class="form-control nomor_telp" id="nomor_telp"
                        placeholder="masukkan nomor telp" value="{{ $user->nomor_telp }}">
                    <div class="invalid-feedback error-nomor_telp"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Aktif</option>
                        <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                    <div class="invalid-feedback error-status"></div>
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
