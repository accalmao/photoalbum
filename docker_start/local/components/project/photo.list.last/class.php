<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @global $APPLICATION
 * @global $USER
 */
\CBitrixComponent::includeComponentClass('system:standard.elements.list');

class PhotoSectionLast extends StandardElementListComponent
{
    public function onPrepareComponentParams($params)
    {
        $res = parent::onPrepareComponentParams($params);
        $res['CODE'] = $params['CODE'];
        return $res;
    }

    protected function getResult()
    {
        $filter = [
            'IBLOCK_ID' => $this->arResult['IBLOCK_ID'],
        ];

        $select = [
            'ID',
            'IBLOCK_ID',
            'NAME',
            'PREVIEW_TEXT',
            'SECTION_PAGE_URL',
            'TIMESTAMP_X',
            'DESC',
            'PICTURE',
            'DESCRIPTION',
            'CREATED_BY',
            'CREATED_USER_NAME',

        ];

        $result = CIBlockSection::GetList(array('TIMESTAMP_X' => 'DESC'), $filter, false, $select, array("nPageSize" => 10));

        while ($item = $result->GetNext()) {
            $rsUser = CUser::GetByID($item['CREATED_BY']);
            $arUser = $rsUser->Fetch();
            $this->arResult['PROGRAMS'][] = [
                'NAME' => $item['NAME'],
                'IMG' => CFile::GetPath($item['PICTURE']),
                'TEXT' => $item['PREVIEW_TEXT'],
                'URL' => $item['SECTION_PAGE_URL'],
                'DESCRIPTION' => $item['DESCRIPTION'],
                'CREATED_BY' => $item['CREATED_BY'],
                'CREATED_NAME' => $arUser['NAME'],
                'CREATED_LOGIN' => $arUser['LOGIN'],
            ];
        }
    }
}
