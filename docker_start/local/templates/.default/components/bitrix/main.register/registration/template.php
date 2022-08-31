<?
/**
 * Bitrix Framework
 *
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 *
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 *
 * @global CUser $USER
 * @global CMain $APPLICATION
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<? /* var_dump($arResult); */ ?>
<? if ($USER->IsAuthorized()): ?>

    <p><? echo GetMessage("MAIN_REGISTER_AUTH") ?></p>

<? else: ?>
    <form class="form-signin" id="register-form" method="post"
          action="<?= POST_FORM_ACTION_URI ?>" name="regform"
          enctype="multipart/form-data">
        <?
        if ($arResult["BACKURL"] <> ''):
            ?>
            <input type="hidden" name="backurl"
                   value="<?= $arResult["BACKURL"] ?>"/>
        <?
        endif;
        ?>
        <img class="mb-4"
             src="<? $_SERVER["DOCUMENT_ROOT"] ?>/local/templates/.default/components/bitrix/main.register/registration/images/camera.png"
             alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal"><?= GetMessage("AUTH_REGISTER") ?></h1>
        <? foreach ($arResult["SHOW_FIELDS"] as $FIELD): ?>
            <label>
                <?= GetMessage("REGISTER_FIELD_" . $FIELD) ?>
                :<? if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"): ?>
                    <span class="starrequired">*</span><? endif ?>
            </label>
            <?
            switch ($FIELD) {

                case "PASSWORD":
                    ?><input size="30" type="password" name="<?= $FIELD ?>"
                             value="<?= $arResult["VALUES"][$FIELD] ?>"
                             autocomplete="off"
                             class="bx-auth-input"/>
                    <?
                    break;
                case "CONFIRM_PASSWORD":
                    ?><input size="30" type="password" name="<?= $FIELD ?>"
                             value="<?= $arResult["VALUES"][$FIELD] ?>"
                             autocomplete="off" /><?
                    break;
                default:
                    ?><input size="30" type="text" name="<?= $FIELD ?>"
                             value="<?= $arResult["VALUES"][$FIELD] ?>" />
                    <br/><?
            } ?>
        <? endforeach ?>
        <? if ($arResult["USE_CAPTCHA"] == "Y"): ?>
            <div class="g-recaptcha"
                 data-sitekey="<?= SITE_KEY ?>"></div>
            <script type="text/javascript"
                    src="https://www.google.com/recaptcha/api.js?hl=ru">
            </script>
            <br/>
        <? endif; ?>
        <? if (count($arResult["ERRORS"]) > 0):
            foreach ($arResult["ERRORS"] as $key => $error) {
                if (intval($key) == 0 && $key !== 0) {
                    $arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#",
                        "&quot;" . GetMessage("REGISTER_FIELD_" . $key)
                        . "&quot;", $error);
                }
            }

            ShowError(implode("<br>", $arResult["ERRORS"]));
        endif ?>
        <p><span class="starrequired">*</span><?= GetMessage("AUTH_REQ") ?></p>
        <label type="text" hidden id="checkPass"></label>
        <div class="invalid-feedback" id="descER">
            Формат ввода телефона +7ХХХХХХХХХХ
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"
                name="register_submit_button"
                value="Y"><?= GetMessage("AUTH_REGISTER") ?></button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
<? endif //$arResult["SHOW_SMS_FIELD"] == true ?>