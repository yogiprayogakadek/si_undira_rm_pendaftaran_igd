<!-- Modal -->
<div class="modal fade" id="password-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formUpdate">
                    <div class="form-group password mb-3">
                        <input type="text" id="user-id" name="user_id" class="form-control" hidden>
                        <label class="form-label" for="password">Password</label>
                        <input type="text" name="password" class="form-control password" id="password"
                            placeholder="masukkan password">
                        <div class="invalid-feedback error-password"></div>
                    </div>
                    <div class="form-group password">
                        <label class="form-label" for="re_password">Konfirmasi Password</label>
                        <input type="text" name="re_password" class="form-control re_password" id="re_password"
                            placeholder="masukkan ulang password">
                        <div class="invalid-feedback error-re_password"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-outline btn-update-password mr-15">Simpan</button>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Daftar Pengguna</h5>
                <button type="button" class="btn btn-shadow btn-primary btn-tambah">
                    <svg class="pc-icon">
                        <use xlink:href="#custom-add-outline"></use>
                    </svg>Tambah Data
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive dt-responsive">
                <table class="table table-striped table-hover table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td style="cursor: pointer" class="forgot-password" data-id="{{ $user->id }}"
                                    data-username="{{ $user->username }}" data-toggle="tooltip"
                                    title="Klik dua kali untuk mengubah kata sandi">{{ $user->nama }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->level }}</td>
                                <td>{{ $user->status == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="button groups">
                                        <button type="button" class="btn btn-light-success btn-edit"
                                            data-id="{{ $user->id }}">
                                            <i class="fa-duotone fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger btn-delete"
                                            data-id="{{ $user->id }}">
                                            <i class="fa-duotone fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $('[data-toggle="tooltip"]').tooltip();
    var table = $('#table').DataTable();

    $('.forgot-password').on('dblclick', function() {
        let username = $(this).data('username')
        let id = $(this).data('id')
        $('#password-modal').modal('show');
        $('#password-modal .modal-title').html('Ubah Kata Sandi - <strong>' + username +
            '</strong>');

        // set id
        $('#password-modal #user-id').val(id)
    });

    $("body").on("click", ".btn-update-password", function(e) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        let form = $("#formUpdate")[0];
        let data = new FormData(form);
        $.ajax({
            type: "POST",
            url: "/user/update-password",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $(".btn-update-password").html("Mohon tunggu...").prop('disabled',
                    true);
            },
            done: function() {
                $(".btn-update-password").html("Simpan").prop('disabled', false);
            },
            success: function(response) {
                Swal.fire(response.title, response.message, response.status);
                if (response.status == "success") {
                    $('#password-modal').modal('hide');
                }
            },
            error: function(error) {
                let formName = [];
                let errorName = [];

                $.each($("#formUpdate").serializeArray(), function(i, field) {
                    formName.push(field.name.replace(/\[|\]/g, ""));
                });
                if (error.status == 422) {
                    if (error.responseJSON.errors) {
                        $.each(
                            error.responseJSON.errors,
                            function(key, value) {
                                errorName.push(key);
                                if ($("#password-modal ." + key).val() == "") {
                                    $("#password-modal ." + key).addClass(
                                        "is-invalid");
                                    $("#password-modal .error-" + key).html(value);
                                }
                            }
                        );

                        $.each(formName, function(i, field) {
                            if ($.inArray(field, errorName) == -1) {
                                $("#password-modal ." + field).removeClass(
                                    "is-invalid");
                                console.log(field)
                                $("#password-modal .error-" + field).html('');
                            } else {
                                $("#password-modal ." + field).addClass(
                                    "is-invalid");
                            }
                        });
                    }
                }
                $(".btn-update-password").html("Simpan").prop('disabled', false);
            },
        });
    });
</script>
