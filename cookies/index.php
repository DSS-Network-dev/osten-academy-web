<?php
$baseDir = dirname(__DIR__);
$pageTitle = 'Política de cookies | Osten Academy';
$pageDescription = 'Qué cookies usa la web de Osten Academy: solo una cookie técnica al enviar la preinscripción, sin analítica ni publicidad.';
$pageCanonical = '/cookies/';
$pageActive = '';
$pageJsonLd = <<<'JSON'
{
 "@context": "https://schema.org",
 "@graph": [
  {
   "@type": "WebPage",
   "@id": "https://academy.osten.es/cookies/#webpage",
   "url": "https://academy.osten.es/cookies/",
   "name": "Política de cookies | Osten Academy",
   "description": "Qué cookies usa la web de Osten Academy: solo una cookie técnica al enviar la preinscripción, sin analítica ni publicidad.",
   "inLanguage": "es-ES",
   "isPartOf": {
    "@id": "https://academy.osten.es/#website"
   },
   "publisher": {
    "@id": "https://academy.osten.es/#organizacion"
   },
   "breadcrumb": {
    "@id": "https://academy.osten.es/cookies/#breadcrumb"
   }
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://academy.osten.es/cookies/#breadcrumb",
   "itemListElement": [
    {
     "@type": "ListItem",
     "position": 1,
     "name": "Inicio",
     "item": "https://academy.osten.es/"
    },
    {
     "@type": "ListItem",
     "position": 2,
     "name": "Política de cookies",
     "item": "https://academy.osten.es/cookies/"
    }
   ]
  }
 ]
}
JSON;
require "$baseDir/lib/head.php";
require "$baseDir/lib/header.php";
?>
<main id="contenido">
<div class="view is-on"><section class="page-head"><div class="wrap"><p class="eyebrow">Información legal</p><h1>Política de cookies</h1><p class="lead">Esta web no usa cookies de analítica ni de publicidad.</p></div></section>
<section><div class="wrap"><div class="prose">
<h2>1. Qué son las cookies</h2>
<p>Las cookies son pequeños archivos que una web guarda en tu navegador para recordar información sobre tu visita.</p>

<h2>2. Cookies que usa esta web</h2>
<p>Osten Academy solo usa una cookie técnica propia, y únicamente cuando envías el formulario de preinscripción:</p>
<table class="kv"><thead><tr><th>Cookie</th><th>Titular</th><th>Finalidad</th><th>Duración</th></tr></thead><tbody>
<tr><td>PHPSESSID</td><td>Propia</td><td>Técnica: evita envíos repetidos del formulario en pocos segundos.</td><td>Se borra al cerrar el navegador</td></tr>
</tbody></table>
<p>Al ser una cookie técnica necesaria para el servicio que pides, está exenta del deber de consentimiento según el artículo 22.2 de la LSSI-CE, por eso la web no muestra un aviso de cookies.</p>
<p>No usamos cookies de analítica, publicidad ni redes sociales, y las tipografías se sirven desde nuestro propio servidor, sin conexiones a terceros. Los enlaces a otras webs (osten.es, ostenrecovery.es o la AEPD) se rigen por sus propias políticas de cookies.</p>

<h2>3. Cómo gestionar las cookies</h2>
<p>Puedes ver, bloquear y borrar las cookies desde la configuración de tu navegador:</p>
<ul>
<li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
<li><a href="https://support.mozilla.org/es/kb/Borrar%20cookies" target="_blank" rel="noopener">Mozilla Firefox</a></li>
<li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
<li><a href="https://support.microsoft.com/es-es/microsoft-edge" target="_blank" rel="noopener">Microsoft Edge</a></li>
</ul>
<p>Si bloqueas todas las cookies, el formulario de preinscripción sigue funcionando.</p>

<h2>4. Cambios</h2>
<p>Si en el futuro incorporamos cookies de analítica u otras que requieran tu consentimiento, actualizaremos esta política y te pediremos permiso antes de instalarlas.</p>
<p class="upd">Última actualización: 23 de noviembre de 2026.</p></div></div></section></div>
</main>
<?php
require "$baseDir/lib/footer.php";
require "$baseDir/lib/foot.php";
?>
