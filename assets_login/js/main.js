(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function () {
        $(this).on('blur', function () {
            if ($(this).val().trim() != "") {
                $(this).addClass('has-val');
            } else {
                $(this).removeClass('has-val');
            }
        })
    })


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function () {
        var check = true;
        $("#peringatanPass").attr("data-validate", "Silahkan isi Password..")
        $("#peringatanEmail").attr("data-validate", "Silahkan isi Email..")

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        var email = $("#email").val()
        var pass = $("#pass").val()

        if (check) {
            $("#peringatanEmail").attr("data-validate", "Email tidak terdaftar.")
            $("#peringatanPass").attr("data-validate", "Password anda salah.")
            $("#tombolLogin").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
            $("#tombolLogin").prop('disabled', true);
            $.ajax({
                url: 'login/tryLogin',
                method: 'post',
                data: {
                    email: email,
                    pass: pass
                },
                dataType: 'json',
                success: function (data) {
                    if (!data) {
                        location.href = "dashboard"
                    } else {
                        if (data == "email") {
                            $("#peringatanEmail").addClass("alert-validate");
                        } else {
                            $("#peringatanPass").addClass("alert-validate");
                        }
                    }
                    $("#tombolLogin").html('Login')
                    $("#tombolLogin").prop('disabled', false);
                }
            });
        }
        return false;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        } else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

})(jQuery);