<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global $APPLICATION
 * @var array $arFields
 */
$APPLICATION->SetTitle("Регистрация");
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['firstname'];
    $surname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['password'];
    $message2 = $_POST['password_confirm'];

    echo $name . "<br />" . $surname . "<br />" . $email . "<br />" . $message . "<br />" . $message2 . "<br />";
    function clean($value = "")
    {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        return $value;
    }

    function check_length($value = "", $min, $max)
    {
        $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
        return !$result;
    }

    if (!empty($name) && !empty($surname) && !empty($email) && !empty($message)) {
        $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
?>

    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close_button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Регистрация</h4>
            </div>
            <div class="modal-body">
                <div class="message error hide"></div>
                <form id="register-form">
                    <fieldset class="form-group">
                        <label for="formGroupExampleInput">Ваше имя</label>
                        <input type="text" name="firstname" class="form-control" id="formGroupExampleInput"
                               placeholder="Иван" required>
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="formGroupExampleInput2">Ваш телефон</label>
                        <input type="text" name="lastname" class="form-control" id="formGroupExampleInput2"
                               placeholder="+79990000000">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputEmail1">Электронная почта</label>
                        <input type="email" name="email" class="form-control" placeholder="ivanovivan@gmail.com">

                    </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputPassword1">Введите пароль</label>
                        <input type="password" name="password" class="form-control" placeholder="******">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>Пароль еще раз</label>
                        <input type="password" name="password_confirm" class="form-control" placeholder="******">
                    </fieldset>

                    <fieldset class="form-group">
                        <label for="formGroupExampleInput">Текст с картинки</label>
                        <div class="capcja_div">
                            <div class="capchatext">
                                <?php $CaptchaCode = htmlspecialcharsbx($APPLICATION->CaptchaGetCode()); ?>
                                <input type="text" class="form-control" name="captcha_word">
                                <input type="hidden" name="captcha_sid" class="captcha_sid" value="<?= $CaptchaCode ?>">
                            </div>
                            <div class="capcha_img">
                                <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $CaptchaCode ?>" width="160"
                                     height="40" alt="CAPTCHA"/>
                            </div>
                            <div class="capcha_button">
                                <button type="button" class="btn btn-lg capcha-button"></button>
                            </div>
                        </div>
                    </fieldset>

                    <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn_blue submit">Зарегистрироваться</button>
                            <div class="registration-error" style="color: red;"></div>
                            <div class="registration-success"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $(document).on('ready', function () {
            $('#login-area form').submit(function () {
                var $this = $(this);
                var $form = {
                    action: $this.attr('action'),
                    post: {'ajax_key': '<?= md5('ajax_' . LICENSE_KEY)?>'}
                };
                $.each($('input', $this), function () {
                    if ($(this).attr('name').length) {
                        $form.post[$(this).attr('name')] = $(this).val();
                    }
                });
                $.post($form.action, $form.post, function (data) {
                    $('input', $this).removeAttr('disabled');
                    if (data.type == 'error') {
                        alert(data.message);
                    } else {
                        window.location = window.location;
                    }
                }, 'json');
                return false;
            });
        })
    </script>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>