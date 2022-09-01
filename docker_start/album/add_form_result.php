<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global $APPLICATION
 */
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
?>
    &nbsp;
<?php
if (!empty($_POST['name']) and !empty($_POST['description'])) {

    CModule::IncludeModule('iblock');

    $el = new CIBlockSection();
    $iblock_id = 6;

    $arFields = array(
        "DATE_CREATE" => date("d.m.Y H:i:s"),
        "CREATED_BY" => $GLOBALS['USER']->GetID(),
        "IBLOCK_ID" => $iblock_id,
        "IBLOCK_CODE"=>strip_tags($_POST['code']),
        "NAME" => strip_tags($_POST['name']),
        "ACTIVE" => "Y",
        "DESCRIPTION" => strip_tags($_POST['description']),
        "PICTURE" => $_FILES['image'],
    );

    if ($ID = $el->Add($arFields)) {
        echo "Альбом создан.";
    } else {
        echo 'Произошла ошибка. Попробуйте ещё раз.';
    }
}
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>