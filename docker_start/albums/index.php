<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/**
 * @global $APPLICATION
 */
$APPLICATION->SetTitle("Все альбомы"); ?>

<? $APPLICATION->IncludeComponent(
    "project:albums",
    "",
    [
        "SEF_FOLDER"        => "/albums/",
        "SEF_MODE"          => "Y",
        "SEF_URL_TEMPLATES" =>
            [
                "index"  => 'index.php',
                "detail" => '#CODE#/',
            ],
    ]
); ?><br><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>