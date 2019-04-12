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




    <div class="in-world__slide">
        <div class="page-header">
            <div class="page-header__title"><?= GetMessage("BALTIKA") ?></div>
        </div>
        <div class="in-world__map js-worldMapBlock">
            <div class="in-world__map-block">
                <img src="<?=MARKUP_PATH?>/images/world-map.png" class="js-worldMapImage">
                <svg id="svg2" version="1.1"
                     inkscape:version="0.48.4 r9939"
                     sodipodi:docname="world.svg"
                     xmlns:cc="http://creativecommons.org/ns#"
                     xmlns:dc="http://purl.org/dc/elements/1.1/"
                     xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                     xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                     xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                     xmlns:svg="http://www.w3.org/2000/svg"
                     xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px"
                     viewBox="0 0 1716 855"
                     style="enable-background:new 0 0 1716 855;"
                     xml:space="preserve"
                     class="js-worldMapSvg"
                >
                            <style type="text/css">
                                .path-our-motherland {
                                    fill: #E0CAA0;
                                }

                                .path-export-markets {
                                    stroke-width: 0.11;
                                }

                                .path-other-countries {
                                    fill: #2B4B87;
                                    stroke: #FFFFFF;
                                    stroke-width: 0.11;
                                }
                            </style>
                    <sodipodi:namedview
                            id="namedview231"
                            bordercolor="#666666"
                            borderopacity="1"
                            gridtolerance="10"
                            guidetolerance="10"
                            inkscape:current-layer="svg2"
                            inkscape:cx="593.00732"
                            inkscape:cy="460.46398"
                            inkscape:pageopacity="0"
                            inkscape:pageshadow="2"
                            inkscape:window-height="1137"
                            inkscape:window-maximized="1"
                            inkscape:window-width="1920"
                            inkscape:window-x="1192"
                            inkscape:window-y="118"
                            inkscape:zoom="1.144"
                            objecttolerance="10"
                            pagecolor="#ffffff"
                            showgrid="false">
                    </sodipodi:namedview>
                    <path id="RU" inkscape:connector-curvature="0" d="M1134.7,21.5l-4.5-4l-13.6-4.1l-9.4-2.1l-6.2,0.9l-5.3,2.9l5.8,0.8							l6.6,3.2l8,1.7l11.5,1.3C1127.6,22.1,1134.7,21.5,1134.7,21.5z M956,14.2l0.9-0.6l-5.7-0.9l-2.8,0.7l-1.3,1l-1.5-1.2l-5.2,0.1							l-6.2,0.8l7.7,0.1l-1.1,1.3l4.4,1l3.6-0.7l0.1-0.7l2.9-0.3C951.8,14.8,956,14.2,956,14.2z M1156.5,24.1l-1.5-1.8l-12.5-2.6l-3-0.3							l-2.2,0.5l1.2,6C1138.5,25.9,1156.5,24.1,1156.5,24.1z M1171.7,30.4l-9.2-0.7l3.4-1.2l-8.2-1.5l-6.1,1.9l-1,2l1.5,2.1l-6.9-0.1							l-5.3,2.6l-4.3-1.1l-9.3,0.5l0.3,1.3l-9.2,0.7l-4.9,2.4l-4.2,0.2l-1.2,3.3l5.5,2.6l-7.7,0.7l-9.5-0.3l-5.8,1.1l4.8,5.4l6.9,4.3							l-9.6-3l-7.9,0.3l-5.1,2l4.5,3.8l-4.9-1l-2.1-5l-4.2-2.8l-1.8,0.1l3.6,3.7l-4.6,3.5l8.1,4.2l0.4,5.4l2.9,2.9l4.7,0.5l0.4,3.5							l4.4,3.1l-1.9,2.6l0.5,2.7l-3.7,1.4l-0.5,2l-5.3-0.8l3.5-7.8l-0.5-3.6l-6.7-3.3l-3.8-7.3L1068,60l-3.6-1.6l0.8-4.2l-2.9-2.9							l-11.3-1.4l-2.1,1l0.5,4.7l-4.3,4.7l1.2,1.7l4.7,4.1l0.1,2.6l5.3,0.5l0.8,1.1l5.8,2.9l-1,2.8l-18.5-6.1l-6.6-1.7l-12.8-1.6l-1.2,1.7							l5.9,3.1l-2.7,3.6l-6.4-3.2l-5,2.2l-7.6,0.1L1005,76l-5.3-0.6l2.5-3.3l-3.2-0.2l-12.3,4.6l-7.6,2.6l0.4,3.5l-6,1.2l-4-1.9l-1.2-3							l5-0.7l-3.6-3l-12.2-1.8l4.3,3.4L961,80l4.7,3.3l-1.1,3.8l-4.6-1.9l-4-0.3l-8,5.4l4.2,4.1l-3.2,1.4l-11.4-3.5l-2.1,2.1l3.3,2.4							l0.2,2.7l-3.8-1.4l-6-1.7l-1.9-5.8l-1-2.6l-8-4l2.9-0.7l20.1,4.2l6.4-1.5l3.7-2.9l-1.6-3.6l-4-2.6l-17.6-6.1l-11.6-1.3l-7.6-3.2							l-3.6,1.8l0,0l-6.4,2.2l-3.2,0.5l0.4,3.7l7.2,3.7l-2.8,4.1l6.4,6.3l-1.7,4.8l4.9,4.1l-0.9,3.7l7.3,3.9l-0.9,2.9l-3.3,3.3l-7.9,7.4							l0,0l5.3,2.8l-4.5,3.2l0,0l0.9,1l-2.6,3.4l2.5,5.5l-1.6,1.9l2.4,1.4l1,2.8l2.1,3.6l5.2,1.5l1,1.4l2.3-0.7l4.8,1.4l1,2.9l-0.6,1.6							l3.7,3.9l2.2,1.1l-0.1,1.1l3.4,1.1l1.7,1.6l-1.6,1.3l-3.9-0.2l-0.8,0.6l1.5,2l2,3.9l0,0l1.8,0.2l1-1.4l1.5,0.3l4.8-0.5l3.8,3.4							l-0.9,1.3l0.7,1.9l4,0.2l2.2,2.7l0.2,1.2l6.6,2.2l3.5-1l3.6,2.9l2.9-0.1l7.6,2l0.4,1.9l-1.3,3.2l1.8,3.4l-0.3,2.1l-4.7,0.5l-2.2,1.7							l0.4,2.8l4.2-1l0.4,1.3l-6.8,2.6l3.2,2.4l-3.2,5.2l-3.4,1l5,3.6l6.2,2.4l7.4,5.1l0.5-0.7l4.5,1.1l7.7,1l7.5,2.9l1.1,1.2l2.9-1							l5.1,1.3l2.1,2.5l3.5,1.4l1.5,0.2l4.3,3.8l2.4,0.4l0.5-1.5l2.6-2.5l0,0l-7.3-7.3l-0.4-4.1l-5.9-5.9l3.5-6.3l4.6-1.1l1.4-3.7l-2.8-1							l-0.2-3.2l-4.2-4.1l-3.6,0.2l-5.3-4.3l1.7-4.7l-1.7-1.2l2.1-6.8l6,3.6l-0.7-4.6l8.1-6.6l7.5-0.2l11.9,4.3l6.6,2.4l4.3-2.5l7.6-0.2							l7.3,3.2l0.8-1.8l6.9,0.3l0.2-3l-9.4-4.2l3.6-2.9l-1.5-1.7l3.9-1.6l-5-4.1l1.4-2.1l16.8-2.1l1.7-1.5l10.8-2.2l3.1-2.5l9,1.3l4.3,6.3							l4.3-1.5l7,2.1l1.2,3.3l4.4-0.4l9.1-5.7l-0.8,1.9l8.3,4.7l18.1,15.5l1.1-3.3l8.3,3.6l6.2-1.6l3.2,1.1l4.1,3.6l3.9,1.2l3.3,2.6l6-0.9							l4.3,3.8l1.7-0.5l4.7-1l6.6-5.4l5.9-2.9l5.3,1.9l5.1,0.1l4.7,2.9l5,0.2l7.9,1.6l2.4-4.3l-4-3.6l1.3-6.4l6.9,2.5l4.8,0.8l6.6,1.5							l3.7,4.6l8.4,2.6l3.9-1.1l5.7-0.8l5.4,0.8l6.5,3l4.9,3.1h4.5l6.7,1l3.6-1.6l5.8-1l4.5-4.4l3.3,0.7l3.9,2.1l5.5-0.5l7.3,2.3l4.4-3.9							l-1.9-2.7l-0.1-6.5l1.2-2l-2.5-3.3l-3.7-1.5l1.7-3l5.1-1.1l6.2-0.2l8.5,1.8l5.9,2.3l7.7,6.1l3.8,2.7l4.4,3.7l6.1,6.1l9.9,1.9							l8.9,4.5l6,5.8h7.5l2.6-2.5l6.9-1.8l1.3,5.6l-0.4,2.3l2.8,6.8l0.6,6l-6.8-1.1l-2.9,2.2l4.7,5.3l3.8,7.3l-2.5,0.1l1.9,3.1l0,0							l1.4,1.1l0,0l0,0l0,0l-0.4-2l4-4.5l5.1,3l3.2-0.1l4.4-3.6l1-3.7l2.1-7.1l1.9-7.2l-1.3-4.3l1-9l-5.2-9.9l-5.5-7.3l-1.3-6.2l-4.7-5.1							l-12.7-6.7l-5.6-0.4l-0.3,3l-5.8-1.3l-5.7-3.8l-8-0.7l4.9-14.1l3.5-11.5l13.1-1.8l14.9,1l2.5-2.8l7.9,0.8l4.3,4.3l6.4-0.6l8.4-1.6							l-7.7-3.5v-9.8l9.1-1.9l12.1,7.1l3.6-6.4l-3.2-4.7l4.7-0.5l6.5,8.1l-2.4,4.6l-0.8,6l0.3,7.5l-5.7,1.3l2.8,2.7l-0.1,3.6l6.4,8.3							l16,13.4l10.5,8.8l5.7,4.3l1.6-5.7l-4.5-6.2l5.7-1.5l-5.4-6.9l5-3.1l-4.7-2.6l-3.4-5l4.1-0.2l-9-8.6l-6.7-1.4l-2.9-2.4l-1.1-5.6							l-3.1-3.9l7,0.8l1.3-2.5l4.7,2.2l6.1-4.6l11.4,4l-1.7-2.6l2-3.6l1.5-4l3.1-0.7l6.5-4.3l9.8,1.2l-0.9-1.5l-3.8-2.3l-4.1-1.6l-9.1-4.6							l-8.1-3l6.1,0.4l2-2.5l0,0l-32.9-21.9l-9.4-2.3l-15.7-2.6l-7.9,0.3l-15.2-1.4l1.8,2.3l8.5,3.4l-2.5,1.8l-14.2-4.8l-6.8,0.6l-9.2-1.1							l-7,0.2l-3.9,1.1l-7.2-1.6l-5.1-3.8l-6.5-2.2l-9.2-0.9l-14.7,1l-16.1-4l-7.8-3l-40.1-3.4l-2.1,2.2l9.3,4.8l-7.5-0.7l-1,1.5l-9.7-1.6							l-5,1.4l-9.3-2.4l3,5.5l-8.9-2.1l-10-4.1l-0.4-2.2l-6-3.3l-9.8-2.6h-6.1l-9.3-0.9l4.7,3.9l-17.2-0.8l-3.9-2.3l-13.3-0.9l-5.3,0.8							l-0.1,1.3l-5.8-3.2l-2.3,0.9l-7.2-1.2l-5.6-0.7l1.1-1.5l6.6-2.8l2.3-1.5l-2.4-2.5L1200,34l-11.5-2.3l-10.8-0.1l-1.9,1.2L1171.7,30.4							L1171.7,30.4z M1009.5,62l-9.9-4.3l-3.1-4.3l3.3-4.9l2.8-5l8.6-4.7l9.8-2.4l11.3-2.4l1.3-1.5l-4.2-1.9l-6.6,0.6l-4.9,1.8l-11.7,0.9							L996.1,37l-6.8,2.7l2.5,2.2l-6.6,4.4l3.9,0.7l-5.4,4.3l1.6,2.8l-3.4,1.1l1.9,2.8l7.9,1.4l2.2,2.3l13.4,0.7L1009.5,62L1009.5,62z							M1323.5,37.3l-17.9-2.6l-10.2-0.2l-3.4,0.9l3.4,3.4l12.4,3.2l4.5-1.2l14.2,0.2C1326.5,41,1323.5,37.3,1323.5,37.3z M1348.7,39.6							l-11.7-1.3l-8.2-0.7l1.7,1.6l10.3,2l6.8,0.4L1348.7,39.6L1348.7,39.6z M1336.2,49.1l-2.5-1.4l-8.3-1.9l-4.1,0.5l-0.8,2l1.1,0.2							l8.8,0.6C1330.4,49.1,1336.2,49.1,1336.2,49.1z M1498.8,61.4l-6-3.6l-1.4,2.2l3.5,1.6L1498.8,61.4z M886.4,155.3l-0.6-1.5l0.2-1.7							l-2.2-0.9l-5-1.1l-6.3,2l-0.7,2.6l5.9,0.7L886.4,155.3z M1476.1,177.1l-7.2-6.2l-5.1-6l-6.8-5.8l-4.9-4l-1.3,0.8l4.4,2.8l-1.9,2.8							l6.8,8.3l7.8,6l6.4,8.3l2.4,4.6l5.5,6.8l3.8,6l4.6,5.2l-0.1-4.8l6.5,3.8l-3-4.4l-9.5-6.3l-3.7-9l8.9,2L1476.1,177.1L1476.1,177.1z" class="path-our-motherland"></path>
                    <g id="Europe">

                        <?foreach($arResult["ITEMS"] as $arItem):?>
                            <?//if ($arItem["IBLOCK_SECTION_ID"]=="3"):?>
                            <path id="<?=$arItem["PROPERTIES"]["id"]["VALUE"]?>" inkscape:connector-curvature="0"
                                  d="<?=$arItem["PROPERTIES"]["d"]["VALUE"]?>"
                                  <?if (LANGUAGE_ID=="ru"):?>
                                  data-tooltip-title="<?=$arItem["PROPERTIES"]["name_ru"]["VALUE"]?>"
                                  <?else:?>
                                  data-tooltip-title="<?=$arItem["NAME"]?>"
                                  <?endif?>
                                  data-tooltip-text="<?=GetMessage("IMPORTER")?><?=$arItem["PROPERTIES"]["year"]["VALUE"]?>"
                                  class="<?=$arItem["PROPERTIES"]["class"]["VALUE"]?>">
                            </path>

                            <?//endif?>
                        <?endforeach;?>

                    </g>
                </svg>
                <div style="top: 19%; left: 12.5%" class="map-continent-control js-worldMapControl"><?= GetMessage("NORTH") ?></div>
                <div style="top: 37%; left: 12.5%" class="map-continent-control js-worldMapControl"><?= GetMessage("CENTRAL") ?></div>
                <div style="top: 62%; left: 26%" class="map-continent-control js-worldMapControl"><?= GetMessage("SOUTH") ?></div>
                <div style="top: 17%; left: 49%" class="map-continent-control js-worldMapControl"><?= GetMessage("EUROPE") ?></div>
                <div style="top: 46%; left: 51%" class="map-continent-control js-worldMapControl"><?= GetMessage("AFRICA") ?></div>
                <div style="top: 30%; left: 58%" class="map-continent-control js-worldMapControl"><?= GetMessage("EAST") ?></div>
                <div style="top: 25%; left: 74%" class="map-continent-control js-worldMapControl"><?= GetMessage("ASIA") ?></div>
                <div style="top: 55%; left: 87%" class="map-continent-control asia-pacific js-worldMapControl"><?= GetMessage("PACIFIC") ?></div>
            </div>


            <div class="map-tooltip js-worldMapTooltip">
                <div class="map-tooltip__title"></div>
                <div class="map-tooltip__desc">
                    <div class="map-tooltip__text"></div>
                </div>
            </div>


            <div class="in-world__return">
                <a href="javascript:;" class="button style_white js-worldMapReturn">
                    <span class="button__text">
                                <svg class="icon icon-prev-left ">
                                    <use xlink:href="#icon-prev-left"></use>
                                </svg>
                        Back to World
                    </span>
                </a>
            </div>

        </div>
        <div class="in-world__legend">
            <div class="map-legend">
                <div class="map-legend__elem">
                    <div style="background-color: #E0CAA0" class="map-legend__circle"></div>
                    <div class="map-legend__title"><?= GetMessage("MOTHERLAND") ?></div>
                </div>
                <div class="map-legend__elem">
                    <div style="background-color: #00A5E2" class="map-legend__circle"></div>
                    <div class="map-legend__title"><?= GetMessage("EXPORT") ?></div>
                </div>
                <div class="map-legend__elem">
                    <div style="background-color: #1C498B" class="map-legend__circle"></div>
                    <div class="map-legend__title"><?= GetMessage("OTHER") ?> </div>
                </div>
            </div>
        </div>
        <div class="in-world__zoom">
            <div data-zoom="plus" class="in-world__zoom-button js-worldMapZoomButton">
                <svg class="icon icon-plus ">
                    <use xlink:href="#icon-plus"></use>
                </svg>
            </div>
            <div data-zoom="minus" class="in-world__zoom-button js-worldMapZoomButton">
                <svg class="icon icon-minus ">
                    <use xlink:href="#icon-minus"></use>
                </svg>
            </div>
        </div>
    </div>


