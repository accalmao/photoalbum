<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}

/**
 * variables
 * @var array $arResult
 * @var array $arParams
 */

use \Bitrix\Main\Localization\Loc as Loc;
Loc::loadMessages(__FILE__);
?>
<div class="content">
    <main>

        <div class="album py-5 bg-light">
            <div class="container">
                <h1 class="fw-light">Все альбомы</h1>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <?
    foreach ($arResult['PROGRAMS'] as $title => $programs): ?>

            <?
            foreach ($programs as $program):
                ?>

                                <div class="col">
                                    <div class="card shadow-sm">
                                        <img src="<?= $program['IMG'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="225"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

                                        <div class="card-body">
                                            <p class="card-text"><?= $program['NAME'] ?></p>
                                            <p class="card-text"><?= $program['DECRIP'] ?></p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a style="text-decoration: none; color:#000000;" href="<?= $program['URL'] ?>">Подробнее</a></button>
                                                </div>
                                                <small class="text-muted">Автор:<?$rsUser = CUser::GetByID($program['MODIFIED_BY']);
                                                    $arUser = $rsUser->Fetch();
                                                    echo "<pre>"; print_r($arUser['LOGIN']); echo "</pre>";
                                                    ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

            <?
            endforeach; ?>
    <?
    endforeach; ?>
                </div>
            </div>
        </div>

    </main>
</div>
