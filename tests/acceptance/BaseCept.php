<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Проверяем доступность главной страницы');
$I->amOnUrl("http://site.root");
$I->seeElement('body');
