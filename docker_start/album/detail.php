<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global $APPLICATION
 * @var array $arResult
 * @var array $arParams
 */
global $USER;
$APPLICATION->SetTitle("detail"); ?><?$APPLICATION->IncludeComponent(
    "project:photo.list2",
    "",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "IBLOCK_CODE" => "album",
        "IBLOCK_TYPE" => "2",
    )
);?>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>