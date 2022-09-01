<?php
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

?>

<?
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    if (!empty($_REQUEST['name']) and !empty($_REQUEST['description'])) {


        CModule::IncludeModule('iblock');

        $el = new CIBlockElement;

        $iblock_id = 6;
        $PROP = array();

        $PROP['DECRIP'] = $_POST['description'];

        $arFields = array(
            "DATE_CREATE" => date("d.m.Y H:i:s"),
            "CREATED_BY" => $GLOBALS['USER']->GetID(),
            "IBLOCK_SECTION_ID" => $_REQUEST['section'],
            "PROPERTY_VALUES" => $PROP,
            "IBLOCK_ID" => 5,
            "NAME" => strip_tags($_REQUEST['name']),
            "ACTIVE" => "Y",
            "PREVIEW_TEXT" => mb_substr(strip_tags($_REQUEST['description']), 0, 100),
            "DETAIL_TEXT" => strip_tags($_REQUEST['description'], '<br></br><p>'),
            "PREVIEW_PICTURE" => $_FILES['image'],
            "DETAIL_PICTURE" => $_FILES['image']
        );

        if ($ID = $el->Add($arFields)) {
            $result['status'] = 'success';
            $result['message'] = 'Элемент успешно добавлена';
        } else {
            $result['status'] = 'error';
            $result['message'] = $el->LAST_ERROR;
        }

    } else {
        $result['status'] = 'error';
        $result['message'] = 'Все поля обязательны для заполнения';
    }

    echo json_encode($result, JSON_UNESCAPED_UNICODE); //передаем результат формата JSON
}
?>