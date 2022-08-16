<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/**
 * @global $APPLICATION
 */
$APPLICATION->SetTitle("main page");
$APPLICATION->IncludeComponent(
    "tokmakov:iblock.element",
    "",
    Array(
        "ADD_SECTIONS_CHAIN" => "Y",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
        "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
        "ELEMENT_URL" => "item/id/#ELEMENT_ID#/",
        "FILE_404" => "",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "content",
        "MESSAGE_404" => "",
        "SECTION_URL" => "category/id/#SECTION_ID#/",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_PAGE_TITLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "USE_CODE_INSTEAD_ID" => "N"
    )
);
?>


<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>