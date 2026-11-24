<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

if (!isset($baseDir)) {
    $baseDir = dirname(dirname(__FILE__));
}

require_once "$baseDir/vendor/autoload.php";

$mailFrom = 'academy@osten.es';

/**
 * Inicializa PHPMailer con la configuración SMTP de app_data.
 */
function ini_email(): PHPMailer
{
    global $mailFrom, $webTitle, $confMail, $produccion, $appSmtp;

    $smtp = array_merge([
        'host' => 'smtp.1and1.es',
        'auth' => true,
        'username' => 'academy@osten.es',
        'password' => '',
        'secure' => 'tls',
        'port' => 587,
    ], $appSmtp ?? []);

    $email = new PHPMailer(true);
    $email->SMTPDebug = empty($produccion) ? 3 : 0;
    $email->isSMTP();
    $email->Host = $smtp['host'];
    $email->SMTPAuth = (bool)$smtp['auth'];
    $email->Username = $smtp['username'];
    $email->Password = $smtp['password'];
    $email->SMTPSecure = $smtp['secure'] ?: '';
    $email->Port = (int)$smtp['port'];
    if (empty($smtp['secure'])) {
        $email->SMTPAutoTLS = false;
    }
    $email->CharSet = 'UTF-8';
    $email->isHTML(false);

    $email->setFrom($mailFrom, $webTitle ?? 'Osten Academy');
    if (!empty($confMail) && $confMail !== $mailFrom) {
        $email->addReplyTo($confMail, $webTitle ?? 'Osten Academy');
    }

    return $email;
}

/**
 * Envía un email ya configurado.
 */
function send_email(PHPMailer $email): bool|string
{
    try {
        $email->send();

        return true;
    } catch (PHPMailerException $e) {
        return $email->ErrorInfo;
    }
}
