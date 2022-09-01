<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global $APPLICATION
 * @var array $arResult
 * @var array $arParams
 */
global $USER;
$APPLICATION->SetTitle("detail"); ?>
<?$APPLICATION->IncludeComponent(
    "project:photo.list.elements",
    "",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "IBLOCK_CODE" => "albums",
        "IBLOCK_TYPE" => "albums",
    )
);?>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>