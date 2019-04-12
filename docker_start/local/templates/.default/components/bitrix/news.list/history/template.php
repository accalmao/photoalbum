<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="history__slider-container">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?$last_elem = count($arResult['ITEMS']) - 1;
            foreach($arResult["ITEMS"] as $key=>$arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" data-slide-id="<?=$key+1?>" class="swiper-slide">
                    <div class="history__slide">
                        <div class="history__slide-icon"><img src="<?=$arItem['DISPLAY_PROPERTIES']['icon']['FILE_VALUE']['SRC']?>"></div>
                        <div class="history__slide-circle"></div>
                        <div class="history__slide-date <?= $key == $last_elem ? 'small_title' : ''?>"><?=$arItem["NAME"]; ?></div>
                        <div class="history__slide-info">
                            <div class="history__slide-text">
                                <?=$arItem["PREVIEW_TEXT"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
    <div class="history__slide-desc">
        <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
            <div data-text-id="<?=$key+1?>" <?if ($key==0):?>style="display: block" <?endif?> class="history__slide-text">
                <?=$arItem["PREVIEW_TEXT"]; ?>
            </div>
        <?endforeach;?>
    </div>
</div>