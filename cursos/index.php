<?php
$baseDir = dirname(__DIR__);
$pageTitle = 'Talleres para estudiantes de Fisioterapia y Medicina | Osten Academy';
$pageDescription = 'Seis talleres presenciales de sábado en Sevilla: vendaje, exploración clínica, ejercicio terapéutico, marcha, ecografía y pie de pista. Precios, packs y calendario 2027.';
$pageCanonical = '/cursos/';
$pageActive = 'cursos';
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
   "@id": "https://academy.osten.es/cursos/#webpage",
   "url": "https://academy.osten.es/cursos/",
   "name": "Talleres para estudiantes de Fisioterapia y Medicina | Osten Academy",
   "description": "Seis talleres presenciales de sábado en Sevilla: vendaje, exploración clínica, ejercicio terapéutico, marcha, ecografía y pie de pista. Precios, packs y calendario 2027.",
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
    "@id": "https://academy.osten.es/cursos/#breadcrumb"
   },
   "mainEntity": {
    "@type": "ItemList",
    "itemListElement": [
     {
      "@type": "ListItem",
      "position": 1,
      "item": {
       "@id": "https://academy.osten.es/cursos/#taller-vendaje"
      }
     },
     {
      "@type": "ListItem",
      "position": 2,
      "item": {
       "@id": "https://academy.osten.es/cursos/#taller-exploracion"
      }
     },
     {
      "@type": "ListItem",
      "position": 3,
      "item": {
       "@id": "https://academy.osten.es/cursos/#taller-ejercicio"
      }
     },
     {
      "@type": "ListItem",
      "position": 4,
      "item": {
       "@id": "https://academy.osten.es/cursos/#taller-marcha"
      }
     },
     {
      "@type": "ListItem",
      "position": 5,
      "item": {
       "@id": "https://academy.osten.es/cursos/#taller-ecografia"
      }
     },
     {
      "@type": "ListItem",
      "position": 6,
      "item": {
       "@id": "https://academy.osten.es/cursos/#taller-pista"
      }
     }
    ]
   }
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://academy.osten.es/cursos/#breadcrumb",
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
     "name": "Cursos",
     "item": "https://academy.osten.es/cursos/"
    }
   ]
  },
  {
   "@type": "Course",
   "@id": "https://academy.osten.es/cursos/#taller-vendaje",
   "name": "Vendaje funcional y neuromuscular",
   "description": "Vendaje funcional rígido y neuromuscular de tobillo, rodilla, hombro, muñeca y dedos, y cuándo usar cada uno.",
   "url": "https://academy.osten.es/cursos/#taller-vendaje",
   "inLanguage": "es-ES",
   "provider": {
    "@id": "https://academy.osten.es/#organizacion"
   },
   "educationalLevel": "Estudiantes de 3.º y 4.º de Fisioterapia y Medicina",
   "teaches": "Vendaje funcional rígido y neuromuscular de tobillo, rodilla, hombro, muñeca y dedos, y cuándo usar cada uno.",
   "timeRequired": "PT8H",
   "offers": [
    {
     "@type": "Offer",
     "category": "Paid",
     "price": 145,
     "priceCurrency": "EUR",
     "availability": "https://schema.org/InStock",
     "url": "https://academy.osten.es/inscripcion/?taller=vendaje"
    }
   ],
   "hasCourseInstance": [
    {
     "@type": "CourseInstance",
     "courseMode": "Onsite",
     "startDate": "2027-02-27",
     "endDate": "2027-02-27",
     "courseWorkload": "PT8H",
     "instructor": [
      {
       "@id": "https://academy.osten.es/tutores/#ignacio-torrescusa"
      },
      {
       "@id": "https://academy.osten.es/tutores/#jesus-jimenez"
      }
     ],
     "location": {
      "@type": "Place",
      "name": "Aula de Osten Academy",
      "address": {
       "@type": "PostalAddress",
       "addressLocality": "Sevilla",
       "addressCountry": "ES"
      }
     }
    }
   ]
  },
  {
   "@type": "Course",
   "@id": "https://academy.osten.es/cursos/#taller-exploracion",
   "name": "Exploración clínica y test ortopédicos",
   "description": "Anamnesis y palpación, test de hombro, rodilla, tobillo y columna, banderas rojas y cuándo derivar.",
   "url": "https://academy.osten.es/cursos/#taller-exploracion",
   "inLanguage": "es-ES",
   "provider": {
    "@id": "https://academy.osten.es/#organizacion"
   },
   "educationalLevel": "Estudiantes de 3.º y 4.º de Fisioterapia y Medicina",
   "teaches": "Anamnesis y palpación, test de hombro, rodilla, tobillo y columna, banderas rojas y cuándo derivar.",
   "timeRequired": "PT8H",
   "offers": [
    {
     "@type": "Offer",
     "category": "Paid",
     "price": 145,
     "priceCurrency": "EUR",
     "availability": "https://schema.org/InStock",
     "url": "https://academy.osten.es/inscripcion/?taller=exploracion"
    }
   ],
   "hasCourseInstance": [
    {
     "@type": "CourseInstance",
     "courseMode": "Onsite",
     "startDate": "2027-03-13",
     "endDate": "2027-03-13",
     "courseWorkload": "PT8H",
     "instructor": [
      {
       "@id": "https://academy.osten.es/tutores/#pedro-morales"
      },
      {
       "@id": "https://academy.osten.es/tutores/#boris-garcia"
      }
     ],
     "location": {
      "@type": "Place",
      "name": "Aula de Osten Academy",
      "address": {
       "@type": "PostalAddress",
       "addressLocality": "Sevilla",
       "addressCountry": "ES"
      }
     }
    }
   ]
  },
  {
   "@type": "Course",
   "@id": "https://academy.osten.es/cursos/#taller-ejercicio",
   "name": "Ejercicio terapéutico y readaptación",
   "description": "Prescripción del ejercicio por fases, progresiones y control de carga (EVA, RPE) y criterios de vuelta al deporte.",
   "url": "https://academy.osten.es/cursos/#taller-ejercicio",
   "inLanguage": "es-ES",
   "provider": {
    "@id": "https://academy.osten.es/#organizacion"
   },
   "educationalLevel": "Estudiantes de 3.º y 4.º de Fisioterapia y Medicina",
   "teaches": "Prescripción del ejercicio por fases, progresiones y control de carga (EVA, RPE) y criterios de vuelta al deporte.",
   "timeRequired": "PT8H",
   "offers": [
    {
     "@type": "Offer",
     "category": "Paid",
     "price": 145,
     "priceCurrency": "EUR",
     "availability": "https://schema.org/InStock",
     "url": "https://academy.osten.es/inscripcion/?taller=ejercicio"
    }
   ],
   "hasCourseInstance": [
    {
     "@type": "CourseInstance",
     "courseMode": "Onsite",
     "startDate": "2027-04-03",
     "endDate": "2027-04-03",
     "courseWorkload": "PT8H",
     "instructor": [
      {
       "@id": "https://academy.osten.es/tutores/#ignacio-torrescusa"
      }
     ],
     "location": {
      "@type": "Place",
      "name": "Aula de Osten Academy",
      "address": {
       "@type": "PostalAddress",
       "addressLocality": "Sevilla",
       "addressCountry": "ES"
      }
     }
    }
   ]
  },
  {
   "@type": "Course",
   "@id": "https://academy.osten.es/cursos/#taller-marcha",
   "name": "Biomecánica de la marcha y el pie",
   "description": "Análisis de la marcha, exploración podológica, fascitis plantar y esguince de tobillo.",
   "url": "https://academy.osten.es/cursos/#taller-marcha",
   "inLanguage": "es-ES",
   "provider": {
    "@id": "https://academy.osten.es/#organizacion"
   },
   "educationalLevel": "Estudiantes de 3.º y 4.º de Fisioterapia y Medicina",
   "teaches": "Análisis de la marcha, exploración podológica, fascitis plantar y esguince de tobillo.",
   "timeRequired": "PT6H",
   "offers": [
    {
     "@type": "Offer",
     "category": "Paid",
     "price": 110,
     "priceCurrency": "EUR",
     "availability": "https://schema.org/InStock",
     "url": "https://academy.osten.es/inscripcion/?taller=marcha"
    }
   ],
   "hasCourseInstance": [
    {
     "@type": "CourseInstance",
     "courseMode": "Onsite",
     "startDate": "2027-04-24",
     "endDate": "2027-04-24",
     "courseWorkload": "PT6H",
     "instructor": [
      {
       "@id": "https://academy.osten.es/tutores/#andrea-antolin"
      }
     ],
     "location": {
      "@type": "Place",
      "name": "Aula de Osten Academy",
      "address": {
       "@type": "PostalAddress",
       "addressLocality": "Sevilla",
       "addressCountry": "ES"
      }
     }
    }
   ]
  },
  {
   "@type": "Course",
   "@id": "https://academy.osten.es/cursos/#taller-ecografia",
   "name": "Ecografía musculoesquelética básica",
   "description": "Manejo del ecógrafo y sonoanatomía de hombro, rodilla y tobillo, con un ecógrafo por cada 4 alumnos.",
   "url": "https://academy.osten.es/cursos/#taller-ecografia",
   "inLanguage": "es-ES",
   "provider": {
    "@id": "https://academy.osten.es/#organizacion"
   },
   "educationalLevel": "Estudiantes de 3.º y 4.º de Fisioterapia y Medicina",
   "teaches": "Manejo del ecógrafo y sonoanatomía de hombro, rodilla y tobillo, con un ecógrafo por cada 4 alumnos.",
   "timeRequired": "PT12H",
   "offers": [
    {
     "@type": "Offer",
     "category": "Paid",
     "price": 255,
     "priceCurrency": "EUR",
     "availability": "https://schema.org/InStock",
     "url": "https://academy.osten.es/inscripcion/?taller=ecografia"
    }
   ],
   "hasCourseInstance": [
    {
     "@type": "CourseInstance",
     "courseMode": "Onsite",
     "startDate": "2027-05-07",
     "endDate": "2027-05-08",
     "courseWorkload": "PT12H",
     "instructor": [
      {
       "@id": "https://academy.osten.es/tutores/#jesus-jimenez"
      }
     ],
     "location": {
      "@type": "Place",
      "name": "Aula de Osten Academy",
      "address": {
       "@type": "PostalAddress",
       "addressLocality": "Sevilla",
       "addressCountry": "ES"
      }
     }
    }
   ]
  },
  {
   "@type": "Course",
   "@id": "https://academy.osten.es/cursos/#taller-pista",
   "name": "Atención a pie de pista",
   "description": "Valoración inicial de la lesión deportiva, vendaje urgente e inmovilización, y soporte vital básico: RCP y DEA.",
   "url": "https://academy.osten.es/cursos/#taller-pista",
   "inLanguage": "es-ES",
   "provider": {
    "@id": "https://academy.osten.es/#organizacion"
   },
   "educationalLevel": "Estudiantes de 3.º y 4.º de Fisioterapia y Medicina",
   "teaches": "Valoración inicial de la lesión deportiva, vendaje urgente e inmovilización, y soporte vital básico: RCP y DEA.",
   "timeRequired": "PT8H",
   "offers": [
    {
     "@type": "Offer",
     "category": "Paid",
     "price": 145,
     "priceCurrency": "EUR",
     "availability": "https://schema.org/InStock",
     "url": "https://academy.osten.es/inscripcion/?taller=pista"
    }
   ],
   "hasCourseInstance": [
    {
     "@type": "CourseInstance",
     "courseMode": "Onsite",
     "startDate": "2027-05-22",
     "endDate": "2027-05-22",
     "courseWorkload": "PT8H",
     "instructor": [
      {
       "@id": "https://academy.osten.es/tutores/#boris-garcia"
      }
     ],
     "location": {
      "@type": "Place",
      "name": "Aula de Osten Academy",
      "address": {
       "@type": "PostalAddress",
       "addressLocality": "Sevilla",
       "addressCountry": "ES"
      }
     }
    }
   ]
  },
  {
   "@type": "Person",
   "@id": "https://academy.osten.es/tutores/#ignacio-torrescusa",
   "name": "Ignacio Torrescusa Buzo",
   "url": "https://academy.osten.es/tutores/#ignacio-torrescusa"
  },
  {
   "@type": "Person",
   "@id": "https://academy.osten.es/tutores/#jesus-jimenez",
   "name": "Jesús Jiménez Méndez",
   "url": "https://academy.osten.es/tutores/#jesus-jimenez"
  },
  {
   "@type": "Person",
   "@id": "https://academy.osten.es/tutores/#pedro-morales",
   "name": "Dr. Pedro Morales Sánchez",
   "url": "https://academy.osten.es/tutores/#pedro-morales"
  },
  {
   "@type": "Person",
   "@id": "https://academy.osten.es/tutores/#boris-garcia",
   "name": "Dr. Boris García Benítez",
   "url": "https://academy.osten.es/tutores/#boris-garcia"
  },
  {
   "@type": "Person",
   "@id": "https://academy.osten.es/tutores/#andrea-antolin",
   "name": "Andrea Antolín Montero",
   "url": "https://academy.osten.es/tutores/#andrea-antolin"
  }
 ]
}
JSON;
require "$baseDir/lib/head.php";
require "$baseDir/lib/header.php";
?>
<main id="contenido">
<div class="view is-on"><section class="page-head"><div class="wrap"><p class="eyebrow">Cursos</p><h1>Presenciales y online</h1><p class="lead">Talleres prácticos de sábado en grupos de 16. Muy pronto, también cursos en vídeo.</p><div class="subnav"><a href="#cursos">Presenciales</a><a href="#dia">Ejemplo: taller de vendaje</a><a href="#precios">Precios y packs</a><a href="#calendario">Calendario</a><a href="#online">Online · próximamente</a></div></div></section>
<section id="cursos">
  <div class="wrap">
    <p class="eyebrow">Modalidad presencial · 2027</p>
    <h2>Seis talleres para empezar</h2>
    <p class="lead">Cada taller se hace por separado. Incluye material, dossier en PDF, café y diploma de asistencia.</p>
    <div class="course-grid" id="courseGrid"><article class="course" id="taller-vendaje"><div class="tags"><span class="tag">Fisio y Medicina</span><span class="tag dark">8 h</span></div>
  <h3>Vendaje funcional y neuromuscular</h3><ul><li>Tobillo, rodilla, hombro, muñeca y dedos</li><li>Vendaje funcional rígido frente a neuromuscular</li><li>Cuándo usar cada uno</li></ul>
  <div class="meta"><div><small>Fecha</small><strong>Sáb 27 feb</strong></div><div class="price">145&nbsp;€</div></div>
  <a class="btn btn-line" href="/inscripcion/?taller=vendaje#preinscripcion">Reservar plaza</a></article><article class="course" id="taller-exploracion"><div class="tags"><span class="tag">Fisio y Medicina</span><span class="tag dark">8 h</span></div>
  <h3>Exploración clínica y test ortopédicos</h3><ul><li>Anamnesis y palpación</li><li>Test de hombro, rodilla, tobillo y columna</li><li>Banderas rojas y cuándo derivar</li></ul>
  <div class="meta"><div><small>Fecha</small><strong>Sáb 13 mar</strong></div><div class="price">145&nbsp;€</div></div>
  <a class="btn btn-line" href="/inscripcion/?taller=exploracion#preinscripcion">Reservar plaza</a></article><article class="course" id="taller-ejercicio"><div class="tags"><span class="tag">Fisioterapia</span><span class="tag dark">8 h</span></div>
  <h3>Ejercicio terapéutico y readaptación</h3><ul><li>Prescripción del ejercicio por fases</li><li>Progresiones y control de carga (EVA, RPE)</li><li>Criterios de vuelta al deporte</li></ul>
  <div class="meta"><div><small>Fecha</small><strong>Sáb 3 abr</strong></div><div class="price">145&nbsp;€</div></div>
  <a class="btn btn-line" href="/inscripcion/?taller=ejercicio#preinscripcion">Reservar plaza</a></article><article class="course" id="taller-marcha"><div class="tags"><span class="tag">Fisio y Medicina</span><span class="tag dark">6 h</span></div>
  <h3>Biomecánica de la marcha y el pie</h3><ul><li>Análisis de la marcha</li><li>Exploración podológica</li><li>Fascitis plantar y esguince de tobillo</li></ul>
  <div class="meta"><div><small>Fecha</small><strong>Sáb 24 abr</strong></div><div class="price">110&nbsp;€</div></div>
  <a class="btn btn-line" href="/inscripcion/?taller=marcha#preinscripcion">Reservar plaza</a></article><article class="course" id="taller-ecografia"><div class="tags"><span class="tag">Fisio y Medicina</span><span class="tag dark">12 h</span></div>
  <h3>Ecografía musculoesquelética básica</h3><ul><li>Manejo del ecógrafo</li><li>Sonoanatomía de hombro, rodilla y tobillo</li><li>1 ecógrafo por cada 4 alumnos</li></ul>
  <div class="meta"><div><small>Fecha</small><strong>Vie 7 y sáb 8 may</strong></div><div class="price">255&nbsp;€</div></div>
  <a class="btn btn-line" href="/inscripcion/?taller=ecografia#preinscripcion">Reservar plaza</a></article><article class="course" id="taller-pista"><div class="tags"><span class="tag">Fisio y Medicina</span><span class="tag dark">8 h</span></div>
  <h3>Atención a pie de pista</h3><ul><li>Valoración inicial de la lesión deportiva</li><li>Vendaje urgente e inmovilización</li><li>Soporte vital básico: RCP y DEA</li></ul>
  <div class="meta"><div><small>Fecha</small><strong>Sáb 22 may</strong></div><div class="price">145&nbsp;€</div></div>
  <a class="btn btn-line" href="/inscripcion/?taller=pista#preinscripcion">Reservar plaza</a></article></div>
  </div>
