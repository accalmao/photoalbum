<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * variables
 * @var array $arResult
 * @var array $arParams
 * @global $APPLICATION
 */

use \Bitrix\Main\Localization\Loc as Loc;

Loc::loadMessages(__FILE__);
$APPLICATION->SetTitle('main page');

?>
<div class="content">
    <?
    foreach ($arResult['PROGRAMS'] as $title => $programs): ?>
        <ul class="">
            <?
            foreach ($programs as $program):
                ?>
                <li>
                    <ul>

                        <li><p ><?= $program['NAME'] ?></p></li>
                        <li"><img src="<?= $program['IMG'] ?>" alt="pkurp"></li>
                    </ul>
                </li>
            <?
            endforeach; ?>
        </ul>
    <?
    endforeach; ?>
</div>
