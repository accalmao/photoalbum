<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global $APPLICATION
 */
$APPLICATION->SetTitle("Все альбомы"); ?>

<?$APPLICATION->IncludeComponent(
	"project:photo.list3",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"IBLOCK_CODE" => "album",
		"IBLOCK_TYPE" => "2"
	)
);?><br><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>