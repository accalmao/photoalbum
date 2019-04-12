<?
if(LANGUAGE_ID == 'ru') {
    foreach($arResult['ITEMS'] as &$item) {
        if ($item['PROPERTIES']['name_ru']["VALUE"]!=""){
            $item["PROPERTIES"]["name"]["~VALUE"]['TEXT'] = $item['PROPERTIES']['name_ru']["~VALUE"]['TEXT'];
        }
    }
}