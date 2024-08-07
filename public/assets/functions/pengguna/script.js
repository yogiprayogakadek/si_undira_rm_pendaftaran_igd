function getData() {
    $.ajax({
        type: "get",
        url: "/pengguna/render",
        dataType: "json",
        success: function (response) {
            $(".render").html(response.data);
        },
        error: function (error) {
            console.log("Error", error);
        },
    });
}

function tambah() {
    $.ajax({
        type: "get",
        url: "/pengguna/create",
        dataType: "json",
        success: function (response) {
            $(".render").html(response.data);
        },
        error: function (error) {
            console.log("Error", error);
        },
    });
}

$(document).ready(function () {
    getData();

    $('body').on('click', '.btn-tambah', function () {
        tambah();
    });

    $('body').on('click', '.btn-data', function () {
        getData();
    });

    // on save button
    $("body").on("click", ".btn-save", function (e) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        let form = $("#formAdd")[0];
        let data = new FormData(form);
        $.ajax({
            type: "POST",
            url: "/pengguna/store",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $(".btn-save").html("Mohon tunggu...").prop('disabled', true);
            },
            done: function () {
                $(".btn-save").html("Simpan").prop('disabled', false);
            },
            success: function (response) {
                $(".form-control").removeClass("is-invalid");
                Swal.fire(response.title, response.message, response.status);
                if (response.status == "success") {
                    getData();
                }
            },
            error: function (error) {
                let formName = [];
                let errorName = [];

                $.each($("#formAdd").serializeArray(), function (i, field) {
                    formName.push(field.name.replace(/\[|\]/g, ""));
                });
                if (error.status == 422) {
                    if (error.responseJSON.errors) {
                        $.each(
                            error.responseJSON.errors,
                            function (key, value) {
                                errorName.push(key);
                                if ($("." + key).val() == "") {
                                    $("." + key).addClass("is-invalid");
                                    $(".error-" + key).html(value);
                                }
                            }
                        );

                        $.each(formName, function (i, field) {
                            if ($.inArray(field, errorName) == -1) {
                                $("." + field).removeClass("is-invalid");
                                $(".error-" + field).html('');
                            } else {
                                $("." + field).addClass("is-invalid");
                            }
                        });
                    }
                }
                $(".btn-save").html("Simpan").prop('disabled', false);
            },
        });
    });

    $('body').on('click', '.btn-edit', function () {
        let id = $(this).data('id')
        $.ajax({
            type: "get",
            url: "/pengguna/edit/" + id,
            dataType: "json",
            success: function (response) {
                $(".render").html(response.data);
            },
            error: function (error) {
                console.log("Error", error);
            },
        });
    });

    // on save update
    $("body").on("click", ".btn-update", function (e) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        let form = $("#formUpdate")[0];
        let data = new FormData(form);
        $.ajax({
            type: "POST",
            url: "/pengguna/update",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $(".btn-update").html("Mohon tunggu...").prop('disabled', true);
            },
            done: function () {
                $(".btn-update").html("Simpan").prop('disabled', false);
            },
            success: function (response) {
                $(".form-control").removeClass("is-invalid");
                Swal.fire(response.title, response.message, response.status);
                if (response.status == "success") {
                    getData();
                }
            },
            error: function (error) {
                let formName = [];
                let errorName = [];

                $.each($("#formUpdate").serializeArray(), function (i, field) {
                    formName.push(field.name.replace(/\[|\]/g, ""));
                });
                if (error.status == 422) {
                    if (error.responseJSON.errors) {
                        $.each(
                            error.responseJSON.errors,
                            function (key, value) {
                                errorName.push(key);
                                if ($("." + key).val() == "") {
                                    $("." + key).addClass("is-invalid");
                                    $(".error-" + key).html(value);
                                }
                            }
                        );

                        $.each(formName, function (i, field) {
                            if ($.inArray(field, errorName) == -1) {
                                $("." + field).removeClass("is-invalid");
                                $(".error-" + field).html('');
                            } else {
                                $("." + field).addClass("is-invalid");
                            }
                        });
                    }
                }
                $(".btn-update").html("Simpan").prop('disabled', false);
            },
        });
    });

    // trigger button delete
    $("body").on("click", ".btn-delete", function () {
        let id = $(this).data('id');
        Swal.fire({
            icon: 'warning',
            // icon: 'error',
            title: "Yakin ingin menghapus data ini?",
            // text: 'hapus data',
            showCancelButton: true,
            confirmButtonText: "Hapus",
            showLoaderOnConfirm: true,
            preConfirm: function () {
                return new Promise(function (resolve) {
                    $.ajaxSetup({
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                    });
                    $.ajax({
                            type: "POST",
                            url: "/pengguna/delete",
                            data: {
                                id: id,
                            },
                        })
                        .done(function (response) {
                            getData();
                            Swal.fire(
                                response.title,
                                response.message,
                                response.status
                            );
                        })
                        .fail(function (response) {
                            // toastr[response.status](response.message, response.title);
                            Swal.fire(
                                response.title,
                                response.message,
                                response.status
                            );
                        });
                });
            },
            allowOutsideClick: false,
        });
    });
});
