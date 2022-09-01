<?php
use Bitrix\Main\Loader;

// Константы
require(__DIR__ . "/include/constants.php");

// Функции
require(__DIR__ . "/include/functions.php");

AddEventHandler("iblock", "OnBeforeIBlockElementUpdate", Array("MyClass", "CheckOwnerBeforeUpdate"));
AddEventHandler("iblock", "OnBeforeIBlockElementDelete", Array("MyClass", "CheckOwnerBeforeDelete"));

class ChangeOnlyOwner
{
    public function CheckOwnerBeforeUpdate(&$arParams)
    {
        global $APPLICATION, $USER;

        $rsElement = CIBlockElement::GetByID($arParams["ID"]);
        $arElement = $rsElement->GetNext();

        if ($arParams["MODIFIED_BY"] != $arElement["CREATED_BY"] || !$USER->IsAdmin()) {
            $APPLICATION->ThrowException('Вы не можете изменять элементы, созданные другими пользователями!');
            return false;
        }
    }

    public function CheckOwnerBeforeDelete($ID)
    {
        global $APPLICATION, $USER;

        $rsElement = CIBlockElement::GetByID($ID);
        $arElement = $rsElement->GetNext();

        if ($USER->GetID() != $arElement["CREATED_BY"] && !$USER->IsAdmin()) {
            $APPLICATION->ThrowException('Вы не можете удалять элементы, созданные другими пользователями!');
            return false;
        }
    }
}