<?php
$baseDir = __DIR__;
$pageTitle = 'Osten Academy · Talleres prácticos de Fisioterapia y Medicina en Sevilla';
$pageDescription = 'Talleres prácticos de sábado para estudiantes de Fisioterapia y Medicina en Sevilla: vendaje, exploración, ecografía y más. Grupos de 16 y 80 % de práctica.';
$pageCanonical = '/';
$pageActive = 'inicio';
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
   "@id": "https://academy.osten.es/#webpage",
   "url": "https://academy.osten.es/",
   "name": "Osten Academy · Talleres prácticos de Fisioterapia y Medicina en Sevilla",
   "description": "Talleres prácticos de sábado para estudiantes de Fisioterapia y Medicina en Sevilla: vendaje, exploración, ecografía y más. Grupos de 16 y 80 % de práctica.",
   "inLanguage": "es-ES",
   "isPartOf": {
    "@id": "https://academy.osten.es/#website"
   },
   "about": {
    "@id": "https://academy.osten.es/#organizacion"
   },
   "primaryImageOfPage": {
    "@id": "https://academy.osten.es/#ogimage"
   }
  }
 ]
}
JSON;
require "$baseDir/lib/head.php";
require "$baseDir/lib/header.php";
?>
<main id="contenido">
<div class="view is-on"><section class="hero" id="hero">
  <div class="wrap">
    <div class="hero-grid">
      <div>
        <p class="eyebrow">Para estudiantes de 3.º y 4.º de Fisioterapia y Medicina</p>
        <h1>Aprende en una <span>clínica real</span>.</h1>
        <p class="lead">Talleres prácticos de sábado en Osten Recovery, en Sevilla. Grupos de 16 alumnos, un 80&nbsp;% de práctica y profesionales que tratan pacientes cada día.</p>
        <div class="actions">
          <a class="btn btn-primary" href="/cursos/">Ver cursos</a>
          <a class="btn btn-ghost" href="/inscripcion/">Reservar plaza</a>
        </div>
      </div>
      <img class="hero-mark" src="/assets/img/logos/academy/isotipo-oscuro.svg" alt="" width="480" height="480">
    </div>
    <div class="stats">
      <div class="stat"><b>16</b><span>alumnos por grupo como máximo</span></div>
      <div class="stat"><b>1:8</b><span>un docente por cada 8 alumnos en práctica</span></div>
      <div class="stat"><b>80&nbsp;%</b><span>del taller es práctica por parejas</span></div>
      <div class="stat"><b>8&nbsp;h</b><span>en un solo sábado, con diploma</span></div>
    </div>
  </div>
</section>
<section id="quienes">
  <div class="wrap">
    <p class="eyebrow">Quiénes somos</p>
    <h2>Nacimos para formar a nuestro propio equipo</h2>
    <div class="qs">
      <div>
        <p class="txt">Osten Academy nace dentro de la clínica. Cada año conocíamos a fisioterapeutas recién graduados con muy buena base teórica, pero con poca práctica en lo que hacemos a diario: explorar a un paciente, razonar ante un caso real o guiar la readaptación tras una cirugía de rodilla.</p>
        <p class="txt">Empezamos a formarlos nosotros, en sesiones internas con nuestros traumatólogos y fisioterapeutas, para que trabajaran como trabajamos en Osten. Así descubrimos que esa formación práctica era justo lo que los estudiantes echaban en falta.</p>
        <p class="txt">Por eso abrimos nuestras puertas: para formar a los profesionales que queremos en nuestro equipo y compartir nuestra forma de trabajar con estudiantes de Fisioterapia y Medicina. Los mejores alumnos pueden acabar trabajando con nosotros.</p>
      </div>
      <div class="qs-cards">
        <aside class="qs-card clinic">
          <img loading="lazy" decoding="async" class="brand-logo" src="/assets/img/logos/clinica-osten.png" alt="Clínica Osten">
          <p class="kicker">Traumatología y medicina deportiva</p>
          <p class="sub">Traumatólogos especialistas en cadera, rodilla, miembro superior, pie y tobillo y columna. Glorieta Plus Ultra, 2 · Sevilla.</p>
          <a class="btn" href="https://osten.es" target="_blank" rel="noopener">Ir a osten.es →</a>
        </aside>
        <aside class="qs-card recovery">
          <img loading="lazy" decoding="async" class="brand-logo" src="/assets/img/logos/osten-recovery.png" alt="Osten Recovery">
          <p class="kicker">Fisioterapia y readaptación</p>
          <p class="sub">Especialistas en fisioterapia avanzada, readaptación física y recuperación tras una cirugía.</p>
          <a class="btn" href="https://ostenrecovery.es" target="_blank" rel="noopener">Ir a ostenrecovery.es →</a>
        </aside>
      </div>
    </div>
    <div class="exp">
      <div><b>Traumatología de referencia</b><span>Cirugía de cadera, rodilla y miembro superior, con ponencias en congresos internacionales como el SICOT 2026 de Kioto.</span></div>
      <div><b>Fisioterapia avanzada</b><span>Readaptación deportiva y postoperatoria con tecnología como GameREADY, theraVac o bomba diamagnética.</span></div>
      <div><b>Tres sedes en Sevilla</b><span>Palmera, Nervión y Dos Hermanas, con traumatología, fisioterapia y podología trabajando en equipo.</span></div>
      <div><b>Formación desde dentro</b><span>Los talleres los da el mismo equipo que trata a los pacientes cada día.</span></div>
    </div>
  </div>
</section>
<section id="por-que">
  <div class="wrap">
    <p class="eyebrow">Por qué Osten Academy</p>
    <h2>Lo que en clase se ve poco, aquí se practica</h2>
    <p class="lead">Practicas sobre tus compañeros y sobre casos clínicos reales, con un docente que te corrige las manos.</p>
    <div class="why-grid">
      <div class="why"><h3>Grupos pequeños</h3><p>Como máximo 16 alumnos y 2 docentes por taller. Todos practican y nadie se queda mirando.</p></div>
      <div class="why"><h3>Profesionales en activo</h3><p>Imparten los traumatólogos de <a class="lk-clinic" href="https://osten.es" target="_blank" rel="noopener">Clínica Osten</a> y los fisioterapeutas y la podóloga de <a class="lk-rec" href="https://ostenrecovery.es" target="_blank" rel="noopener">Osten Recovery</a>, que tratan pacientes cada día.</p></div>
      <div class="why"><h3>Fisioterapia y Medicina juntas</h3><p>Talleres abiertos a los dos grados: diagnóstico y tratamiento en la misma camilla, como en la consulta.</p></div>
    </div>
  </div>
</section>
<section class="next"><div class="wrap"><div><small style="opacity:.8">Próximo taller</small><br><b>Vendaje funcional y neuromuscular · sábado 27 de febrero de 2027</b></div><a class="btn" href="/inscripcion/?taller=vendaje#preinscripcion">Reservar plaza</a></div></section></div>
</main>
<?php
require "$baseDir/lib/footer.php";
require "$baseDir/lib/foot.php";
?>
