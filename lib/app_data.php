<?php

if (!isset($_SESSION)) {
    session_start();
}

// NO MODIFICAR AQUÍ!!! Reconfigurar estas variables en app_data_local.php
$produccion = true;

// Conf vars
$baseUrl = '';
$secondsToCache = 3600 * 24;
$https = true;
date_default_timezone_set('Europe/Madrid');

$webTitle = 'Osten Academy';
$webAuthor = 'DSS Network';
$themeColor = '#003B4D';

// Conf legal
$confEmpresa = 'Fisiosten Recovery SL';
$confAlias = 'Osten Academy';
$confTitular = 'Fisiosten Recovery SL';
$confMail = 'academy@osten.es';
$confCif = 'B55479349';
$confTelefono = '';
$confDireccion = 'Glorieta Plus Ultra, 2, 41013 Sevilla';

// Google tracking IDs
$trackingAnalyticsId = null;
$trackingAdwordsId = null;
$trackingAdwordsThankyouTarget = null;
$trackingTagmanagerId = null;
$trackingGoogleId = $trackingTagmanagerId ?? $trackingAdwordsId ?? $trackingAnalyticsId ?? null;

// Meta tracking IDs
$trackingMetaId = null;

// SMTP (PHPMailer)
$appSmtp = [
    'host' => 'smtp.1and1.es',
    'auth' => true,
    'username' => 'academy@osten.es',
    'password' => '',
    'secure' => 'tls',
    'port' => 587,
];

if (!isset($baseDir)) {
    $baseDir = dirname(dirname(__FILE__));
}
if (file_exists("$baseDir/lib/app_data_local.php")) {
    require "$baseDir/lib/app_data_local.php";
    $trackingGoogleId = $trackingTagmanagerId ?? $trackingAdwordsId ?? $trackingAnalyticsId ?? null;
}
