<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/**
 * @global $APPLICATION
 */
$APPLICATION->SetTitle("Добавление альбома");
?>
<?php CModule::IncludeModule('iblock');
$IBLOCK_ID = 5;?>
<div  align="center">
    <h1>Добавление альбома</h1>
    <form style="width: 40%" class="card p-2" name="add_my_ankete" action="/album/add_form_result.php" method="POST" enctype="multipart/form-data">

        <h4>Название</h4>
        <input type="text" class="form-control" name="name" maxlength="255" value="" placeholder="Заполните название">

        <h4>Фотография Альбома</h4>
        <input type="file" class="form-control" size="30" name="image" value="">

        <h4>Описание альбома</h4>
        <textarea name="description" class="form-control" placeholder="Заполните описание"></textarea>
        <p></p>
        <input type="submit" value="Отправить">
    </form>
</div>
    <br><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>