<?php

require_once 'vendor/autoload.php';

use Likemusic\YandexFleetTaxi\LeadMonitor\GoogleSpreadsheet\Monitor as GoogleSpreadsheetMonitor;

$configJson = file_get_contents('config.json');
$config = json_decode($configJson, true);

$googleSpreadsheetConfig = $config['google-spreadsheet'];
$yandexConfig = $config['yandex'];

$monitor = new GoogleSpreadsheetMonitor(
    $googleSpreadsheetConfig['credentialsPath'],
    $googleSpreadsheetConfig['tokenPath'],
    $googleSpreadsheetConfig['spreadsheetId'],
    $yandexConfig['login'],
    $yandexConfig['password'],
    $yandexConfig['parkId'],
);

$monitor->run();
