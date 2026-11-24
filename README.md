# Osten Academy — academy.osten.es

Web estática (HTML + CSS + JS, sin build) con un endpoint PHP para el formulario de preinscripción. Se sube tal cual a la raíz del subdominio **academy.osten.es** en Plesk (Apache + PHP 8). Todas las rutas son absolutas desde la raíz (`/assets/...`), así que tiene que ir en la raíz del subdominio, no en una subcarpeta.

## URLs

| URL | Contenido |
|---|---|
| `/` | Inicio: presentación, quiénes somos, por qué Osten Academy |
| `/tutores/` | Fichas de los 5 tutores (cada una con ancla: `/tutores/#pedro-morales`) |
| `/cursos/` | Talleres presenciales (`#taller-vendaje`…), ejemplo de un sábado, precios y packs, calendario, cursos online |
| `/instalaciones/` | Aula, clínicas y futuro centro |
| `/inscripcion/` | Formulario de preinscripción y resumen de precio |
| `/dudas/` | Preguntas frecuentes y contacto |
| `/aviso-legal/`, `/privacidad/`, `/cookies/` | Textos legales (noindex) |
| `/404.html` | Página de error (noindex) |

Los botones «Reservar plaza» llevan a `/inscripcion/?taller=<id>` y dejan marcado ese taller; los «Avisadme» de cursos online llevan a `/inscripcion/?aviso=<texto>` y lo añaden a comentarios. Los enlaces antiguos de la versión de una sola página (`/#cursos`, `/#pago`…) redirigen a la URL nueva.

## Estructura

```
index.html, tutores/, cursos/, instalaciones/, inscripcion/, dudas/   Una carpeta con index.html por página
404.html, favicon.svg/.png, apple-touch-icon.png, robots.txt, sitemap.xml, .htaccess
assets/css/styles.css      Estilos + Figtree autoalojada
assets/js/main.js          Solo interacción: desplegar tutores, precio/packs, preselección y envío del formulario
assets/fonts/              Figtree woff2 (latin + latin-ext, 400–800)
assets/img/                logos/, escudos/, tutores/, instalaciones/, og/ (imagen para compartir 1200×630)
api/preinscripcion.php     Recibe el formulario y lo manda por email
api/config.php             Destinatario y remitente (bloqueado desde la web)
```

Todo el contenido (tutores, talleres, calendario, cursos online) está escrito en el HTML; el JavaScript ya no genera contenido, para que lo lean todos los buscadores y rastreadores.

## Marca

- Colores de la marca Osten Academy en `:root` de `styles.css`: azul petróleo `#003B4D` (fondos oscuros, botones, texto de marca) y beige `#D0D09F` (acentos sobre oscuro). Sobre fondo claro el beige solo se usa decorativo, no para texto.
- Logos en `assets/img/logos/academy/`: horizontal para fondo claro (cabecera) y oscuro, sello beige (pie) y blanco, isotipos y `osten-academy-logo.png` (logo del schema). La cabecera y el sello del pie van como SVG en línea en el HTML.
- **Tipografía de los logos**: los SVG originales usan textos en Gilroy SemiBold sin convertir a trazados. En la web se ven con Figtree como sustituta; cuando lleguen las versiones con el texto trazado, hay que reemplazar el SVG de la cabecera y del pie en cada página y volver a exportar `osten-academy-logo.png`, `favicon.png`, `apple-touch-icon.png` y la imagen `og/`.

## SEO

- Cada página tiene su `title`, `meta description`, `canonical`, Open Graph (`og:url`, `og:image`) y un único H1.
- Datos estructurados JSON-LD en cada página, conectados por `@id`:
  - Todas: `WebSite`, `EducationalOrganization` (Osten Academy) con `parentOrganization` → `MedicalClinic` (Clínica Osten) y `MedicalBusiness` (Osten Recovery), `WebPage` y `BreadcrumbList` (salvo inicio).
  - `/cursos/`: un `Course` por taller con `CourseInstance` (presencial, fechas, horas, instructores) y `Offer` (precio en EUR, enlace a inscripción).
  - `/tutores/`: un `Person` por tutor con cargo, foto y centro.
  - `/dudas/`: `FAQPage` con las preguntas y respuestas.
- `sitemap.xml` con las 6 URLs y referencia en `robots.txt`.

**Al cambiar fechas, precios o tutores** hay que tocar el HTML de la página y también su JSON-LD (`<script type="application/ld+json">` en el `<head>`). El cálculo de packs lee precio y horas de los `data-price` / `data-h` de los checkboxes de `/inscripcion/`; los importes de los packs (390 € y 795 €) están en `best()` de `main.js`.

## Despliegue en Plesk

1. Crear el subdominio `academy.osten.es` y emitir el SSL (Let's Encrypt).
2. Subir el contenido de esta carpeta al document root del subdominio.
3. `api/config.php` ya apunta a academy@osten.es como destinatario y remitente: crear ese buzón y comprobar que el dominio tiene SPF/DKIM para el servidor que envía.
4. Probar un envío real desde `/inscripcion/`.
5. Dar de alta `https://academy.osten.es/` en Search Console, enviar el `sitemap.xml` y revisar los datos estructurados con la Prueba de resultados enriquecidos.
6. Opcional: enlazar a `https://academy.osten.es/` desde osten.es y ostenrecovery.es.

En local: `php -S localhost:8000` en la raíz. En `localhost` el formulario muestra el aviso de vista previa y no envía nada.

## Pendiente antes de publicar

- **Textos legales**: hechos en `/aviso-legal/`, `/privacidad/` y `/cookies/` (noindex, fuera del sitemap), enlazados desde el pie de todas las páginas, con la información básica de protección de datos junto a la casilla del formulario. Titular: Fisiosten Recovery SL, CIF B55479349, Glorieta Plus Ultra 2, 41013 Sevilla, academy@osten.es. Falta confirmar con el cliente:
  - (Hecho) Registro Mercantil de Sevilla, hoja SE-144909, inscripción 1.ª (BORME 26/06/2024), añadido al aviso legal.
  - El plazo de conservación de preinscripciones no formalizadas (puesto a 12 meses).
- **Condiciones de inscripción**: antes de activar el pago hacen falta unas condiciones de contratación (precio, qué incluye, cancelación por parte del alumno y de la academia, devoluciones, desistimiento). El banco las revisa al dar de alta el TPV.
- **Analítica**: si se añade Google Analytics u otra herramienta con cookies no técnicas, hay que poner un banner de consentimiento y actualizar `/cookies/`.
- **Pasarela BBVA (Redsys)**: la solicita Osten como titular. BBVA envía código de comercio (FUC), terminal y clave SHA-256 de pruebas (`https://sis-t.redsys.es:25443/sis/realizarPago`). Hacen falta un PHP que calcule el importe en servidor, firme el pedido (HMAC SHA-256) y redirija a Redsys, y una URL de notificación que verifique la firma. Tras las compras de prueba se pide el paso a real (claves distintas).
- **Escudos de clubes**: confirmar permiso de uso (Sevilla FC, CD Utrera, Euskadi Rugby, CD SADUS).
- Precios y fechas siguen marcados como provisionales en el pie.
