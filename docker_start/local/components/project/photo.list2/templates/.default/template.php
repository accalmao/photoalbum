<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * variables
 * @var array $arResult
 * @var array $arParams
 */
global $USER;

use \Bitrix\Main\Localization\Loc as Loc;

Loc::loadMessages(__FILE__);
?>
<div class="content">

    <main>

        <div class="album py-5 bg-light">
            <div class="container">
                <h1 class="fw-light">Фотографии выбранного альбома </h1>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php
                    foreach ($arResult['PROGRAMS'] as $title => $programs): ?>

                        <?php
                        foreach ($programs as $program):
                            ?>

                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="<?= $program['IMG'] ?>" class="bd-placeholder-img card-img-top"
                                         width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail"
                                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>
                                        Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"/>
                                    <text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
                                    </img>

                                    <div class="card-body">
                                        <p class="card-text">Название фото: <?= $program['NAME'] ?></p>
                                        <p class="card-text">Описание фото: <?= $program['DECRIP'] ?></p>

                                        <div class="d-flex justify-content-between align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        endforeach; ?>
                    <?php
                    endforeach; ?>

                </div>
            </div>
        </div>

    </main>
    <?php
    if ($arResult['ALBUM_CREATED_BY'] == $USER->GetID()): ?>
        <button data-toggle="modal" data-target="#add-product-modal" class="btn_blue add-ad"  value=" ">
            Добавить фото
        </button>
    <?php endif; ?>

    <div id="add-product-modal" class="modal fade add-product-modal" role="dialog">
        <div class="modal-dialog" action="/ajax/add_product.php" method="POST">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span></button>
                    <h4 class="modal-title">Добавить фото</h4>
                </div>

                <div class="modal-body">
                    <div class="message error hide"></div>
                    <form id="add-product-form" enctype="multipart/form-data">

                        <fieldset class="form-group">
                            <label>Название</label>
                            <input type="text" name="name" class="form-control" maxlength="255"
                                   placeholder="Например, продажа вещей">
                        </fieldset>

                        <fieldset class="form-group">
                            <label>Подробное описание</label>
                            <textarea name="description" class="form-control" rows="3"
                                      placeholder="Описание..."></textarea>
                        </fieldset>

                        <fieldset class="form-group">
                            <div class="upload-div">
                                <label>Фотография</label>
                                <label>
                                    <input type="file" name="image">
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <input type="hidden" name="section" value="<?= htmlspecialchars($_GET["SECTION_ID"]) ?>">
                        </fieldset>

                        <div class="modal-footer">
                            <fieldset class="form-group">
                                <div>
                                    <button type="submit" class="btn_blue sale-submit js-addphoto">Разместить фото
                                    </button>
                                </div>
                            </fieldset>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

