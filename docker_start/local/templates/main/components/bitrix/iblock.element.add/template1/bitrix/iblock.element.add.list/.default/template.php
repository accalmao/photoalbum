<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
$this->setFrameMode(false);

$colspan = 2;
if ($arResult["CAN_EDIT"] == "Y") $colspan++;
if ($arResult["CAN_DELETE"] == "Y") $colspan++;
?>
<?if (strlen($arResult["MESSAGE"]) > 0):?>
	<?ShowNote($arResult["MESSAGE"])?>
<?endif?>
<table class="data-table" width="40%" align="center">
<?if($arResult["NO_USER"] == "N"):?>
	<thead align="center">
        <tr>
            <td<?=$colspan > 1 ? " colspan=\"".$colspan."\"" : ""?>><h2>Мои фотографии</h2></td><br/>
		</tr>
    <tr>
        <td<?=$colspan > 1 ? " colspan=\"".$colspan."\"" : ""?>><p class="lead">Список фотографий добавленных пользователем в свои альбомы</p></td>
    </tr>
	</thead>
    <thead>
    <tr>
        <th>Имя</th>
        <th>Статус</th>
        <th>Имя раздела</th>
    </tr>
    </thead>
	<tbody>

	<?if (count($arResult["ELEMENTS"]) > 0):?>
		<?foreach ($arResult["ELEMENTS"] as $arElement):?>
    <div class="col-md-7 col-lg-8">

        <tr>
			<td ><!--a href="detail.php?CODE=<?=$arElement["ID"]?>"--><?=$arElement["NAME"]?><!--/a--></td>
			<td><small><?=is_array($arResult["WF_STATUS"]) ? $arResult["WF_STATUS"][$arElement["WF_STATUS_ID"]] : $arResult["ACTIVE_STATUS"][$arElement["ACTIVE"]]?></small></td>
                <td ><small><?$res = CIBlockSection::GetByID($arElement["IBLOCK_SECTION_ID"]);
                        if($ar_res = $res->GetNext())
                        echo $ar_res['NAME'];?><!--/a--></small></td>
			<?if ($arResult["CAN_DELETE"] == "Y"):?>
                <td><?if ($arElement["CAN_DELETE"] == "Y"):?><button class="btn btn-primary btn-sm" type="submit"><a style="color: #ffffff; text-decoration: none; " href="?delete=Y&amp;CODE=<?=$arElement["ID"]?>&amp;<?=bitrix_sessid_get()?>" onClick="return confirm('<?echo CUtil::JSEscape(str_replace("#ELEMENT_NAME#", $arElement["NAME"], GetMessage("IBLOCK_ADD_LIST_DELETE_CONFIRM")))?>')"><?=GetMessage("IBLOCK_ADD_LIST_DELETE")?></a></button><?else:?>&nbsp;<?endif?></td>
			<?endif?>
		</tr>
    </div>
		<?endforeach?>
	<?else:?>
		<tr>
			<td<?=$colspan > 1 ? " colspan=\"".$colspan."\"" : ""?>><?=GetMessage("IBLOCK_ADD_LIST_EMPTY")?></td>
		</tr>
	<?endif?>
	</tbody>
<?endif?>
	<tfoot>
	</tfoot>
</table>

<?if (strlen($arResult["NAV_STRING"]) > 0):?><?=$arResult["NAV_STRING"]?><?endif?>