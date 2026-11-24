<?php
$baseDir = dirname(__DIR__);
$pageTitle = 'Aviso legal | Osten Academy';
$pageDescription = 'Datos del titular de academy.osten.es y condiciones de uso de la web de Osten Academy.';
$pageCanonical = '/aviso-legal/';
$pageActive = '';
$pageJsonLd = <<<'JSON'
{
 "@context": "https://schema.org",
 "@graph": [
  {
   "@type": "WebPage",
   "@id": "https://academy.osten.es/aviso-legal/#webpage",
   "url": "https://academy.osten.es/aviso-legal/",
   "name": "Aviso legal | Osten Academy",
   "description": "Datos del titular de academy.osten.es y condiciones de uso de la web de Osten Academy.",
   "inLanguage": "es-ES",
   "isPartOf": {
    "@id": "https://academy.osten.es/#website"
   },
   "publisher": {
    "@id": "https://academy.osten.es/#organizacion"
   },
   "breadcrumb": {
    "@id": "https://academy.osten.es/aviso-legal/#breadcrumb"
   }
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://academy.osten.es/aviso-legal/#breadcrumb",
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
     "name": "Aviso legal",
     "item": "https://academy.osten.es/aviso-legal/"
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
<div class="view is-on"><section class="page-head"><div class="wrap"><p class="eyebrow">Información legal</p><h1>Aviso legal</h1><p class="lead">Datos del titular de la web y condiciones de uso.</p></div></section>
<section><div class="wrap"><div class="prose">
<h2>1. Titular de la web</h2>
<p>En cumplimiento del artículo 10 de la Ley 34/2002, de servicios de la sociedad de la información y de comercio electrónico (LSSI-CE), te informamos de que esta web, Osten Academy, es titularidad de:</p>
<table class="kv"><tbody>
<tr><th>Titular</th><td>FISIOSTEN RECOVERY SL</td></tr>
<tr><th>CIF</th><td>B55479349</td></tr>
<tr><th>Domicilio</th><td>Glorieta Plus Ultra, 2, 41013 Sevilla</td></tr>
<tr><th>Registro</th><td>Inscrita en el Registro Mercantil de Sevilla, hoja SE-144909, inscripción 1.ª</td></tr>
<tr><th>Email</th><td><a href="mailto:academy@osten.es">academy@osten.es</a></td></tr>
<tr><th>Web</th><td>https://academy.osten.es</td></tr>
</tbody></table>
<p>Osten Academy es la marca de formación de Fisiosten Recovery SL, con la participación de los profesionales de Clínica Osten y Osten Recovery.</p>

<h2>2. Objeto y aceptación</h2>
<p>Esta web informa sobre los talleres y cursos de Osten Academy y permite enviar una preinscripción. Navegar por ella te atribuye la condición de usuario e implica que aceptas este aviso legal en la versión publicada en ese momento, por lo que te recomendamos leerlo cada vez que la visites.</p>

<h2>3. Condiciones de uso</h2>
<p>Te comprometes a usar la web y sus contenidos de forma lícita, de buena fe y conforme a este aviso legal, y a no emplearlos para actividades ilícitas, para dañar la web o los sistemas del titular o de terceros, ni para enviar información falsa o de otras personas sin su autorización.</p>

<h2>4. Información sobre los talleres</h2>
<p>Las fechas, precios y contenidos de los talleres se publican con carácter informativo y pueden ser provisionales hasta que se confirme la plaza. Enviar la preinscripción no supone una reserva en firme: te escribiremos para confirmar plaza y forma de pago. Las condiciones de inscripción, pago y cancelación se te comunicarán antes de formalizar la reserva.</p>
<p>Las imágenes del futuro centro Osten Academy son ilustraciones conceptuales, algunas creadas con inteligencia artificial, y no muestran instalaciones existentes.</p>

<h2>5. Propiedad intelectual e industrial</h2>
<p>Los textos, diseños, logotipos y demás contenidos de la web son propiedad de FISIOSTEN RECOVERY SL o se usan con autorización de sus titulares. Las marcas Clínica Osten y Osten Recovery pertenecen a sus respectivos titulares. Los escudos y nombres de clubes, instituciones y publicaciones que aparecen en las trayectorias de los docentes pertenecen a sus titulares y se mencionan solo para describir esa trayectoria.</p>
<p>No está permitido reproducir, distribuir, comunicar públicamente ni transformar estos contenidos sin autorización expresa, salvo para uso personal y privado.</p>

<h2>6. Responsabilidad</h2>
<p>Trabajamos para que la información sea correcta y esté actualizada, pero no podemos garantizar la ausencia de errores ni la disponibilidad continua de la web. FISIOSTEN RECOVERY SL no se hace responsable de los daños derivados de un uso indebido de la web, de interrupciones técnicas ajenas a su control ni de virus o elementos dañinos introducidos por terceros.</p>
<p>Los contenidos tienen finalidad formativa e informativa y no sustituyen la valoración de un profesional sanitario.</p>

<h2>7. Enlaces a otras webs</h2>
<p>La web contiene enlaces a sitios de terceros, como osten.es u ostenrecovery.es. No controlamos sus contenidos ni somos responsables de ellos; cada sitio se rige por sus propias condiciones y políticas.</p>

<h2>8. Protección de datos y cookies</h2>
<p>El tratamiento de los datos que nos facilites se explica en la <a href="/privacidad/">política de privacidad</a>, y el uso de cookies en la <a href="/cookies/">política de cookies</a>.</p>

<h2>9. Legislación aplicable y jurisdicción</h2>
<p>Este aviso legal se rige por la legislación española. Para cualquier controversia, las partes se someten a los juzgados y tribunales de Sevilla, salvo que la normativa de consumidores establezca como competente el del domicilio del usuario.</p>
<p class="upd">Última actualización: 23 de noviembre de 2026.</p></div></div></section></div>
</main>
<?php
require "$baseDir/lib/footer.php";
require "$baseDir/lib/foot.php";
?>
