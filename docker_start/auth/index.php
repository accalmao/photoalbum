<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("authorization");
?>

<?php $APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"template1",
	Array(
		"COMPONENT_TEMPLATE" => "template1",
		"FORGOT_PASSWORD_URL" => "auth/forget.php",
		"PROFILE_URL" => "/auth/personal.php",
		"REGISTER_URL" => "/auth/registration.php",
		"SHOW_ERRORS" => "N"
	)
);?><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>