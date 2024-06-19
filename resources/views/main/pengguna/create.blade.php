<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Tambah Pengguna</h5>
                <button type="button" class="btn btn-shadow btn-primary btn-data">
                    <i class="fa-regular fa-hand-back-point-left"></i> List Data
                </button>
            </div>
        </div>
        <div class="card-body">
            <form id="formAdd" autocomplete="off">
                <div class="mb-3">
                    <label class="form-label" for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control nama" id="nama"
                        placeholder="masukkan nama pengguna">
                    <div class="invalid-feedback error-nama"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" class="form-control username" id="username"
                        placeholder="masukkan username">
                    <div class="invalid-feedback error-username"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="nomor_telp">Nomor telp.</label>
                    <input type="text" name="nomor_telp" class="form-control nomor_telp" id="nomor_telp"
                        placeholder="masukkan nomor telp">
                    <div class="invalid-feedback error-nomor_telp"></div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password <span class="small text-muted">(Default password,
                            dapat diubah oleh pengguna setelah login)</span></label>
                    <input type="text" name="password" class="form-control password" id="password"
                        placeholder="masukkan password" value="12345678" disabled>
                    <div class="invalid-feedback error-password"></div>
                </div>
            </form>
        </div>
        <div class="card-footer text-end">
            <button type="button" class="btn btn-shadow btn-primary btn-save">
                Simpan
            </button>
        </div>
    </div>
</div>
