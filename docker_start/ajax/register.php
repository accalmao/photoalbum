<?php
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<?
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

if(!empty($_REQUEST['email']) and !empty($_REQUEST['firstname']) and !empty($_REQUEST['lastname']) and !empty($_REQUEST['password']) and !empty($_REQUEST['password_confirm']) ){

if($APPLICATION->CaptchaCheckCode($_REQUEST["captcha_word"], $_REQUEST["captcha_sid"])){

global $USER;
global $DB;
$login = strip_tags($_REQUEST['email']);
$firstname = strip_tags($_REQUEST['firstname']);
$lastname = strip_tags($_REQUEST['lastname']);
$email = strip_tags($_REQUEST['email']);
$password = strip_tags($_REQUEST['password']);
$password_confirm = strip_tags($_REQUEST['password_confirm']);

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
// Отправляем Оповешение администратору
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

echo json_encode($result);
}

?>


