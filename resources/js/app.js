// Bootstrap 5 (CSS + JS)
import 'bootstrap/dist/css/bootstrap.min.css';
import './bootstrap';
import 'bootstrap';
import "bootstrap-icons/font/bootstrap-icons.css";

// CSS global (páginas públicas, login, welcome, etc.)
import '../css/style.css';

// Alpine.js (opcional)
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Garantir que o bootstrap esteja global
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const content = document.querySelector(".content-area");
    const toggle = document.getElementById("toggleSidebar");

    if (!sidebar || !content || !toggle) return;

    toggle.addEventListener("click", () => {
        const collapsed = sidebar.classList.toggle("collapsed");
        content.classList.toggle("sidebar-collapsed", collapsed);

        // tooltips só quando colapsado
        if (collapsed) {
            document
                .querySelectorAll('[data-bs-toggle="tooltip"]')
                .forEach(el => new bootstrap.Tooltip(el));
        }
    });
});
