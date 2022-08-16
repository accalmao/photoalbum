<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/**
 * @global $APPLICATION
 */
$APPLICATION->SetTitle("main page");
$APPLICATION->IncludeComponent(
    "photoalbum:album.list",
    "",
    [
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "IBLOCK_CODE" => 'photoalbum',
        "IBLOCK_TYPE" => 'album',
    ]
);
echo "<pre>";
print_r($arResult);
echo "</pre>";
?>


<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>