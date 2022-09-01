$(document).ready(function () {
    $('#register-form .submit').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/ajax/register.php',
            data: $("#register-form").serialize(),
            dataType: 'json',
            success: function (result) {
                console.log(result.status, result.message)
                if (result.status == 'error') {
                    $('#register-form .registration-error').html(result.message)
                    console.log($('#register-form .registration-error').innerHTML)
                } else if (result.status == 'success') {
                    $("#register-form .message").text(result.message);
                    $("#register-form .message").removeClass("hide");

                    if (result.status == 'success') {
                        $("#register-form .message").removeClass("error");
                        $("#register-form .message").addClass("success");
                        $("#register-form .modal-body").html("");
                        $("#register-form .modal-footer").html("Вы успешно зарегистрировались!</br>Перейдите на страницу авторизации чтобы продолжить.");

                    }
                }

            }
        });

        return false;
    });

    $(".capcha-button").click(function () {
        $.getJSON('/ajax/captcha.php', function (data) {
            $('.capcha_img img').attr('src', '/bitrix/tools/captcha.php?captcha_sid=' + data);
            $('.captcha_sid').val(data);
        });
        return false;
    });
    $('.js-addphoto').click(function (e) {

        var formData = new FormData($('#add-product-form')[0]); //используем FormData для загрузки изображении аноса детальной страницы и дополнительные фото элемента
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/ajax/add_product.php',
            data: formData,  // если загрузка файлов не нужно, можем место formData написать так $('#add-product-form').serialize()
            dataType: 'json',
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {

                if (result.status) {
                    $(".add-product-modal .message").html(result.message);
                    $(".add-product-modal .message").removeClass("hide");

                    if (result.status == 'success') {
                        $(".add-product-modal .message").removeClass("error");
                        $(".add-product-modal .message").addClass("success");
                        $('#add-product-form')[0].reset();
                    }
                }

            }
        });

        return false;
    });

});
