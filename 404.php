<?php
$baseDir = __DIR__;
$pageTitle = 'Página no encontrada | Osten Academy';
$pageDescription = 'Talleres prácticos de sábado para estudiantes de Fisioterapia y Medicina en Sevilla: vendaje, exploración, ecografía y más. Grupos de 16 y 80 % de práctica.';
$pageCanonical = '/';
$pageActive = '';
$pageNoindex = true;
require "$baseDir/lib/head.php";
require "$baseDir/lib/header.php";
?>
<main id="contenido">
<div class="view is-on"><section class="page-head"><div class="wrap"><p class="eyebrow">Error 404</p><h1>Esta página no existe</h1><p class="lead">Puede que el enlace esté mal escrito o que la página se haya movido.</p><p style="margin-top:24px"><a class="btn btn-primary" href="/">Volver al inicio</a> <a class="btn btn-ghost" href="/cursos/">Ver talleres</a></p></div></section></div>
</main>
<?php
require "$baseDir/lib/footer.php";
require "$baseDir/lib/foot.php";
?>
