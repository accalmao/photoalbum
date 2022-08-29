<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global $APPLICATION
 */
$APPLICATION->SetTitle("Главная страница"); ?><?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "blue_tabs1",
    array(
        "ALLOW_MULTI_SELECT" => "N",
        "CHILD_MENU_TYPE" => "left",
        "DELAY" => "N",
        "MAX_LEVEL" => "1",
        "MENU_CACHE_GET_VARS" => array(
        ),
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "ROOT_MENU_TYPE" => "top",
        "USE_EXT" => "N",
        "COMPONENT_TEMPLATE" => "blue_tabs1"
    ),
    false
);?>
<?$APPLICATION->IncludeComponent(
    "project:photo.list",
    "",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "IBLOCK_CODE" => "album",
        "IBLOCK_TYPE" => "2"
    )
);?><br><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

