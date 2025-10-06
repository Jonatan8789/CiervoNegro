document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".faq-tabs .tab");
  const contents = document.querySelectorAll(".faq-content .faq-list");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // Quitar activo a todas las pestañas
      tabs.forEach(t => t.classList.remove("active"));
      // Agregar activo a la pestaña clicada
      tab.classList.add("active");

      // Ocultar todos los contenidos
      contents.forEach(c => c.classList.remove("active"));
      // Mostrar el contenido correspondiente
      const target = tab.getAttribute("data-tab");
      document.querySelector(`[data-content="${target}"]`).classList.add("active");
    });
  });
});