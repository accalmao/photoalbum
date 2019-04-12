<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

//delayed function must return a string
if(empty($arResult))
	return '';

ob_start();
?>

<div class="page-account__breadcrumb">
    <div class="breadcrumb">
        <?foreach ($arResult as $key => $item):
            $notLast = $key < (count($arResult) - 1);?>
            <div class="breadcrumb-elem">
                <div class="breadcrumb-title"><a<?if($notLast):?> href="<?=$item['LINK']?>"<?endif;?>><?=$item['TITLE']?></a><?if($notLast):?>&nbsp-&nbsp<?endif;?></div>
            </div>
        <?endforeach;?>
    </div>
</div>

<?
$str = ob_get_contents();
ob_end_clean();
return $str;
?>