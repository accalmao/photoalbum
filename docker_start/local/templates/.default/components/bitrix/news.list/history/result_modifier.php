<?php

if(LANGUAGE_ID == 'ru') {
    foreach($arResult['ITEMS'] as &$item) {
        if ($item["PROPERTIES"]["name_ru"]["VALUE"]!='') {
            $item['NAME'] = $item['PROPERTIES']['name_ru']["VALUE"];
        }
        if ($item['PROPERTIES']['preview_ru']['VALUE']['TEXT']!='') {
            $item['PREVIEW_TEXT'] = $item['PROPERTIES']['preview_ru']['VALUE']['TEXT'];
        }
    }
}