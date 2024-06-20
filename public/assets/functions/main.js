/***** Change Password User start *****/
$('body').on('click', '.change-password', function() {
    $('#change-password-modal').modal('show')
});

$("body").on("click", ".btn-change-password", function(e) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    let form = $("#formChangePassword")[0];
    let data = new FormData(form);
    $.ajax({
        type: "POST",
        url: "/pengguna/change-password",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        // beforeSend: function() {
        //     $(".btn-change-password").html("Loading...").prop('disabled', true);
        // },
        // done: function() {
        //     $(".btn-change-password").html("Simpan").prop('disabled', false);
        // },
        success: function(response) {
            Swal.fire(response.title, response.message, response.status);
            if (response.status == "success") {
                $('#change-password-modal').modal('hide');
            }
        },
        error: function(error) {
            let formName = [];
            let errorName = [];

            $.each($("#formChangePassword").serializeArray(), function(i, field) {
                formName.push(field.name.replace(/\[|\]/g, ""));
            });
            if (error.status == 422) {
                if (error.responseJSON.errors) {
                    $.each(
                        error.responseJSON.errors,
                        function(key, value) {
                            errorName.push(key);
                            if ($("#change-password-modal ." + key).val() == "") {
                                $("#change-password-modal ." + key).addClass(
                                    "is-invalid");
                                $("#change-password-modal .error-" + key).html(value);
                            }
                        }
                    );

                    $.each(formName, function(i, field) {
                        if ($.inArray(field, errorName) == -1) {
                            $("#change-password-modal ." + field).removeClass(
                                "is-invalid");
                            console.log(field)
                            $("#change-password-modal .error-" + field).html('');
                        } else {
                            $("#change-password-modal ." + field).addClass(
                                "is-invalid");
                        }
                    });
                }
            }
            $(".btn-update-password").html("Simpan").prop('disabled', false);
        },
    });
});
/***** Change Password User start *****/
