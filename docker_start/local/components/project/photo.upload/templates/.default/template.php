<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * variables
 *
 * @var array $arResult
 * @var array $arParams
 */

use \Bitrix\Main\Localization\Loc as Loc;

Loc::loadMessages(__FILE__);
global $APPLICATION;
?>
<div class="container">
    <div class="py-5 text-center">

        <img width="72"
             src="<? $_SERVER['DOCUMENT_ROOT'] ?>/albums/icons/album.svg"
             height="72"
             class="d-block mx-auto mb-4" alt="">
        <h2>Загрузка фотографий</h2>
        <p class="lead">
            На данной странице вы можете добавить фотографии и указать описания
            им.
        </p>
    </div>
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Добавление</h4>
        <form action="<?= $APPLICATION->GetCurPage(); ?>"
              class="needs-validation" novalidate="" id="img-upload"
              enctype="multipart/form-data">
            <input name="ALBUM_CODE" id="ALBUM_CODE" hidden
                   value="<?= $arResult["ITEMS"][0]["ALBUM_CODE"] ?>">
            <hr class="mb-4">
            <div class="mb-3">
                <label for="PHOTO_DESCRIPTION">Описание фото</label> <textarea
                        class="form-control"
                        id="PHOTO_DESCRIPTION"
                        name="PHOTO_DESCRIPTION"
                        placeholder="Введите описание Изображения"
                        required="" rows="5"></textarea>
                <div class="invalid-feedback">
                    Пожалуйста введите описание фото
                </div>
            </div>
            <div class="mb-3">
                <label for="img">Загрузите изображение</label> <br>
                <input class="fileToUpload" type="file" id="img" multiple
                       placeholder="Имя файла" name="img[]">
                <div class="invalid-feedback" id="imgER">
                    Пожалуйста выберите изображения для загрузки
                </div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit"
                    id="upload">Завершить добавление
            </button>
        </form>
    </div>
</div>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">
        © 2001-2020 Company Name
    </p>
</footer>
