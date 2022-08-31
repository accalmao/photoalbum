<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.forgotpaswwd",
	"",
Array()
);?><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>