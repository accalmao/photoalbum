<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

\CBitrixComponent::includeComponentClass('system:standard.elements.list');

class PhotoSectionAll extends StandardElementListComponent
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
            'PREVIEW_PICTURE',
            'PREVIEW_TEXT',
            'SECTION_PAGE_URL',
            'CREATED_BY',
            'PICTURE',
            'DESCRIPTION',
        ];

        $result = CIBlockSection::GetList([], $filter, false, $select, false);

        while ($item = $result->GetNext()) {
            $rsUser = CUser::GetByID($item['CREATED_BY']);
            $arUser = $rsUser->Fetch();
            $this->arResult['PROGRAMS'][] = [
                'NAME' => $item['NAME'],
                'IMG' => CFile::GetPath($item['PICTURE']),
                'TEXT' => $item['PREVIEW_TEXT'],
                'URL' => $item['SECTION_PAGE_URL'],
                'DESCRIPTION' => $item['DESCRIPTION'],
                'CREATED_NAME' => $arUser['NAME'],
                'CREATED_LOGIN' => $arUser['LOGIN'],
            ];
        }
    }
}
