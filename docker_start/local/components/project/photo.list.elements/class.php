<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

\CBitrixComponent::includeComponentClass('system:standard.elements.list');

class PhotoElements extends StandardElementListComponent
{
    public function onPrepareComponentParams($params)
    {

        global $USER;

        $res = parent::onPrepareComponentParams($params);
        $res['SECTION_ID'] = (int)$this->request->get('SECTION_ID');
        $res['CODE'] = $params['CODE'];
        $res['USER_ID'] = $USER->GetID();
        return $res;
    }

        protected function getSection()
    {
        $section = CIBlockSection::GetList([], ['CODE' => $this->arParams['CODE']])->Fetch();
        $this->arResult['ALBUM_CREATED_BY'] = $section['CREATED_BY'];
        return $section['ID'];
    }

        protected function getResult()
    {
        $filter = [
            'IBLOCK_ID' => $this->arResult['IBLOCK_ID'],
            'IBLOCK_SECTION_ID' => $this->getSection(),
        ];

        $select = [
            'ID',
            'IBLOCK_ID',
            'IBLOCK_SECTION_ID',
            'NAME',
            'PREVIEW_PICTURE',
            'PREVIEW_TEXT',
            'DETAIL_PAGE_URL',
            'PROPERTY_DECRIP',
        ];

        $result = CIBlockElement::GetList([], $filter, false, false, $select);


        while ($item = $result->GetNext()) {
            $this->arResult['PROGRAMS'][] = [
                'NAME' => $item['NAME'],
                'IMG' => CFile::GetPath($item['PREVIEW_PICTURE']),
                'TEXT' => $item['PREVIEW_TEXT'],
                'URL' => $item['DETAIL_PAGE_URL'],
                'DECRIP' =>$item['PROPERTY_DECRIP_VALUE'],
                'IBLOCK_SECTION_ID' =>$item['IBLOCK_SECTION_ID'],
            ];
        }
    }
}