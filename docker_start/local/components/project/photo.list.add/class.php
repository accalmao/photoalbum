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


}
