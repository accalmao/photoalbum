<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global $APPLICATION
 */
$APPLICATION->SetTitle("Главная страница"); ?><?$APPLICATION->IncludeComponent(
	"project:photo.list.last",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"IBLOCK_CODE" => "albums",
		"IBLOCK_TYPE" => "albums"
	)
);?><br><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>