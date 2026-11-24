<?php
$baseDir = dirname(__DIR__);
$pageTitle = 'Instalaciones: dónde se imparten los talleres | Osten Academy';
$pageDescription = 'El aula de Osten Academy en Sevilla, las clínicas Clínica Osten y Osten Recovery y el futuro centro de formación que estamos preparando.';
$pageCanonical = '/instalaciones/';
$pageActive = 'instalaciones';
$pageJsonLd = <<<'JSON'
{
 "@context": "https://schema.org",
 "@graph": [
  {
   "@type": "WebSite",
   "@id": "https://academy.osten.es/#website",
   "url": "https://academy.osten.es/",
   "name": "Osten Academy",
   "inLanguage": "es-ES",
   "publisher": {
    "@id": "https://academy.osten.es/#organizacion"
   }
  },
  {
   "@type": "EducationalOrganization",
   "@id": "https://academy.osten.es/#organizacion",
   "name": "Osten Academy",
   "legalName": "Fisiosten Recovery SL",
   "taxID": "B55479349",
   "email": "academy@osten.es",
   "url": "https://academy.osten.es/",
   "logo": {
    "@type": "ImageObject",
    "url": "https://academy.osten.es/assets/img/logos/academy/osten-academy-logo.png",
    "width": 800,
    "height": 132
   },
   "description": "Formación práctica para estudiantes de Fisioterapia y Medicina impartida por los profesionales de Clínica Osten y Osten Recovery.",
   "address": {
    "@type": "PostalAddress",
    "streetAddress": "Glorieta Plus Ultra, 2",
    "postalCode": "41013",
    "addressLocality": "Sevilla",
    "addressRegion": "Andalucía",
    "addressCountry": "ES"
   },
   "parentOrganization": [
    {
     "@id": "https://osten.es/#organizacion"
    },
    {
     "@id": "https://ostenrecovery.es/#organizacion"
    }
   ]
  },
  {
   "@type": "MedicalClinic",
   "@id": "https://osten.es/#organizacion",
   "name": "Clínica Osten",
   "url": "https://osten.es/",
   "medicalSpecialty": "Musculoskeletal",
   "address": {
    "@type": "PostalAddress",
    "streetAddress": "Glorieta Plus Ultra, 2",
    "postalCode": "41013",
    "addressLocality": "Sevilla",
    "addressCountry": "ES"
   }
  },
  {
   "@type": "MedicalBusiness",
   "@id": "https://ostenrecovery.es/#organizacion",
   "name": "Osten Recovery",
   "url": "https://ostenrecovery.es/",
   "description": "Fisioterapia avanzada, readaptación y podología en Sevilla (Palmera, Nervión y Dos Hermanas).",
   "address": {
    "@type": "PostalAddress",
    "addressLocality": "Sevilla",
    "addressCountry": "ES"
   }
  },
  {
   "@type": "ImageObject",
   "@id": "https://academy.osten.es/#ogimage",
   "url": "https://academy.osten.es/assets/img/og/osten-academy.jpg",
   "width": 1200,
   "height": 630
  },
  {
   "@type": "WebPage",
   "@id": "https://academy.osten.es/instalaciones/#webpage",
   "url": "https://academy.osten.es/instalaciones/",
   "name": "Instalaciones: dónde se imparten los talleres | Osten Academy",
   "description": "El aula de Osten Academy en Sevilla, las clínicas Clínica Osten y Osten Recovery y el futuro centro de formación que estamos preparando.",
   "inLanguage": "es-ES",
   "isPartOf": {
    "@id": "https://academy.osten.es/#website"
   },
   "about": {
    "@id": "https://academy.osten.es/#organizacion"
   },
   "primaryImageOfPage": {
    "@id": "https://academy.osten.es/#ogimage"
   },
   "breadcrumb": {
    "@id": "https://academy.osten.es/instalaciones/#breadcrumb"
   }
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://academy.osten.es/instalaciones/#breadcrumb",
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
     "name": "Instalaciones",
     "item": "https://academy.osten.es/instalaciones/"
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
<div class="view is-on"><section class="page-head"><div class="wrap"><p class="eyebrow">Instalaciones</p><h1>Dónde aprenderás</h1><p class="lead">Nuestra aula de formación, las clínicas y el centro que estamos preparando.</p></div></section>
<section id="aula"><div class="wrap">
    <p class="eyebrow">Nuestra aula</p><h2>Donde damos los talleres</h2>
    <div class="fac"><img loading="lazy" decoding="async" src="/assets/img/instalaciones/aula-formacion.jpg" alt="Aula de formación de Osten con camillas, pantalla y alumnos">
      <ul><li><b>Camillas</b> para trabajar por parejas</li><li><b>Pantalla grande</b> para las demostraciones</li><li><b>Hasta 16 alumnos</b> por taller</li><li><b>Material clínico</b> incluido en cada taller</li><li><b>En Sevilla</b>, junto a la clínica</li></ul></div>
  </div></section>
  <section id="clinicas" style="background:#fff;border-top:1px solid var(--line);border-bottom:1px solid var(--line)"><div class="wrap">
    <p class="eyebrow">Las clínicas</p><h2>Conoce Clínica Osten y Osten Recovery</h2>
    <p class="lead">Las instalaciones donde trabajan nuestros traumatólogos, fisioterapeutas y podólogos.</p>
    <div class="clinic-links">
      <aside class="qs-card clinic"><img loading="lazy" decoding="async" class="brand-logo" src="/assets/img/logos/clinica-osten.png" alt="Clínica Osten"><p class="sub">Traumatología y medicina deportiva · Glorieta Plus Ultra, 2, Sevilla</p><a class="btn" href="https://osten.es" target="_blank" rel="noopener">Ver Clínica Osten →</a></aside>
      <aside class="qs-card recovery"><img loading="lazy" decoding="async" class="brand-logo" src="/assets/img/logos/osten-recovery.png" alt="Osten Recovery"><p class="sub">Fisioterapia avanzada y readaptación · Palmera, Nervión y Dos Hermanas</p><a class="btn" href="https://ostenrecovery.es" target="_blank" rel="noopener">Ver Osten Recovery →</a></aside>
    </div>
  </div></section>
  <section id="futuro"><div class="wrap">
    <p class="eyebrow">Hacia dónde vamos</p><h2>El futuro centro Osten Academy</h2>
    <p class="lead">Un espacio propio en Sevilla con salas de sanidad, informática y negocios, y un lobby con cafetería para desayunos y brunch.</p>
    <div class="gal">
      <figure class="big"><img loading="lazy" decoding="async" src="/assets/img/instalaciones/concepto-centro.jpg" alt="Concepto del centro: fachada, sala de sanidad, aula de informática, sala de finanzas y lobby"><figcaption>Así lo imaginamos · imagen creada con IA</figcaption></figure>
      <figure><img loading="lazy" decoding="async" src="/assets/img/instalaciones/fachada.jpg" alt="Ilustración de la fachada del centro"><figcaption>Fachada · ilustración conceptual</figcaption></figure>
      <figure><img loading="lazy" decoding="async" src="/assets/img/instalaciones/vista-zonas.jpg" alt="Vista general del centro con sus cuatro zonas"><figcaption>Distribución por zonas · ilustración conceptual</figcaption></figure>
    </div>
  </div></section></div>
</main>
<?php
require "$baseDir/lib/footer.php";
require "$baseDir/lib/foot.php";
?>
