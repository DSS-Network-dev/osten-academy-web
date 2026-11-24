<?php
$baseDir = dirname(__DIR__);
$pageTitle = 'Inscripción y pago | Osten Academy';
$pageDescription = 'Reserva tu plaza en los talleres de Osten Academy en tres pasos: elige talleres, envía tus datos y paga con tarjeta. El precio se ajusta solo al pack más barato.';
$pageCanonical = '/inscripcion/';
$pageActive = 'inscripcion';
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
   "@id": "https://academy.osten.es/inscripcion/#webpage",
   "url": "https://academy.osten.es/inscripcion/",
   "name": "Inscripción y pago | Osten Academy",
   "description": "Reserva tu plaza en los talleres de Osten Academy en tres pasos: elige talleres, envía tus datos y paga con tarjeta. El precio se ajusta solo al pack más barato.",
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
    "@id": "https://academy.osten.es/inscripcion/#breadcrumb"
   }
  },
  {
   "@type": "BreadcrumbList",
   "@id": "https://academy.osten.es/inscripcion/#breadcrumb",
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
     "name": "Inscripción y pago",
     "item": "https://academy.osten.es/inscripcion/"
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
<div class="view is-on"><section class="page-head"><div class="wrap"><p class="eyebrow">Inscripción y pago</p><h1>Reserva tu plaza en tres pasos</h1><p class="lead">Elige tus talleres, déjanos tus datos y paga de forma segura.</p><div class="steps"><div><span>1</span>Elige talleres</div><div><span>2</span>Tus datos</div><div><span>3</span>Pago con BBVA</div></div></div></section>
<section id="preinscripcion">
  <div class="wrap">
    <p class="eyebrow">Paso 1 y 2</p>
    <h2>Elige tus talleres y déjanos tus datos</h2>
    <p class="lead">El total se calcula solo y aplica el pack más barato.</p>
    <div class="form-grid">
      <form id="form" name="preinscripcion" method="POST" action="/api/preinscripcion.php" novalidate>
        <input type="hidden" name="form-name" value="preinscripcion">
        <p hidden><label>No rellenar <input name="bot-field"></label></p>
        <div class="field"><label for="nombre">Nombre y apellidos</label><input id="nombre" name="nombre" autocomplete="name" required></div>
        <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" autocomplete="email" required></div>
        <div class="field"><label for="tel">Teléfono</label><input id="tel" name="telefono" type="tel" autocomplete="tel" required></div>
        <div class="field"><label for="uni">Universidad</label><input id="uni" name="universidad" placeholder="Ej.: Universidad de Sevilla" required></div>
        <div class="field"><label for="grado">Grado</label>
          <select id="grado" name="grado" required><option value="">Elige</option><option>Fisioterapia</option><option>Medicina</option></select></div>
        <div class="field"><label for="curso">Curso</label>
          <select id="curso" name="curso" required><option value="">Elige</option><option>3.º</option><option>4.º</option><option>Graduado/a</option></select></div>
        <div class="field full"><span class="legend">Talleres presenciales que te interesan</span><div class="checks" id="checks"><label class="check"><input type="checkbox" name="talleres" value="Vendaje funcional y neuromuscular" data-id="vendaje" data-price="145" data-h="8"><span>Vendaje funcional y neuromuscular<br><small>Sáb 27 feb · 8 h · 145&nbsp;€</small></span></label><label class="check"><input type="checkbox" name="talleres" value="Exploración clínica y test ortopédicos" data-id="exploracion" data-price="145" data-h="8"><span>Exploración clínica y test ortopédicos<br><small>Sáb 13 mar · 8 h · 145&nbsp;€</small></span></label><label class="check"><input type="checkbox" name="talleres" value="Ejercicio terapéutico y readaptación" data-id="ejercicio" data-price="145" data-h="8"><span>Ejercicio terapéutico y readaptación<br><small>Sáb 3 abr · 8 h · 145&nbsp;€</small></span></label><label class="check"><input type="checkbox" name="talleres" value="Biomecánica de la marcha y el pie" data-id="marcha" data-price="110" data-h="6"><span>Biomecánica de la marcha y el pie<br><small>Sáb 24 abr · 6 h · 110&nbsp;€</small></span></label><label class="check"><input type="checkbox" name="talleres" value="Ecografía musculoesquelética básica" data-id="ecografia" data-price="255" data-h="12"><span>Ecografía musculoesquelética básica<br><small>Vie 7 y sáb 8 may · 12 h · 255&nbsp;€</small></span></label><label class="check"><input type="checkbox" name="talleres" value="Atención a pie de pista" data-id="pista" data-price="145" data-h="8"><span>Atención a pie de pista<br><small>Sáb 22 may · 8 h · 145&nbsp;€</small></span></label></div></div>
        <div class="field full"><label for="grupo">¿Vienes con compañeros de clase? (opcional)</label><input id="grupo" name="grupo" placeholder="Nombres o número de compañeros"></div>
        <div class="field full"><label for="msg">Comentarios (opcional)</label><textarea id="msg" name="comentarios" rows="3"></textarea></div>
        <label class="legal"><input type="checkbox" name="privacidad" required> <span>He leído la <a href="/privacidad/" target="_blank">política de privacidad</a> y acepto que se traten mis datos para gestionar esta preinscripción.</span></label>
        <p class="infobasica"><b>Responsable:</b> Fisiosten Recovery SL. <b>Finalidad:</b> gestionar tu preinscripción y contactarte sobre los talleres. <b>Legitimación:</b> tu consentimiento. <b>Destinatarios:</b> no se ceden datos a terceros salvo obligación legal. <b>Derechos:</b> acceso, rectificación, supresión y otros, escribiendo a <a href="mailto:academy@osten.es">academy@osten.es</a>. Más información en la <a href="/privacidad/" target="_blank">política de privacidad</a>.</p>
        <div class="msg" id="formMsg" role="status" aria-live="polite"></div>
        <div class="field full"><button class="btn btn-primary" type="submit">Enviar preinscripción</button></div>
      </form>
      <aside class="summary" aria-live="polite">
        <h3>Tu selección</h3>
        <ul id="sumList"><li><span>Elige uno o varios talleres</span></li></ul>
        <div class="total"><span>Total estimado</span><b id="sumTotal">0&nbsp;€</b></div>
        <div class="saving" id="sumSaving"></div>
        <p class="small">Aplicamos el pack más barato automáticamente. El descuento de grupo se calcula al confirmar.</p>
        <div class="paybox" id="paybox">
          <div class="top"><h3>Paso 3 · Pago seguro</h3><span class="soon">BBVA · Próximamente</span></div>
          <p>Pagarás con tarjeta a través de la pasarela segura de BBVA. La estamos activando y estará lista en unos días.</p>
          <button class="btn" type="button" disabled>Pagar con tarjeta</button>
          <div class="lock"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="11" width="16" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg>Mientras tanto, envía tu preinscripción y te confirmamos plaza y pago.</div>
        </div>
      </aside>
    </div>
  </div>
</section></div>
</main>
<?php
require "$baseDir/lib/footer.php";
require "$baseDir/lib/foot.php";
?>
