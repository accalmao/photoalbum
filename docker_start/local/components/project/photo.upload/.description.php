<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc as Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = [
    'NAME' => Loc::getMessage('PHOTO_UPLOAD_DESCRIPTION_NAME'),
    'DESCRIPTION' => Loc::getMessage('PHOTO_UPLOAD_DESCRIPTION_DESCRIPTION'),
    'ICON' => '/images/icon.gif',
    'SORT' => 20,
    'PATH' => [
        'ID' => 'project',
        'NAME' => Loc::getMessage('PHOTO_UPLOAD_DESCRIPTION_GROUP'),
        'SORT' => 10,
    ],
];