</section>
<section id="dia">
  <div class="wrap">
    <p class="eyebrow">Un sábado tipo</p>
    <h2>Así es el taller de vendaje</h2>
    <div class="day">
      <ol class="agenda">
        <li><time>9:00</time><span>Bienvenida y bases: vendaje funcional frente a neuromuscular</span></li>
        <li><time>9:45</time><span>Tobillo: esguince lateral y vendaje funcional</span></li>
        <li><time>11:30</time><span class="pause">Café</span></li>
        <li><time>12:00</time><span>Rodilla, hombro, muñeca y dedos</span></li>
        <li><time>14:00</time><span class="pause">Comida</span></li>
        <li><time>15:30</time><span>Vendaje neuromuscular: principios y aplicaciones</span></li>
        <li><time>17:30</time><span>Casos clínicos por parejas y corrección</span></li>
        <li><time>18:30</time><span>Entrega de diplomas</span></li>
      </ol>
      <div class="box">
        <h3>Qué traer</h3>
        <ul>
          <li>Ropa cómoda que deje libres rodilla, tobillo y hombro</li>
          <li>Ganas de practicar y de ser paciente de tu compañero</li>
        </ul>
        <h3 style="margin-top:20px">Qué te llevas</h3>
        <ul>
          <li>Más de 20 vendajes practicados</li>
          <li>Dossier en PDF con cada técnica</li>
          <li>Diploma de 8 horas de Osten Academy</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="precios">
  <div class="wrap">
    <p class="eyebrow">Precios de estudiante</p>
    <h2>Unos 18&nbsp;€ por hora de taller</h2>
    <p class="lead">Precios finales para estudiantes. Los descuentos no son acumulables.</p>
    <div class="price-grid">
      <div class="pcard">
        <h3>Talleres sueltos</h3>
        <div class="prow"><span>Taller de 6 h</span><b>110&nbsp;€</b></div>
        <div class="prow"><span>Taller de 8 h</span><b>145&nbsp;€</b></div>
        <div class="prow"><span>Ecografía, 12 h</span><b>255&nbsp;€</b></div>
        <p>Material, dossier, café y diploma incluidos.</p>
      </div>
      <div class="pcard featured">
        <span class="badge">El más elegido</span>
        <h3>Packs</h3>
        <div class="prow"><span>3 talleres de 8 h</span><b>390&nbsp;€</b></div>
        <div class="prow"><span>Los 6 talleres</span><b>795&nbsp;€</b></div>
        <p>Ahorras 45&nbsp;€ con el pack de 3 y 150&nbsp;€ con el completo.</p>
      </div>
      <div class="pcard">
        <h3>Ven con tu clase</h3>
        <div class="prow"><span>4 o más de la misma clase</span><b>−10&nbsp;%</b></div>
        <p>Y si eres delegado o delegada y traes un grupo, tu plaza es gratis.</p>
      </div>
    </div>
  </div>
