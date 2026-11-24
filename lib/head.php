<?php
if (!isset($baseDir)) {
    $baseDir = dirname(__DIR__);
}
require_once "$baseDir/lib/app_data.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($pageTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
<?php if (!empty($pageNoindex)) : ?>
<meta name="robots" content="noindex">
<?php endif ?>
<meta name="theme-color" content="<?= htmlspecialchars($themeColor) ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="es_ES">
<meta property="og:site_name" content="Osten Academy">
<meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
<meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
<meta name="twitter:card" content="summary_large_image">
<?php if (empty($pageNoindex)) : ?>
<link rel="canonical" href="https://academy.osten.es<?= htmlspecialchars($pageCanonical) ?>">
<?php endif ?>
<meta property="og:url" content="https://academy.osten.es<?= htmlspecialchars($pageCanonical) ?>">
<meta property="og:image" content="https://academy.osten.es/assets/img/og/osten-academy.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Osten Academy · Talleres prácticos en una clínica real">
<?php if (!empty($pageJsonLd)) : ?>
<script type="application/ld+json">
    <?= $pageJsonLd ?>
</script>
<?php endif ?>
<link rel="icon" href="<?= $baseUrl ?>/favicon.svg" type="image/svg+xml">
<link rel="icon" type="image/png" href="<?= $baseUrl ?>/favicon.png">
<link rel="apple-touch-icon" href="<?= $baseUrl ?>/apple-touch-icon.png">
<link rel="preload" href="<?= $baseUrl ?>/assets/fonts/figtree-latin-400-normal.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?= $baseUrl ?>/assets/fonts/figtree-latin-800-normal.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/styles.css">
</head>
<body>
