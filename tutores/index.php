<?php
$baseDir = dirname(__DIR__);
$pageTitle = 'Tutores: traumatólogos y fisioterapeutas de Osten | Osten Academy';
$pageDescription = 'Aprende con los traumatólogos de Clínica Osten y los fisioterapeutas y la podóloga de Osten Recovery: deporte de élite, investigación y consulta diaria.';
$pageCanonical = '/tutores/';
$pageActive = 'tutores';
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
   "@type": "CollectionPage",
   "@id": "https://academy.osten.es/tutores/#webpage",
   "url": "https://academy.osten.es/tutores/",
   "name": "Tutores: traumatólogos y fisioterapeutas de Osten | Osten Academy",
   "description": "Aprende con los traumatólogos de Clínica Osten y los fisioterapeutas y la podóloga de Osten Recovery: deporte de élite, investigación y consulta diaria.",
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
    "@id": "https://academy.osten.es/tutores/#breadcrumb"
   },
   "mainEntity": {
    "@type": "ItemList",
    "itemListElement": [
     {
      "@type": "ListItem",
      "position": 1,
      "item": {
       "@id": "https://academy.osten.es/tutores/#ignacio-torrescusa"
      }
     },
     {
      "@type": "ListItem",
      "position": 2,
      "item": {
       "@id": "https://academy.osten.es/tutores/#jesus-jimenez"
      }
     },
     {
      "@type": "ListItem",
      "position": 3,
      "item": {
       "@id": "https://academy.osten.es/tutores/#pedro-morales"
      }
     },
     {
      "@type": "ListItem",
      "position": 4,
      "item": {
       "@id": "https://academy.osten.es/tutores/#boris-garcia"
      }
     },
     {
      "@type": "ListItem",
      "position": 5,
      "item": {
       "@id": "https://academy.osten.es/tutores/#andrea-antolin"
      }
     }
    ]
   }
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://academy.osten.es/tutores/#breadcrumb",
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
     "name": "Tutores",
     "item": "https://academy.osten.es/tutores/"
    }
   ]
  },
  {
   "@type": "Person",
   "@id": "https://academy.osten.es/tutores/#ignacio-torrescusa",
   "name": "Ignacio Torrescusa Buzo",
   "jobTitle": "Fisioterapeuta y graduado en CCAFYD",
   "description": "Fisioterapeuta de la Selección Vasca de Rugby; antes, en el Sevilla FC y el CD Utrera. Especialista en fisioterapia deportiva, traumatológica y readaptación. Investiga en hepatología (estudio EHmet-DIA).",
   "image": "https://academy.osten.es/assets/img/tutores/ignacio-torrescusa.jpg",
   "url": "https://academy.osten.es/tutores/#ignacio-torrescusa",
   "worksFor": [
    {
     "@id": "https://ostenrecovery.es/#organizacion"
    }
   ],
   "affiliation": {
    "@id": "https://academy.osten.es/#organizacion"
   }
  },
  {
   "@type": "Person",
   "@id": "https://academy.osten.es/tutores/#jesus-jimenez",
   "name": "Jesús Jiménez Méndez",
   "jobTitle": "Fisioterapeuta",
   "description": "Graduado en Fisioterapia por la Universidad de Sevilla y Máster en Atención Temprana por la Universidad CEU San Pablo. Dirige el área de fisioterapia y readaptación.",
   "image": "https://academy.osten.es/assets/img/tutores/jesus-jimenez.jpg",
   "url": "https://academy.osten.es/tutores/#jesus-jimenez",
   "worksFor": [
    {
     "@id": "https://ostenrecovery.es/#organizacion"
    }
   ],
   "affiliation": {
    "@id": "https://academy.osten.es/#organizacion"
   }
  },
  {
   "@type": "Person",
   "@id": "https://academy.osten.es/tutores/#pedro-morales",
   "name": "Dr. Pedro Morales Sánchez",
   "jobTitle": "Cirujano ortopédico y traumatólogo",
   "description": "Especialista en cirugía de cadera, rodilla y medicina deportiva, formado en Reino Unido, Francia, EE. UU. y Canadá, con más de 16 años de experiencia en artroscopia de cadera.",
   "image": "https://academy.osten.es/assets/img/tutores/pedro-morales.jpg",
   "url": "https://academy.osten.es/tutores/#pedro-morales",
   "worksFor": [
    {
     "@id": "https://osten.es/#organizacion"
    }
   ],
   "affiliation": {
    "@id": "https://academy.osten.es/#organizacion"
   }
  },
  {
   "@type": "Person",
   "@id": "https://academy.osten.es/tutores/#boris-garcia",
   "name": "Dr. Boris García Benítez",
   "jobTitle": "Traumatólogo",
   "description": "Más de 10 años dedicado a la cadera y la rodilla: prótesis y artroscopia. Una veintena de publicaciones científicas y ponente en el congreso mundial SICOT 2026 de Kioto.",
   "image": "https://academy.osten.es/assets/img/tutores/boris-garcia.jpg",
   "url": "https://academy.osten.es/tutores/#boris-garcia",
   "worksFor": [
    {
     "@id": "https://osten.es/#organizacion"
    }
   ],
   "affiliation": {
    "@id": "https://academy.osten.es/#organizacion"
   }
  },
  {
   "@type": "Person",
   "@id": "https://academy.osten.es/tutores/#andrea-antolin",
   "name": "Andrea Antolín Montero",
   "jobTitle": "Podóloga",
   "description": "Podóloga de Osten Recovery. Coordina la sede de Palmera y trabaja la exploración del pie y el estudio de la marcha.",
   "image": "https://academy.osten.es/assets/img/tutores/andrea-antolin.jpg",
   "url": "https://academy.osten.es/tutores/#andrea-antolin",
   "worksFor": [
    {
     "@id": "https://ostenrecovery.es/#organizacion"
    }
   ],
   "affiliation": {
    "@id": "https://academy.osten.es/#organizacion"
   }
  }
 ]
}
JSON;
require "$baseDir/lib/head.php";
require "$baseDir/lib/header.php";
?>
<main id="contenido">
<div class="view is-on"><section class="page-head"><div class="wrap"><p class="eyebrow">Tutores</p><h1>Aprende con quien trata pacientes cada día</h1><p class="lead">Traumatólogos de <span class="bm"><img loading="lazy" decoding="async" class="bm-ic" src="/assets/img/logos/icono-clinica-osten.png" alt="">Clínica Osten</span> y fisioterapeutas y podóloga de <span class="bm"><img loading="lazy" decoding="async" class="bm-ic" src="/assets/img/logos/icono-osten-recovery.png" alt="">Osten Recovery</span>: deporte de élite, investigación y consulta diaria.</p></div></section>
<section id="docentes"><div class="wrap"><div class="tut-list" id="tutList"><article id="ignacio-torrescusa" class="tut can-open"><div class="ph"><div class="ph-in"><img src="/assets/img/tutores/ignacio-torrescusa.jpg" alt="Ignacio Torrescusa Buzo" width="600" height="600" loading="lazy" decoding="async"><span class="ph-more">+ Ver trayectoria</span></div></div>
  <div class="bd"><h3>Ignacio Torrescusa Buzo</h3><div class="role">Fisioterapeuta y graduado en CCAFYD · Director de <span class="bm"><img class="bm-ic" src="/assets/img/logos/icono-osten-recovery.png" alt="">Osten Recovery</span></div>
  <ul class="cv"><li>Fisioterapeuta de la Selección Vasca de Rugby; antes, en el Sevilla FC y el CD Utrera</li><li>Especialista en fisioterapia deportiva, traumatológica y readaptación</li><li>Investiga en hepatología (estudio EHmet-DIA), con comunicaciones publicadas en el <span class="bm"><img class="bm-ic joh" src="/assets/img/logos/icono-journal-of-hepatology.png" alt="">Journal of Hepatology</span></li></ul>
  <div class="badges"><span class="badge-x"><img class="crest" src="/assets/img/escudos/euskadi-rugby.png" alt="Escudo de Euskadi Rugby">Selección Vasca de Rugby</span><span class="badge-x"><img class="crest" src="/assets/img/escudos/sevilla-fc.png" alt="Escudo del Sevilla FC">Sevilla FC</span><span class="badge-x"><img class="crest" src="/assets/img/escudos/cd-utrera.png" alt="Escudo del CD Utrera">CD Utrera</span><span class="badge-x"><img class="crest" src="/assets/img/escudos/cd-sadus.png" alt="Escudo del CD SADUS">CD SADUS</span><span class="badge-x"><img class="crest joh" src="/assets/img/logos/icono-journal-of-hepatology.png" alt="">Journal of Hepatology</span></div>
  <button class="more-btn" type="button" aria-expanded="false"><span class="lbl">Leer más · trayectoria completa</span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2.4" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
  <div class="ext">

  <div class="more"><section><h4><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l8 3v6c0 5-3.4 9.3-8 11-4.6-1.7-8-6-8-11V5l8-3z" fill="var(--brand)"></path><path d="M12 6l1.5 3 3.3.5-2.4 2.3.6 3.3-3-1.6-3 1.6.6-3.3-2.4-2.3 3.3-.5z" fill="var(--accent)"></path></svg>Deporte de alto nivel</h4><ul><li><img class="crest" src="/assets/img/escudos/euskadi-rugby.png" alt="Escudo de Euskadi Rugby"><b>Selección Vasca de Rugby</b> · fisioterapeuta</li><li><img class="crest" src="/assets/img/escudos/sevilla-fc.png" alt="Escudo del Sevilla FC"><b>Sevilla FC</b> · servicios médicos del fútbol base, del Sevilla Atlético al Cadete División de Honor (2019/20)</li><li><img class="crest" src="/assets/img/escudos/cd-utrera.png" alt="Escudo del CD Utrera"><b>CD Utrera</b> · fisioterapeuta y readaptador de lesiones en 2ª RFEF (2021–2023)</li><li><img class="crest" src="/assets/img/escudos/cd-sadus.png" alt="Escudo del CD SADUS"><b>CD SADUS</b> · fisioterapeuta y preparador físico de rugby y hockey</li></ul></section><section><h4><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="7" width="20" height="13" rx="2" fill="var(--brand)"></rect><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2h-2V5h-4v2z" fill="var(--brand)"></path><rect x="2" y="11" width="20" height="2.4" fill="var(--accent)"></rect></svg>Gestión y dirección</h4><ul><li><b>Director de <span class="bm"><img class="bm-ic" src="/assets/img/logos/icono-osten-recovery.png" alt="">Osten Recovery</span></b></li><li><img class="crest" src="/assets/img/escudos/cd-sadus.png" alt="Escudo del CD SADUS">Coordinador del área de fisioterapia de la Unidad de Medicina del Deporte del SADUS, Universidad de Sevilla (2020–2022)</li></ul></section><section><h4><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 2h6v2h-1v5l5.5 9.5A2 2 0 0 1 17.8 21H6.2a2 2 0 0 1-1.7-2.5L10 9V4H9z" fill="var(--brand)"></path><path d="M7.2 15h9.6l2 3.5a1 1 0 0 1-.9 1.5H6.1a1 1 0 0 1-.9-1.5z" fill="var(--accent)"></path></svg>Investigación y docencia</h4><ul><li>Investigador del <b>estudio multicéntrico EHmet-DIA</b> (H. U. Virgen del Rocío y H. Clínico Universitario de Valladolid) sobre esteatosis hepática metabólica: diseña y supervisa el ejercicio estructurado de cerca de 100 pacientes</li><li>Proyecto de Innovación Docente de la Universidad de Sevilla (2018)</li></ul></section><section><h4><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3L1 9l11 6 9-4.9V17h2V9z" fill="var(--brand)"></path><path d="M5 13v4c0 1.7 3.1 3 7 3s7-1.3 7-3v-4l-7 3.8z" fill="var(--accent)"></path></svg>Formación</h4><ul><li>Grado en Fisioterapia · Universidad de Sevilla</li><li>Grado en CC. de la Actividad Física y del Deporte · Universidad de Sevilla</li><li>Máster en Nutrición Deportiva</li><li>Máster de Profesorado (MAES), Procesos Sanitarios · UNIA</li><li>Inglés B2 (First Certificate) · portugués básico</li></ul></section></div>
  <div class="pubs"><h4><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h7a3 3 0 0 1 3 3v13a2 2 0 0 0-2-2H4z" fill="var(--brand)"></path><path d="M20 4h-5a3 3 0 0 0-3 3v13a2 2 0 0 1 2-2h6z" fill="var(--accent)"></path></svg>Publicaciones científicas</h4><ol><li><span class="j"><img class="joh-b" src="/assets/img/logos/journal-of-hepatology.png" alt="Journal of Hepatology"> · 2025</span><b>Impact of anthropometric and body composition on response to lifestyle intervention in patients living with MASLD</b><span class="n">Comunicación THU-448 · EASL Congress</span></li><li><span class="j"><img class="joh-b" src="/assets/img/logos/journal-of-hepatology.png" alt="Journal of Hepatology"></span><b>Supervised physical activity improves muscle quality and function in MASLD: insights from the EHMet-DIA study</b><span class="n">Comunicación THU-108 · EASL Congress</span></li><li><span class="j">Repositorio UNIA · 2023</span><b><a href="https://dspace.unia.es/handle/10334/9096" target="_blank" rel="noopener">Desarrollo y programación didáctica de la unidad «Análisis de imágenes» →</a></b><span class="n">Trabajo de máster</span></li></ol></div>

  <div class="palm"><h4><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 3h10v6a5 5 0 0 1-10 0z" fill="#C9A227"></path><path d="M7 5H3v2a4 4 0 0 0 4 4M17 5h4v2a4 4 0 0 1-4 4" stroke="#C9A227" stroke-width="1.8" fill="none"></path><path d="M11 14h2v4h3v3H8v-3h3z" fill="var(--brand)"></path></svg>Palmarés con sus equipos</h4><div class="palm-row"><div class="pm"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 3h10v6a5 5 0 0 1-10 0z" fill="#C9A227"></path><path d="M7 5H3v2a4 4 0 0 0 4 4M17 5h4v2a4 4 0 0 1-4 4" stroke="#C9A227" stroke-width="1.8" fill="none"></path><path d="M11 14h2v4h3v3H8v-3h3z" fill="var(--brand)"></path></svg><div><b>Ascenso</b><span>a 2ª RFEF de fútbol con el <img class="crest" src="/assets/img/escudos/cd-utrera.png" alt="Escudo del CD Utrera">CD Utrera</span></div></div><div class="pm"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 3h10v6a5 5 0 0 1-10 0z" fill="#C9A227"></path><path d="M7 5H3v2a4 4 0 0 0 4 4M17 5h4v2a4 4 0 0 1-4 4" stroke="#C9A227" stroke-width="1.8" fill="none"></path><path d="M11 14h2v4h3v3H8v-3h3z" fill="var(--brand)"></path></svg><div><b>1.º y 2.º</b><span>Copas FAR de rugby 2020/21</span></div></div><div class="pm"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 3h10v6a5 5 0 0 1-10 0z" fill="#B0703A"></path><path d="M7 5H3v2a4 4 0 0 0 4 4M17 5h4v2a4 4 0 0 1-4 4" stroke="#B0703A" stroke-width="1.8" fill="none"></path><path d="M11 14h2v4h3v3H8v-3h3z" fill="var(--brand)"></path></svg><div><b>3.º</b><span>Campeonato de España de hockey sala femenino 2021</span></div></div><div class="pm"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 3h10v6a5 5 0 0 1-10 0z" fill="var(--accent)"></path><path d="M7 5H3v2a4 4 0 0 0 4 4M17 5h4v2a4 4 0 0 1-4 4" stroke="var(--accent)" stroke-width="1.8" fill="none"></path><path d="M11 14h2v4h3v3H8v-3h3z" fill="var(--brand)"></path></svg><div><b>6.º</b><span>Copa de la Reina Rugby 7s Iberdrola 2021</span></div></div><div class="pm"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 3h10v6a5 5 0 0 1-10 0z" fill="var(--accent)"></path><path d="M7 5H3v2a4 4 0 0 0 4 4M17 5h4v2a4 4 0 0 1-4 4" stroke="var(--accent)" stroke-width="1.8" fill="none"></path><path d="M11 14h2v4h3v3H8v-3h3z" fill="var(--brand)"></path></svg><div><span>Campeonato de Andalucía de hockey sala femenino 2020</span></div></div></div></div>
  </div>
  <div class="foot-row"><div class="teach">Imparte: <span>Ejercicio terapéutico</span><span>Vendaje</span></div><a class="doc-link rec" href="https://ostenrecovery.es" target="_blank" rel="noopener"><img class="bm-ic" src="/assets/img/logos/icono-osten-recovery.png" alt="">ostenrecovery.es →</a></div></div></article><article id="jesus-jimenez" class="tut"><div class="ph"><div class="ph-in"><img src="/assets/img/tutores/jesus-jimenez.jpg" alt="Jesús Jiménez Méndez" width="600" height="600" loading="lazy" decoding="async"></div></div>
  <div class="bd"><h3>Jesús Jiménez Méndez</h3><div class="role">Fisioterapeuta · Director de Fisioterapia de <span class="bm"><img class="bm-ic" src="/assets/img/logos/icono-osten-recovery.png" alt="">Osten Recovery</span></div>
  <ul class="cv"><li>Graduado en Fisioterapia (Universidad de Sevilla)</li><li>Máster en Atención Temprana (Universidad CEU San Pablo)</li><li>Dirige el área de fisioterapia y readaptación</li><li>Valoración ecográfica musculoesquelética en consulta</li></ul>
  <div class="badges"><span class="badge-x"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3L1 9l11 6 9-4.9V17h2V9z" fill="var(--brand)"></path><path d="M5 13v4c0 1.7 3.1 3 7 3s7-1.3 7-3v-4l-7 3.8z" fill="var(--accent)"></path></svg>Máster CEU San Pablo</span><span class="badge-x"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" fill="var(--brand)"></circle><path d="M2 12h20M12 2c3 3 3 17 0 20M12 2c-3 3-3 17 0 20" stroke="var(--accent)" stroke-width="1.6" fill="none"></path></svg>Ecografía clínica</span></div>


  <div class="foot-row"><div class="teach">Imparte: <span>Ecografía</span><span>Vendaje</span></div><a class="doc-link rec" href="https://ostenrecovery.es" target="_blank" rel="noopener"><img class="bm-ic" src="/assets/img/logos/icono-osten-recovery.png" alt="">ostenrecovery.es →</a></div></div></article><article id="pedro-morales" class="tut can-open"><div class="ph"><div class="ph-in"><img src="/assets/img/tutores/pedro-morales.jpg" alt="Dr. Pedro Morales Sánchez" width="600" height="600" loading="lazy" decoding="async"><span class="ph-more">+ Ver trayectoria</span></div></div>
  <div class="bd"><h3>Dr. Pedro Morales Sánchez</h3><div class="role">Cirujano ortopédico y traumatólogo · Responsable de Traumatología en <span class="bm"><img class="bm-ic" src="/assets/img/logos/icono-clinica-osten.png" alt="">Clínica Osten</span> y Hospital Vithas Sevilla</div>
  <ul class="cv"><li>Especialista en cirugía de cadera, rodilla y medicina deportiva</li><li>Formado en Reino Unido, Francia, EE. UU. y Canadá</li><li>Más de 16 años de experiencia en artroscopia de cadera</li></ul>
  <div class="badges"><span class="badge-x"><img class="crest" src="/assets/img/logos/icono-clinica-osten.png" alt="">Clínica Osten</span><span class="badge-x"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="4" fill="var(--brand)"></rect><path d="M10 7h4v3h3v4h-3v3h-4v-3H7v-4h3z" fill="var(--accent)"></path></svg>Hospital Vithas Sevilla</span><span class="badge-x"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="7" width="16" height="12" rx="3" fill="var(--brand)"></rect><circle cx="9" cy="13" r="1.8" fill="var(--accent)"></circle><circle cx="15" cy="13" r="1.8" fill="var(--accent)"></circle><path d="M11 3h2v4h-2zM2 11h2v4H2zM20 11h2v4h-2z" fill="var(--accent)"></path></svg>Cirugía robótica CORI</span><span class="badge-x"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h7a3 3 0 0 1 3 3v13a2 2 0 0 0-2-2H4z" fill="var(--brand)"></path><path d="M20 4h-5a3 3 0 0 0-3 3v13a2 2 0 0 1 2-2h6z" fill="var(--accent)"></path></svg>Instructor Arthrex</span></div>
  <button class="more-btn" type="button" aria-expanded="false"><span class="lbl">Leer más · trayectoria completa</span><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2.4" fill="none" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
  <div class="ext">
  <p class="intro">Especialista en cirugía de cadera, rodilla y medicina deportiva. Tiene una amplia trayectoria nacional e internacional en cirugía de preservación de cadera y rodilla, artroscopia avanzada y prótesis mínimamente invasiva. Hoy combina la consulta, el quirófano y la dirección clínica.</p>
  <div class="more"><section><h4><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="4" fill="var(--brand)"></rect><path d="M10 7h4v3h3v4h-3v3h-4v-3H7v-4h3z" fill="var(--accent)"></path></svg>Cargos actuales</h4><ul><li><b>Responsable del Departamento de Cirugía Ortopédica y Traumatología</b> · <span class="bm"><img class="bm-ic" src="/assets/img/logos/icono-clinica-osten.png" alt="">Clínica Osten</span> Sevilla</li><li><b>Responsable del Departamento de Cirugía Ortopédica y Traumatología</b> · Hospital Vithas Sevilla</li></ul></section><section><h4><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" fill="var(--brand)"></circle><path d="M2 12h20M12 2c3 3 3 17 0 20M12 2c-3 3-3 17 0 20" stroke="var(--accent)" stroke-width="1.6" fill="none"></path></svg>Trayectoria</h4><ul><li><b>Clinique des Grainetières (Francia)</b> · responsable de la Unidad de Cadera y Rodilla (2016–2019)</li><li><b>Royal Bournemouth Hospital (Reino Unido)</b> · Hip &amp; Knee Fellowship (2014–2016)</li><li><b>Hospital Juan Ramón Jiménez (Huelva)</b> · facultativo especialista en la unidad de cadera y traumatología infantil (2010–2014)</li><li><b>University of Iowa Children's Hospital (EE. UU.) y Hospital for Sick Children (Canadá)</b> · observer-fellowship en ortopedia y traumatología pediátrica (2008)</li></ul></section><section><h4><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l8 3v6c0 5-3.4 9.3-8 11-4.6-1.7-8-6-8-11V5l8-3z" fill="var(--brand)"></path><path d="M12 6l1.5 3 3.3.5-2.4 2.3.6 3.3-3-1.6-3 1.6.6-3.3-2.4-2.3 3.3-.5z" fill="var(--accent)"></path></svg>Áreas de especialización</h4><ul><li>Cirugía de preservación de cadera y rodilla</li><li>Artroscopia de cadera y rodilla</li><li>Choque femoroacetabular</li><li>Reconstrucción del ligamento cruzado anterior (LCA)</li><li>Prótesis total de cadera</li><li>Cirugía mínimamente invasiva (abordaje anterior directo, DSA)</li><li>Cirugía robótica de cadera y rodilla (sistema CORI)</li></ul></section><section><h4><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3L1 9l11 6 9-4.9V17h2V9z" fill="var(--brand)"></path><path d="M5 13v4c0 1.7 3.1 3 7 3s7-1.3 7-3v-4l-7 3.8z" fill="var(--accent)"></path></svg>Formación</h4><ul><li>Licenciado en Medicina · Universidad de Sevilla (2004)</li><li>Especialista en Cirugía Ortopédica y Traumatología · Hospital Juan Ramón Jiménez (Huelva)</li><li>Hip &amp; Knee Fellowship · Royal Bournemouth Hospital (2014–2016)</li><li>Diploma Interuniversitario en Cirugía de Rodilla · Universidad de París (2015–2017)</li><li>Idiomas: español, inglés y francés</li></ul></section><section><h4><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h7a3 3 0 0 1 3 3v13a2 2 0 0 0-2-2H4z" fill="var(--brand)"></path><path d="M20 4h-5a3 3 0 0 0-3 3v13a2 2 0 0 1 2-2h6z" fill="var(--accent)"></path></svg>Actividad docente y científica</h4><ul><li><b>Instructor</b> en cirugía artroscópica de cadera (Arthrex)</li><li><b>Consultor de Stryker</b> en el sistema de doble movilidad para prótesis total de cadera</li><li><b>Ponente</b> en congresos nacionales e internacionales de cirugía de cadera</li><li>Formación en cirugía robótica de cadera y rodilla con el sistema CORI (Smith &amp; Nephew)</li></ul></section></div>

  <div class="palm figs"><h4><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" fill="var(--brand)"></circle><path d="M12 6v6l4 3" stroke="var(--accent)" stroke-width="2.2" fill="none" stroke-linecap="round"></path></svg>Trayectoria en cifras</h4><div class="palm-row"><div class="pm"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" fill="var(--brand)"></circle><path d="M12 6v6l4 3" stroke="var(--accent)" stroke-width="2.2" fill="none" stroke-linecap="round"></path></svg><div><b>+16 años</b><span>de experiencia en artroscopia de cadera</span></div></div><div class="pm"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" fill="var(--brand)"></circle><path d="M2 12h20M12 2c3 3 3 17 0 20M12 2c-3 3-3 17 0 20" stroke="var(--accent)" stroke-width="1.6" fill="none"></path></svg><div><b>5 países</b><span>España, Reino Unido, Francia, EE. UU. y Canadá</span></div></div><div class="pm"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="4" fill="var(--brand)"></rect><path d="M10 7h4v3h3v4h-3v3h-4v-3H7v-4h3z" fill="var(--accent)"></path></svg><div><b>2 servicios</b><span>de traumatología que dirige en Sevilla</span></div></div><div class="pm"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="7" width="16" height="12" rx="3" fill="var(--brand)"></rect><circle cx="9" cy="13" r="1.8" fill="var(--accent)"></circle><circle cx="15" cy="13" r="1.8" fill="var(--accent)"></circle><path d="M11 3h2v4h-2zM2 11h2v4H2zM20 11h2v4h-2z" fill="var(--accent)"></path></svg><div><b>Robótica</b><span>cirugía de cadera y rodilla con sistema CORI</span></div></div></div></div>

  </div>
  <div class="foot-row"><div class="teach">Imparte: <span>Exploración clínica</span></div><a class="doc-link clinic" href="https://osten.es" target="_blank" rel="noopener"><img class="bm-ic" src="/assets/img/logos/icono-clinica-osten.png" alt="">osten.es →</a></div></div></article><article id="boris-garcia" class="tut"><div class="ph"><div class="ph-in"><img src="/assets/img/tutores/boris-garcia.jpg" alt="Dr. Boris García Benítez" width="600" height="600" loading="lazy" decoding="async"></div></div>
  <div class="bd"><h3>Dr. Boris García Benítez</h3><div class="role">Traumatólogo · <span class="bm"><img class="bm-ic" src="/assets/img/logos/icono-clinica-osten.png" alt="">Clínica Osten</span></div>
  <ul class="cv"><li>Más de 10 años dedicado a la cadera y la rodilla</li><li>Prótesis y artroscopia</li><li>Licenciado en Medicina (Universidad de Sevilla)</li><li>Una veintena de publicaciones científicas</li><li>Ponente en el congreso mundial SICOT 2026 de Kioto</li></ul>
  <div class="badges"><span class="badge-x"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" fill="var(--brand)"></circle><path d="M2 12h20M12 2c3 3 3 17 0 20M12 2c-3 3-3 17 0 20" stroke="var(--accent)" stroke-width="1.6" fill="none"></path></svg>SICOT 2026 · Kioto</span><span class="badge-x"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h7a3 3 0 0 1 3 3v13a2 2 0 0 0-2-2H4z" fill="var(--brand)"></path><path d="M20 4h-5a3 3 0 0 0-3 3v13a2 2 0 0 1 2-2h6z" fill="var(--accent)"></path></svg>Publicaciones científicas</span></div>


  <div class="foot-row"><div class="teach">Imparte: <span>Exploración clínica</span><span>Pie de pista</span></div><a class="doc-link clinic" href="https://osten.es" target="_blank" rel="noopener"><img class="bm-ic" src="/assets/img/logos/icono-clinica-osten.png" alt="">osten.es →</a></div></div></article><article id="andrea-antolin" class="tut"><div class="ph"><div class="ph-in"><img src="/assets/img/tutores/andrea-antolin.jpg" alt="Andrea Antolín Montero" width="600" height="600" loading="lazy" decoding="async"></div></div>
  <div class="bd"><h3>Andrea Antolín Montero</h3><div class="role">Podóloga · Coordinadora de la sede de Palmera</div>
  <ul class="cv"><li>Podóloga de <span class="bm"><img class="bm-ic" src="/assets/img/logos/icono-osten-recovery.png" alt="">Osten Recovery</span></li><li>Coordina la sede de Palmera</li><li>Exploración del pie y estudio de la marcha</li></ul>
  <div class="badges"><span class="badge-x"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l8 3v6c0 5-3.4 9.3-8 11-4.6-1.7-8-6-8-11V5l8-3z" fill="var(--brand)"></path><path d="M12 6l1.5 3 3.3.5-2.4 2.3.6 3.3-3-1.6-3 1.6.6-3.3-2.4-2.3 3.3-.5z" fill="var(--accent)"></path></svg>Biomecánica y podología</span></div>


  <div class="foot-row"><div class="teach">Imparte: <span>Biomecánica de la marcha</span></div><a class="doc-link rec" href="https://ostenrecovery.es" target="_blank" rel="noopener"><img class="bm-ic" src="/assets/img/logos/icono-osten-recovery.png" alt="">ostenrecovery.es →</a></div></div></article></div></div></section></div>
</main>
<?php
require "$baseDir/lib/footer.php";
require "$baseDir/lib/foot.php";
?>