</section>
<section id="calendario">
  <div class="wrap">
    <p class="eyebrow">Calendario 2027</p>
    <h2>Primera ronda: de febrero a mayo</h2>
    <p class="lead">Fechas pensadas para no coincidir con los exámenes de enero ni con los de junio.</p>
    <div class="timeline" id="timeline"><div class="tl"><small>Sáb</small><b>27 feb</b><span>Vendaje funcional y neuromuscular</span></div><div class="tl"><small>Sáb</small><b>13 mar</b><span>Exploración clínica y test ortopédicos</span></div><div class="tl"><small>Sáb</small><b>3 abr</b><span>Ejercicio terapéutico y readaptación</span></div><div class="tl"><small>Sáb</small><b>24 abr</b><span>Biomecánica de la marcha y el pie</span></div><div class="tl"><small>Vie</small><b>7 y sáb 8 may</b><span>Ecografía musculoesquelética básica</span></div><div class="tl"><small>Sáb</small><b>22 may</b><span>Atención a pie de pista</span></div></div>
    <p class="note">Fechas provisionales. La segunda ronda será en octubre y noviembre de 2027.</p>
  </div>
</section>
<section id="online">
  <div class="wrap">
    <p class="eyebrow">Osten Academy Online · Próximamente</p>
    <h2>Cursos online: muy pronto</h2>
    <p class="lead">Estamos preparando el temario de nuestros cursos en vídeo, grabados en la clínica con el mismo equipo docente de los talleres. Si quieres ser de los primeros en saberlo, déjanos tus datos y te avisamos en cuanto estén listos.</p>
    <div class="on-grid" id="onGrid"><article class="on"><div class="tags"><span class="tag">Fisio y Medicina</span><span class="tag">6 h · vídeo</span></div><h3>Interpretación de pruebas de imagen</h3><p>Radiografía, resonancia y ecografía del aparato locomotor explicadas con casos de la clínica.</p>
  <div class="meta"><div><small>Imparte</small><strong>Traumatología</strong></div><b class="soon-tag">Próximamente</b></div>
  <a class="btn" href="/inscripcion/?aviso=Avisadme%20cuando%20salga%20el%20curso%20online%20%C2%ABInterpretaci%C3%B3n%20de%20pruebas%20de%20imagen%C2%BB.#preinscripcion">Avisadme</a></article><article class="on"><div class="tags"><span class="tag">Fisio y Medicina</span><span class="tag">4 h · vídeo</span></div><h3>Exploración de rodilla y cadera</h3><p>Los test que más se usan en consulta, en vídeo y paso a paso, con los traumatólogos de Osten.</p>
  <div class="meta"><div><small>Imparte</small><strong>Traumatología</strong></div><b class="soon-tag">Próximamente</b></div>
  <a class="btn" href="/inscripcion/?aviso=Avisadme%20cuando%20salga%20el%20curso%20online%20%C2%ABExploraci%C3%B3n%20de%20rodilla%20y%20cadera%C2%BB.#preinscripcion">Avisadme</a></article><article class="on"><div class="tags"><span class="tag">Fisio y Medicina</span><span class="tag">6 h · vídeo</span></div><h3>Razonamiento clínico en lesiones deportivas</h3><p>Del dolor al diagnóstico y al plan de tratamiento: 10 casos reales resueltos.</p>
  <div class="meta"><div><small>Imparte</small><strong>Fisioterapia</strong></div><b class="soon-tag">Próximamente</b></div>
  <a class="btn" href="/inscripcion/?aviso=Avisadme%20cuando%20salga%20el%20curso%20online%20%C2%ABRazonamiento%20cl%C3%ADnico%20en%20lesiones%20deportivas%C2%BB.#preinscripcion">Avisadme</a></article><article class="on"><div class="tags"><span class="tag">Fisioterapia</span><span class="tag">5 h · vídeo</span></div><h3>Ejercicio terapéutico: plantillas y progresiones</h3><p>Programas por fases listos para adaptar, control de carga y criterios de alta.</p>
  <div class="meta"><div><small>Imparte</small><strong>Fisioterapia</strong></div><b class="soon-tag">Próximamente</b></div>
  <a class="btn" href="/inscripcion/?aviso=Avisadme%20cuando%20salga%20el%20curso%20online%20%C2%ABEjercicio%20terap%C3%A9utico%3A%20plantillas%20y%20progresiones%C2%BB.#preinscripcion">Avisadme</a></article><article class="on"><div class="tags"><span class="tag">Fisio y Medicina</span><span class="tag">3 h · vídeo</span></div><h3>Vendaje en vídeo</h3><p>Las técnicas del taller para repasar en casa, articulación por articulación.</p>
  <div class="meta"><div><small>Imparte</small><strong>Fisioterapia</strong></div><b class="soon-tag">Próximamente</b></div>
  <a class="btn" href="/inscripcion/?aviso=Avisadme%20cuando%20salga%20el%20curso%20online%20%C2%ABVendaje%20en%20v%C3%ADdeo%C2%BB.#preinscripcion">Avisadme</a></article><article class="on"><div class="tags"><span class="tag">Fisio y Medicina</span><span class="tag">3 h · vídeo</span></div><h3>El pie en la consulta</h3><p>Exploración podológica básica, plantillas y cuándo derivar al podólogo.</p>
  <div class="meta"><div><small>Imparte</small><strong>Podología</strong></div><b class="soon-tag">Próximamente</b></div>
  <a class="btn" href="/inscripcion/?aviso=Avisadme%20cuando%20salga%20el%20curso%20online%20%C2%ABEl%20pie%20en%20la%20consulta%C2%BB.#preinscripcion">Avisadme</a></article></div>
    <div class="soon">
      <div class="soon-badge">Cómo serán</div>
      <ul class="soon-list">
        <li><b>Vídeos cortos</b><span>grabados en Osten con casos reales</span></li>
        <li><b>A tu ritmo</b><span>para repasar antes de un taller o si no puedes venir a Sevilla</span></li>
        <li><b>Docentes de Osten</b><span>fisioterapia, traumatología y podología</span></li>
        <li><b>Certificado</b><span>al completar cada curso</span></li>
      </ul>
      <a class="btn btn-primary" href="/inscripcion/?aviso=Avisadme%20cuando%20salgan%20los%20cursos%20online.#preinscripcion">Avisadme cuando estén</a>
    </div>
    <p class="combo">El temario, las fechas y los precios se anunciarán aquí.</p>
  </div>
</section></div>
</main>
<?php
require "$baseDir/lib/footer.php";
require "$baseDir/lib/foot.php";
?>
