<?php
$baseDir = dirname(__DIR__);
$pageTitle = 'Preguntas frecuentes | Osten Academy';
$pageDescription = 'Diploma, plazas mínimas, formas de pago, descuentos para grupos y cursos online: todo lo que necesitas saber antes de apuntarte a Osten Academy.';
$pageCanonical = '/dudas/';
$pageActive = 'dudas';
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
   "@type": "FAQPage",
   "@id": "https://academy.osten.es/dudas/#webpage",
   "url": "https://academy.osten.es/dudas/",
   "name": "Preguntas frecuentes | Osten Academy",
   "description": "Diploma, plazas mínimas, formas de pago, descuentos para grupos y cursos online: todo lo que necesitas saber antes de apuntarte a Osten Academy.",
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
    "@id": "https://academy.osten.es/dudas/#breadcrumb"
   },
   "mainEntity": [
    {
     "@type": "Question",
     "name": "¿Necesito experiencia previa?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "No. Basta con estar en 3.º o 4.º de Fisioterapia o Medicina. Empezamos por la base y vamos subiendo de nivel en el mismo día."
     }
    },
    {
     "@type": "Question",
     "name": "¿Me dan un diploma?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Sí. Al terminar recibes un diploma de asistencia de Osten Academy con las horas y los contenidos del taller."
     }
    },
    {
     "@type": "Question",
     "name": "¿Y si no se llena el grupo?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "El taller se hace a partir de 8 alumnos. Si no se llega, te ofrecemos otra fecha o te devolvemos el importe completo."
     }
    },
    {
     "@type": "Question",
     "name": "¿Cómo se paga?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Con tarjeta, a través de la pasarela de pago segura de BBVA, que activaremos en los próximos días. Mientras tanto, envía tu preinscripción y te confirmamos plaza y forma de pago."
     }
    },
    {
     "@type": "Question",
     "name": "¿Hay descuentos?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Sí: packs de 3 talleres y de los 6 talleres, y un 10 % si venís 4 o más de la misma clase."
     }
    },
    {
     "@type": "Question",
     "name": "¿Cuándo salen los cursos online?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Estamos preparando el temario. Si quieres que te avisemos, pulsa «Avisadme cuando estén» en la sección Online o indícalo en tu preinscripción."
     }
    },
    {
     "@type": "Question",
     "name": "¿Puedo ir si ya me he graduado?",
     "acceptedAnswer": {
      "@type": "Answer",
      "text": "Sí, si quedan plazas una semana antes del taller. Los estudiantes tienen prioridad."
     }
    }
   ]
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://academy.osten.es/dudas/#breadcrumb",
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
     "name": "Dudas",
     "item": "https://academy.osten.es/dudas/"
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
<div class="view is-on"><section class="page-head"><div class="wrap"><p class="eyebrow">Dudas</p><h1>Preguntas frecuentes</h1><p class="lead">Todo lo que necesitas saber antes de apuntarte.</p></div></section>
<section id="faq">
  <div class="wrap">
    <p class="eyebrow">Dudas frecuentes</p>
    <h2>Antes de apuntarte</h2>
    <div class="faq">
      <details><summary>¿Necesito experiencia previa?</summary><p>No. Basta con estar en 3.º o 4.º de Fisioterapia o Medicina. Empezamos por la base y vamos subiendo de nivel en el mismo día.</p></details>
      <details><summary>¿Me dan un diploma?</summary><p>Sí. Al terminar recibes un diploma de asistencia de Osten Academy con las horas y los contenidos del taller.</p></details>
      <details><summary>¿Y si no se llena el grupo?</summary><p>El taller se hace a partir de 8 alumnos. Si no se llega, te ofrecemos otra fecha o te devolvemos el importe completo.</p></details>
      <details><summary>¿Cómo se paga?</summary><p>Con tarjeta, a través de la pasarela de pago segura de BBVA, que activaremos en los próximos días. Mientras tanto, envía tu preinscripción y te confirmamos plaza y forma de pago.</p></details><details><summary>¿Hay descuentos?</summary><p>Sí: packs de 3 talleres y de los 6 talleres, y un 10&nbsp;% si venís 4 o más de la misma clase.</p></details><details><summary>¿Cuándo salen los cursos online?</summary><p>Estamos preparando el temario. Si quieres que te avisemos, pulsa «Avisadme cuando estén» en la sección Online o indícalo en tu preinscripción.</p></details>
      <details><summary>¿Puedo ir si ya me he graduado?</summary><p>Sí, si quedan plazas una semana antes del taller. Los estudiantes tienen prioridad.</p></details>
    </div>
  </div>
</section>
<section id="contacto" style="padding-top:0"><div class="wrap"><p class="eyebrow">¿Más dudas?</p><h2>Escríbenos</h2>
  <div class="contact">
    <aside class="qs-card clinic"><img loading="lazy" decoding="async" class="brand-logo" src="/assets/img/logos/clinica-osten.png" alt="Clínica Osten"><p class="sub">Glorieta Plus Ultra, 2 · 41013 Sevilla</p><a class="btn" href="https://osten.es" target="_blank" rel="noopener">osten.es →</a></aside>
    <aside class="qs-card recovery"><img loading="lazy" decoding="async" class="brand-logo" src="/assets/img/logos/osten-recovery.png" alt="Osten Recovery"><p class="sub">Fisioterapia, podología y readaptación</p><a class="btn" href="https://ostenrecovery.es" target="_blank" rel="noopener">ostenrecovery.es →</a></aside>
  </div></div></section></div>
</main>
<?php
require "$baseDir/lib/footer.php";
require "$baseDir/lib/foot.php";
?>
