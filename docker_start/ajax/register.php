<?php
/**
 * @global $APPLICATION
 */
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<?
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    if(!empty($_POST['email']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['password']) && !empty($_POST['password_confirm']) ){

        if($APPLICATION->CaptchaCheckCode($_POST["captcha_word"], $_POST["captcha_sid"])){

            global $USER, $DB;
            $login = strip_tags($_POST['email']);
            $firstname = strip_tags($_POST['firstname']);
            $lastname = strip_tags($_POST['lastname']);
            $email = strip_tags($_POST['email']);
            $password = strip_tags($_POST['password']);
            $password_confirm = strip_tags($_POST['password_confirm']);

            $bConfirmReq = (COption::GetOptionString("main", "new_user_registration_email_confirmation", "N")) == "Y";

            $arFields = Array(
            "NAME"              => $firstname,
            "PERSONAL_PHONE"    => $lastname,
            "EMAIL"             => $email,
            "LOGIN"             => $login,
            "LID"               => SITE_ID,
            "ACTIVE"            => "Y",
            "GROUP_ID"          => array(2),
            "PASSWORD"          => $password,
            "CONFIRM_PASSWORD"  => $password_confirm,
            "CHECKWORD" => md5(CMain::GetServerUniqID().uniqid()),
            "~CHECKWORD_TIME" => $DB->CurrentTimeFunction(),
            "CONFIRM_CODE" =>$bConfirmReq? randString(8): ""
            );

            $CUser = new CUser;
            $USER_ID = $CUser->Add($arFields);

            if (intval($USER_ID) > 0){
                $result['status'] = 'success';
                $result['message'] = 'Вы успешно зарегистрировались';
                $arFields['USER_ID'] = $USER_ID;
                $arEventFields = $arFields;
                $event = new CEvent;
                    if($bConfirmReq){
                        $event->SendImmediate("NEW_USER_CONFIRM", SITE_ID, $arEventFields);
                    }else{
                        $event->SendImmediate("USER_INFO", SITE_ID, $arEventFields);
                    }
                $event->SendImmediate("NEW_USER", SITE_ID, $arEventFields);
                }
                else{
                    $result['status'] = 'error';
                    $result['message'] = html_entity_decode($CUser->LAST_ERROR);
                    }

        }else{
            $result['status'] = 'error';
            $result['message'] = 'Не правильный код картинки';
        }
    }else{
        $result['status'] = 'error';
        $result['message'] = 'Все поля обязательны для заполнения';
    }

    echo json_encode($result, JSON_UNESCAPED_UNICODE);
}

?>


