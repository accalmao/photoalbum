<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @global $APPLICATION
 */

?>
<html>
<!doctype html>
<html lang="en">
<head>
    <title><?$APPLICATION->ShowTitle(); ?></title>
    <?
    $asset = \Bitrix\Main\Page\Asset::getInstance();
    $asset->addCss(SITE_TEMPLATE_PATH.'/assets/css/bootstrap.min.css');
    $asset->addJs(SITE_TEMPLATE_PATH.'/assets/js/bootstrap.bundle.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH.'/js/bootstrap.js');

    ?>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/main.js"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        #container { min-height: 100% }
        *html #container { height: ex * pression(document.body.clientHeight > 50? "100%" :"50px"); }
        #footer { height: 50px; margin-top: -50px; background: #cccccc; }
        #antifooter { height: 50px; }
        body, html { margin: 0; padding: 0; width: 100%; height: 100%; }
    </style>
</head>
<?$APPLICATION->ShowHead(); ?>
<?$APPLICATION->ShowPanel(); ?>

<header>

    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>

                    <ul class="list-unstyled">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "page",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => ""
                            )
                        );?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                <strong>Album</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>

    </div>
</header>
<?php $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"blue_tabs1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "blue_tabs1",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	),
	false
);?> &nbsp;
