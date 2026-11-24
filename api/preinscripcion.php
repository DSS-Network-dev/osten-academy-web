<?php
// Recibe el formulario de preinscripción y lo envía por correo.
declare(strict_types=1);

$baseDir = dirname(__DIR__);
require_once "$baseDir/lib/app_data.php";
require_once "$baseDir/lib/mail.php";

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('Cache-Control: no-store');

function respond(int $code, array $body): void
{
    http_response_code($code);
    echo json_encode($body, JSON_UNESCAPED_UNICODE);
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    respond(405, ['ok' => false, 'error' => 'method']);
}

// Honeypot antispam: los bots rellenan este campo oculto.
if (!empty($_POST['bot-field'])) {
    respond(200, ['ok' => true]);
}

// Límite simple: un envío cada 30 s por sesión.
if (isset($_SESSION['oa_last']) && time() - (int)$_SESSION['oa_last'] < 30) {
    respond(429, ['ok' => false, 'error' => 'rate']);
}

function field(string $k, int $max = 300): string
{
    $v = $_POST[$k] ?? '';
    if (is_array($v)) {
        $v = implode(', ', $v);
    }
    $v = trim(str_replace(["\r", "\0"], '', (string)$v));

    return mb_substr($v, 0, $max);
}

$data = [
    'Nombre'       => field('nombre', 120),
    'Email'        => field('email', 160),
    'Teléfono'     => field('telefono', 40),
    'Universidad'  => field('universidad', 160),
    'Grado'        => field('grado', 40),
    'Curso'        => field('curso', 40),
    'Compañeros'   => field('grupo', 300),
    'Comentarios'  => field('comentarios', 2000),
];

// Talleres: llegan como varios campos "talleres" -> PHP solo guarda el último si no se agrupan.
$raw = file_get_contents('php://input') ?: '';
$talleres = [];
foreach (explode('&', $raw) as $pair) {
    [$k, $v] = array_pad(explode('=', $pair, 2), 2, '');
    if (urldecode($k) === 'talleres') {
        $talleres[] = mb_substr(trim(urldecode($v)), 0, 120);
    }
}
$data['Talleres'] = $talleres ? implode("\n  - ", array_merge([''], $talleres)) : '(ninguno)';

$required = ['Nombre', 'Email', 'Teléfono', 'Universidad', 'Grado', 'Curso'];
foreach ($required as $r) {
    if ($data[$r] === '') {
        respond(422, ['ok' => false, 'error' => 'required', 'field' => $r]);
    }
}
if (!filter_var($data['Email'], FILTER_VALIDATE_EMAIL)) {
    respond(422, ['ok' => false, 'error' => 'email']);
}
if (empty($_POST['privacidad'])) {
    respond(422, ['ok' => false, 'error' => 'privacidad']);
}

$body = "Nueva preinscripción recibida desde la web de Osten Academy\n\n";
foreach ($data as $k => $v) {
    $body .= $k . ': ' . ($v === '' ? '—' : $v) . "\n";
}
$body .= "\nAceptó la política de datos: sí\nFecha: " . date('d/m/Y H:i') . "\nIP: " . ($_SERVER['REMOTE_ADDR'] ?? '') . "\n";

try {
    $email = ini_email();
    $email->addAddress($confMail, $webTitle ?? 'Osten Academy');
    $email->addReplyTo($data['Email'], $data['Nombre']);
    $email->Subject = 'Preinscripción Osten Academy · ' . $data['Nombre'];
    $email->Body = $body;

    $result = send_email($email);
    if ($result !== true) {
        error_log('[osten-academy] PHPMailer error: ' . $result);
        respond(500, ['ok' => false, 'error' => 'mail']);
    }
} catch (\Exception $e) {
    error_log('[osten-academy] PHPMailer exception: ' . $e->getMessage());
    respond(500, ['ok' => false, 'error' => 'mail']);
}

$_SESSION['oa_last'] = time();
respond(200, ['ok' => true]);
