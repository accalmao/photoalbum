<?php
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

?>

<?php
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();

if ($request->isAjaxRequest()) {

    if (!empty($request->getPost('name')) and !empty($request->getPost('description'))) {


        CModule::IncludeModule('iblock');

        $el = new CIBlockElement;

        $PROP = array();
        $PROP['DECRIP'] = $request->getPost('description');
        $section = CIBlockSection::GetList([], ['CODE' => $_POST['section']])->Fetch();
        $arFields = array(
            "DATE_CREATE" => date("d.m.Y H:i:s"),
            "CREATED_BY" => $GLOBALS['USER']->GetID(),
            "IBLOCK_SECTION_ID" => $section['ID'],
            "PROPERTY_VALUES" => $PROP,
            "IBLOCK_ID" => 6,
            "NAME" => strip_tags($_POST['name']),
            "ACTIVE" => "Y",
            "PREVIEW_TEXT" => mb_substr(strip_tags($_POST['description']), 0, 100),
            "DETAIL_TEXT" => strip_tags($_POST['description'], '<br></br><p>'),
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
