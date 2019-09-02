#!/usr/bin/env php
<?php

//Данный файл называется cli.php и расположен на уровень выше document root веб-сервера (папка web).
$_SERVER['DOCUMENT_ROOT'] = realpath(__DIR__ . '/../' . getenv('PROJECT_PREFIX'));
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

//Папка с миграциями должна быть создана и находиться рядом с этим скриптом (папка migrations).
define('CLI_MIGRATIONS_PATH', __DIR__ . '/../migrations');

//Отключаем сбор статистики, проверку событий и агентов.
define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
define('CHK_EVENT', true);

//Подключаем загрузку классов composer.
//Файл composer.json расположен на том же уровне, что и данный файл.
//Все зависимости из composer установлены.
require_once __DIR__ . '/../vendor/autoload.php';

//Подключаем ядро битрикса.
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

//Создаем приложение Symfony console.
$application = new \Symfony\Component\Console\Application;

//Регистрируем команды для миграций.
\marvin255\bxmigrate\cli\Factory::registerCommands($application, CLI_MIGRATIONS_PATH);

//Запускаем приложение на исполнение.
$application->run();
