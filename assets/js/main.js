"use strict";
// Osten Academy — interacción de la web (el contenido ya viene en el HTML)
const FORM_ENDPOINT = "/api/preinscripcion.php";
const eur = n => n.toLocaleString("es-ES") + " €";

// Enlaces antiguos con #seccion (versión de una sola página) -> nuevas URLs
(() => {
  const legacy = { tutores: "/tutores/", cursos: "/cursos/", instalaciones: "/instalaciones/", pago: "/inscripcion/", dudas: "/dudas/" };
  const h = location.hash.slice(1);
  if (location.pathname === "/" && legacy[h]) location.replace(legacy[h]);
})();

// Tutores: desplegar la trayectoria completa
document.querySelectorAll(".tut.can-open").forEach(el => {
  const btn = el.querySelector(".more-btn"), lbl = btn.querySelector(".lbl"), pm = el.querySelector(".ph-more");
  el.addEventListener("click", e => {
    if (e.target.closest("a")) return;
    if (el.classList.contains("open") && e.target.closest(".ext")) return;
    const open = el.classList.toggle("open");
    btn.setAttribute("aria-expanded", open);
    lbl.textContent = open ? "Ver menos" : "Leer más · trayectoria completa";
    if (pm) pm.textContent = open ? "− Ver menos" : "+ Ver trayectoria";
    if (!open) el.scrollIntoView({ behavior: "smooth", block: "start" });
  });
});
// Si se llega a /tutores/#nombre, abrir esa ficha
if (location.hash) {
  const t = document.getElementById(location.hash.slice(1));
  if (t && t.matches(".tut.can-open")) t.querySelector(".more-btn").click();
}

// Inscripción: resumen de precios, preselección y envío
const form = document.getElementById("form");
if (form) {
  const checks = document.getElementById("checks");
  const boxes = [...checks.querySelectorAll('input[name="talleres"]')];
  const item = b => ({ id: b.dataset.id, name: b.value, price: +b.dataset.price, h: +b.dataset.h });
  const msg = document.getElementById("formMsg"), comments = document.getElementById("msg");

  function best(sel) {
    const sum = sel.reduce((s, c) => s + c.price, 0);
    if (sel.length === boxes.length) return { total: 795, label: "Pack completo (6 talleres)", sum };
    const eight = sel.filter(c => c.h === 8);
    if (eight.length >= 3) {
      const rest = sel.filter(c => !eight.slice(0, 3).includes(c)).reduce((s, c) => s + c.price, 0);
      return { total: 390 + rest, label: "Pack 3 talleres de 8 h", sum };
    }
    return { total: sum, label: "", sum };
  }
  function update() {
    const sel = boxes.filter(b => b.checked).map(item);
    const list = document.getElementById("sumList");
    list.replaceChildren(...(sel.length ? sel : [null]).map(c => {
      const li = document.createElement("li");
      if (!c) { li.innerHTML = "<span>Elige uno o varios talleres</span>"; return li; }
      const a = document.createElement("span"), b = document.createElement("span");
      a.textContent = c.name; b.textContent = eur(c.price); li.append(a, b); return li;
    }));
    const r = best(sel);
    document.getElementById("sumTotal").textContent = eur(r.total);
    document.getElementById("sumSaving").textContent = r.label ? `${r.label}: ahorras ${eur(r.sum - r.total)}` : "";
  }
  checks.addEventListener("change", update);

  // /inscripcion/?taller=vendaje  ·  /inscripcion/?aviso=texto
  const q = new URLSearchParams(location.search);
  q.getAll("taller").forEach(id => { const b = boxes.find(x => x.dataset.id === id); if (b) b.checked = true; });
  const aviso = (q.get("aviso") || "").slice(0, 200);
  if (aviso && !comments.value.includes(aviso)) comments.value = (comments.value ? comments.value + "\n" : "") + aviso;
  update();

  function show(t, ok) {
    msg.textContent = t;
    msg.style.background = ok ? "var(--tint)" : "#FBEBEB";
    msg.style.color = ok ? "var(--brand)" : "#9B2C2C";
    msg.classList.add("show");
  }
  form.addEventListener("submit", async e => {
    e.preventDefault();
    if (!form.checkValidity()) { form.reportValidity?.(); show("Revisa los campos obligatorios y acepta la política de datos.", false); return; }
    if (!boxes.some(b => b.checked) && !comments.value.includes("online")) { show("Elige al menos un taller o un curso online.", false); return; }
    const live = !/claude|localhost|127\.0\.0\.1/.test(location.hostname) && location.protocol !== "file:";
    if (!live) { show("Vista previa: el formulario funcionará cuando la web esté publicada. No se ha enviado nada.", false); return; }
    try {
      const r = await fetch(FORM_ENDPOINT, {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded", "Accept": "application/json" },
        body: new URLSearchParams(new FormData(form)).toString()
      });
      const j = await r.json().catch(() => ({}));
      if (!r.ok || !j.ok) throw new Error();
      form.reset(); update(); show("¡Preinscripción recibida! Te escribiremos para confirmar tu plaza.", true);
    } catch (_) { show("No se ha podido enviar. Inténtalo de nuevo en unos minutos.", false); }
  });
}
