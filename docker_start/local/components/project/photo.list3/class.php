<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

\CBitrixComponent::includeComponentClass('system:standard.elements.list');

class PhotoListComponent extends StandardElementListComponent
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
            'PROPERTY_DECRIP',
            'MODIFIED_BY',
            'PROPERTY_PHOTOS',
            'TIMESTAMP_X',
            'DESC',
            'PICTURE',
            'DESCRIPTION',

        ];

        $result = CIBlockSection::GetList([], $filter, false, $select, false);

        while ($item = $result->GetNext()) {
            $this->arResult['PROGRAMS'][][] = [
                'NAME' => $item['NAME'],
                'IMG' => CFile::GetPath($item['PICTURE']),
                'TEXT' => $item['PREVIEW_TEXT'],
                'URL' => $item['SECTION_PAGE_URL'],
                'OWNER' =>$item['PROPERTY_OWNER_VALUE'],
                'DECRIP' =>$item['PROPERTY_DECRIP_VALUE'],
                'MODIFIED_BY'    => $item['MODIFIED_BY'],
                'PHOTOS' => $item['PROPERTY_PHOTOS_VALUE'],
                'DESCRIPTION' => $item['DESCRIPTION'],
            ];
        }


    }
}
