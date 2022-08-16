<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

\CBitrixComponent::includeComponentClass('system:standard.elements.list');

class FgisList extends StandardElementListComponent
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
            'PROPERTY_AT_PHOTO',
            'PROPERTY_AT_DECRIP',
            'DETAIL_PAGE_URL',
        ];

        $result = CIBlockElement::GetList([], $filter, false, false, $select);
        while ($item = $result->GetNext()) {
            $this->arResult['PROGRAMS'][][] = [
                'NAME' => $item['NAME'],
                'IMG' => CFile::GetPath($item['PREVIEW_PICTURE']),
                'TEXT' => $item['PREVIEW_TEXT'],
                'URL' => $item['DETAIL_PAGE_URL'],
            ];
        }
    }
}



