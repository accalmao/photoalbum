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
$APPLICATION->SetTitle('ФГИС ЕГРН');

?>
<div class="content">
    <?
    foreach ($arResult['PROGRAMS'] as $title => $programs): ?>
        <h1><?= $title ?></h1>
        <ul class="<?= ($title == 'Дополнительные подсистемы ФГИС ЕГРН') ? 'tabletdop' : 'tablet' ?>">
            <?
            foreach ($programs as $program):
                ?>
                <li class="tablet-items">
                    <ul class="tablet2">
                        <li class="tablet-items"><img src="<?= $program['IMG'] ?>" alt="pkurp"></li>
                        <li class="tablet-items"><p class="vkid"><?= $program['NAME'] ?></p></li>

                        <a href="<?=$program['URL']?>"><li class="tablet-items"><p class="abz"><?= $program['TEXT'] ?></p></li></a>
                    </ul>
                </li>
            <?
            endforeach; ?>
        </ul>
    <?
    endforeach; ?>
</div>
