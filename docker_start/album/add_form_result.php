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
if (!empty($_REQUEST['name']) and !empty($_REQUEST['description'])) {

    CModule::IncludeModule('iblock');

    //Погнали
    $el = new CIBlockSection();
    $iblock_id = 5;
    //Свойства

    //Основные поля элемента
    $arFields = array(
        "DATE_CREATE" => date("d.m.Y H:i:s"), //Передаем дата создания
        "CREATED_BY" => $GLOBALS['USER']->GetID(),  //Передаем ID пользователя кто добавляет
        "IBLOCK_ID" => $iblock_id, //ID информационного блока он 24-ый
        "NAME" => strip_tags($_REQUEST['name']),
        "ACTIVE" => "Y", //поумолчанию делаем активным или ставим N для отключении поумолчанию
        "DESCRIPTION" => strip_tags($_REQUEST['description']), //Анонс
        "PICTURE" => $_FILES['image'], //изображение для анонса
    );

	   //Результат в конце отработки
	   if ($ID = $el->Add($arFields)) {
           echo "Альбом создан.";
       } else {
           echo 'Произошел как-то косяк Попробуйте еще разок';
       }
	 }
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>